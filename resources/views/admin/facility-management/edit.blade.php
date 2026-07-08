@extends('layouts.admin.main')
@section('content')

<div class="spacer"></div>

<div class="row">
    <div class="col-md-12">

        <div class="p-2 main-card card">
            <div class="card-header">Edit Facility</div>

            <div class="spaceman">
                <section>
                    <form method="POST" id="editFacilityForm" action="{{ url('admin/facility-management/update/'.$facility->id) }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label>Facility Name</label>
                                <input type="text" id="facilityName" name="name" class="form-control" 
                                       value="{{ $facility->name }}" required>

                                <!-- Error text -->
                                <small id="nameError" class="text-danger" style="display:none;"></small>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label>Assign to Categories</label>
                                <div class="row">
                                    @php
                                        $assignedIds = $facility->category_ids ? explode(',', $facility->category_ids) : [];
                                    @endphp
                                    @foreach($mainCategories as $cat)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="category_ids[]" value="{{ $cat->id }}" id="cat_{{ $cat->id }}" {{ in_array($cat->id, $assignedIds) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="cat_{{ $cat->id }}">
                                                {{ $cat->main_name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Description field if needed --}}
                            {{-- 
                            <div class="col-md-12 mt-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $facility->description }}</textarea>
                            </div>
                            --}}
                        </div>

                        <br>

                        <button type="submit" id="saveBtn" class="p-2 btn btn-danger next d-block mx-auto">Update</button>
                    </form>
                </section>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('editFacilityForm');
    const nameField = document.getElementById('facilityName');
    const nameError = document.getElementById('nameError');
    const saveBtn = document.getElementById('saveBtn');

    if (!form || !nameField) {
        console.error('Edit Facility form or name field not found on page.');
        return;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault(); 
        nameError.style.display = 'none';
        nameError.textContent = '';
        nameField.classList.remove('is-invalid');

        const value = nameField.value.trim();

        // Required
        if (value === '') {
            nameError.textContent = 'Facility Name is required.';
            nameError.style.display = 'block';
            nameField.classList.add('is-invalid');
            nameField.focus();
            return;
        }

        // Only letters + spaces
        const validRegex = /^[A-Za-z\s]+$/;
        if (!validRegex.test(value)) {
            nameError.textContent = 'Facility Name may only contain letters and spaces.';
            nameError.style.display = 'block';
            nameField.classList.add('is-invalid');
            nameField.focus();
            return;
        }

        // Disable button and submit
        saveBtn.disabled = true;
        saveBtn.textContent = 'Saving...';

        setTimeout(function () {
            form.submit();
        }, 150);
    });

    // Remove error while typing
    nameField.addEventListener('input', function () {
        if (nameField.value.trim() !== '') {
            nameError.style.display = 'none';
            nameError.textContent = '';
            nameField.classList.remove('is-invalid');
        }
    });
});
</script>

@endsection
