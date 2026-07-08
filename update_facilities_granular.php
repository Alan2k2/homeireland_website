<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

echo "Starting DB updates for granular facilities...\n";

if (Schema::hasColumn('facilities', 'type') && !Schema::hasColumn('facilities', 'category_ids')) {
    Schema::table('facilities', function (Blueprint $table) {
        $table->string('category_ids', 255)->nullable()->after('type');
    });
    echo "Added 'category_ids' column.\n";
} elseif (!Schema::hasColumn('facilities', 'category_ids')) {
    Schema::table('facilities', function (Blueprint $table) {
        $table->string('category_ids', 255)->nullable()->after('name');
    });
    echo "Added 'category_ids' column.\n";
}

// Migrate data
$allCategories = DB::table('main_category')->pluck('id')->toArray();
$allCategoriesStr = implode(',', $allCategories);

$residentialCategories = [1, 2, 5, 8, 9, 10];
$residentialCategoriesStr = implode(',', $residentialCategories);

$commercialCategories = [3, 6, 11];
$commercialCategoriesStr = implode(',', $commercialCategories);

if (Schema::hasColumn('facilities', 'type')) {
    DB::table('facilities')->where('type', 'all')->update(['category_ids' => $allCategoriesStr]);
    DB::table('facilities')->where('type', 'residential')->update(['category_ids' => $residentialCategoriesStr]);
    DB::table('facilities')->where('type', 'commercial')->update(['category_ids' => $commercialCategoriesStr]);

    Schema::table('facilities', function (Blueprint $table) {
        $table->dropColumn('type');
    });
    echo "Dropped 'type' column.\n";
} else {
    // If type doesn't exist, just set everything to all for safety
    DB::table('facilities')->whereNull('category_ids')->update(['category_ids' => $allCategoriesStr]);
}

echo "DB updates complete.\n";
