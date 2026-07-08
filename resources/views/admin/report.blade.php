@extends('layouts.admin.main')
@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="card">
    <div class="card-body">
        <strong>Total Amount (All Users) From Current Month:</strong>&nbsp;€&nbsp;{{ $totalAmount }}
    </div>
</div>

<!-- Filter Options Card -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Filter Options</h5>
        <form method="GET" action="{{ route('admin.report') }}">
            <div class="row">
                <!-- Filter by Role -->
                <div class="col-md-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-select">
                        <option value="">All Roles</option>
                        <option value="agent" {{ request('role') == 'agent' ? 'selected' : '' }}>Agent</option>
                        <option value="pseller" {{ request('role') == 'pseller' ? 'selected' : '' }}>Seller</option>
                        <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <!-- Filter by Date Range -->
                <div class="col-md-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{ request('end_date') }}">
                </div>
                <!-- Search by Name -->
                <div class="col-md-3">
                    <label for="name" class="form-label">Search by Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="{{ request('name') }}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-end">
                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                    <a href="{{ route('admin.report') }}" class="btn btn-secondary">Reset</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col my-5">
    <div class="container-fluid">
        <!-- Right-aligned button -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">User Reports</h5>
            <a href="{{ route('admin.export_report') }}" class="btn btn-primary">
                Export Report
             </a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Invoice ID</th>
                    <th scope="col">Payment ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Total Orders</th>
                    <th scope="col">Total Amount</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $grandTotal = 0;
                @endphp
                @foreach($users as $key => $user)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->unique_id }}</td>
                    <td>{{ $user->order_id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->total_orders }}</td>
                    <td>€&nbsp;{{ $user->total_amount }}</td>
                    @php
                        $grandTotal += $user->total_amount;
                    @endphp
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="8" class="text-end">Total Amount:</th>
                    <td colspan="3">€&nbsp;{{ $grandTotal }}</td>
                </tr>
            </tfoot>
        </table>

        <div>
            {{ $users->links() }}
        </div>
    </div>
</div>

@endsection
