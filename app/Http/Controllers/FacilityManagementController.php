<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityManagementController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        $mainCategories = \Illuminate\Support\Facades\DB::table('main_category')->get()->keyBy('id');
        return view('admin.facility-management.index', compact('facilities', 'mainCategories'));
    }

    public function create()
    {
        $mainCategories = \Illuminate\Support\Facades\DB::table('main_category')->get();
        return view('admin.facility-management.create', compact('mainCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_ids' => 'required|array'
        ]);

        Facility::create([
            'name' => $request->name,
            'category_ids' => implode(',', $request->category_ids),
            'description' => $request->description
        ]);

        return redirect('admin/facility-management')->with('success', 'Facility added successfully!');
    }

    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        $mainCategories = \Illuminate\Support\Facades\DB::table('main_category')->get();

        return view('admin.facility-management.edit', compact('facility', 'mainCategories'));
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::findOrFail($id);

        $facility->update([
            'name' => $request->name,
            'category_ids' => $request->has('category_ids') ? implode(',', $request->category_ids) : '',
            'description' => $request->description
        ]);

       return redirect('admin/facility-management')->with('success', 'Facility updated successfully');
    }

    public function destroy($id)
    {
        Facility::destroy($id);
        return redirect()->back()->with('success', 'Facility deleted');
    }
}
