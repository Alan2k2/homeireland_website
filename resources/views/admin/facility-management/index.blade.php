@extends('layouts.admin.main')
@section('content')
    @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
            @endif
<div class="spacer"></div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card card">
 <div class="card-header d-flex justify-content-between align-items-center">
    <span>Facility Management</span>
    <a href="{{ url('admin/facility-management/create') }}" class="btn btn-danger">
        + Add Facility
    </a>
    
</div>

        

            <div class="spaceman">
                <section>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Facility Name</th>
                            <th>Assigned Categories</th>
                            <!-- <th>Description</th> -->
                            <th>Actions</th>
                        </tr>

                        @foreach($facilities as $f)
                        <tr>
                            <td>{{ $f->id }}</td>
                            <td>{{ $f->name }}</td>
                            <td>
                                @php
                                    $assignedIds = $f->category_ids ? explode(',', $f->category_ids) : [];
                                    $catNames = [];
                                    foreach($assignedIds as $cid) {
                                        if (isset($mainCategories[$cid])) {
                                            $catNames[] = $mainCategories[$cid]->main_name;
                                        }
                                    }
                                @endphp
                                {{ count($catNames) > 0 ? implode(', ', $catNames) : 'None' }}
                            </td>
                            <!-- <td>{{ $f->description }}</td> -->

                            <td>
                                <a href="{{ url('admin/facility-management/edit/'.$f->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>

                                <a href="{{ url('admin/facility-management/delete/'.$f->id) }}"
                                    onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </section>
            </div>

        </div>
    </div>
</div>

@endsection