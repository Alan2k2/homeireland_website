<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

echo "Starting DB updates...\n";

if (!Schema::hasColumn('facilities', 'type')) {
    Schema::table('facilities', function (Blueprint $table) {
        $table->string('type', 50)->default('residential');
    });
    echo "Added 'type' column to facilities table.\n";
} else {
    echo "'type' column already exists.\n";
}

// Update common facilities to 'all'
DB::table('facilities')->whereIn('name', [
    'parking',
    'BroadBand',
    'Alarm',
    'wheelchair Access',
    'Step Free Access',
    'EV Charging Station'
])->update(['type' => 'all']);
echo "Updated common facilities to 'all'.\n";

// Insert commercial facilities if they don't exist
$commercialFacilities = [
    '3 Phase Power',
    'Loading Bay',
    'Roller Shutters',
    'Security Cameras',
    'Office Space',
    'High Speed Internet',
    'Meeting Rooms',
    'Kitchenette',
    'Goods Lift'
];

foreach ($commercialFacilities as $name) {
    $exists = DB::table('facilities')->where('name', $name)->exists();
    if (!$exists) {
        DB::table('facilities')->insert([
            'name' => $name,
            'type' => 'commercial',
            'status' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        echo "Inserted $name\n";
    }
}

echo "DB updates complete.\n";
