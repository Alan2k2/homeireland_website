@extends('layouts.admin.main')
@section('content')

<div class="spacer"></div>

<div class="row">
    <div class="col-md-12">

        <div class="main-card card">
            <div class="card-header">Add Facility</div>

            <div class="spaceman">
                <section>
                    <form method="POST" id="addFacilityForm" action="{{ url('admin/facility-management/store') }}">
                        @csrf

                        <div class="p-2">
                            <div class="col-md-6">
                                <label>Facility Name</label>
                                <input type="text" id="facilityName" name="name" class="form-control" required>
                                <small id="nameError" class="text-danger" style="display:none;"></small>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label>Assign to Categories</label>
                                <div class="row">
                                    @foreach($mainCategories as $cat)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="category_ids[]" value="{{ $cat->id }}" id="cat_{{ $cat->id }}">
                                            <label class="form-check-label" for="cat_{{ $cat->id }}">
                                                {{ $cat->main_name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- <div class="col-md-12 mt-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div> -->
                        

                        <br>
                        <button type="submit" id="saveBtn" class="btn btn-danger d-block mx-auto next">Save</button>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('addFacilityForm');
    const nameField = document.getElementById('facilityName');
    const nameError = document.getElementById('nameError');
    const saveBtn = document.getElementById('saveBtn');

    if (!form || !nameField) return;

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
