@extends('layouts.admin.main')
@section('content')

@php
    $type = request()->get('type');   // standard or featured
@endphp

<div class="card">
    <div class="card-header">
        <h4>Edit Advertisement ({{ ucfirst($type) }})</h4>
    </div>

    <div class="card-body">

        <form action="{{ url('admin/Advertisement_update/'.$ad->id) }}?type={{ $type }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Page Name --}}
            <div class="mb-3">
                <label class="form-label">Page Name</label>
                <input type="text" class="form-control" value="{{ $ad->page_name }}" readonly>
            </div>

            {{-- Position --}}
            <div class="mb-3">
                <label class="form-label">Position</label>
                <input type="text" class="form-control" value="{{ $ad->position }}" readonly>
            </div>

            {{-- Duration --}}
            <div class="mb-3">
                <label class="form-label">Duration (Days)</label>
                <input type="number" name="duration" class="form-control" 
                       value="{{ $ad->duration }}" required>
            </div>

            {{-- Status --}}
            <div class="mb-3">
                <label class="form-label">Status ({{ ucfirst($type) }})</label>

                <select name="type_status" class="form-control">
                    @if($type == 'standard')
                        <option value="1" {{ $ad->standard_status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $ad->standard_status == 0 ? 'selected' : '' }}>Inactive</option>
                    @else
                        <option value="1" {{ $ad->featured_status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $ad->featured_status == 0 ? 'selected' : '' }}>Inactive</option>
                    @endif
                </select>
            </div>

            {{-- Price --}}
            @if($type == 'standard')
                <div class="mb-3">
                    <label class="form-label">Standard Price</label>
                    <input type="text" name="Standard_price" class="form-control" 
                           value="{{ $ad->Standard_price }}" required>
                </div>
            @else
                <div class="mb-3">
                    <label class="form-label">Featured Price</label>
                    <input type="text" name="Featured_price" class="form-control" 
                           value="{{ $ad->Featured_price }}" required>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url('admin/Advertisement_page?a=1&b=1') }}" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
</div>

@endsection
