@extends('layouts.admin.main')
@section('content')

@foreach($PropertySubscription as $p)
    @php $price_array[]=$p->Price; @endphp
@endforeach

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h4> Set Payment Mode</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                <form action="{{url('admin/payment_mode_save')}}" method="post">
                    @csrf
                    <div style="display:flex">
                        @php
                            $a = $b = "";
                            if($payment_mode==1){
                                $a="selected";
                            } else {
                                $b="selected";
                            }
                        @endphp

                        <select class="form-control" name="pmode">
                            <option value="1" {{ $a }}>Active</option>
                            <option value="0" {{ $b }}>Inactive</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="card">
    <div class="card-header">
        <h4> Set Your Price</h4>
    </div>
    <div class="card-body">
        {{-- TABLE FOR DESKTOP VIEW --}}
        <div class="table-responsive d-none d-md-block">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Duration </th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($PropertySubscription as $p)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $p->Name }}</td>
                            <td>${{ $p->Price }}</td>
                            <td>{{ $p->duration }}&nbsp;Days</td>
                            <td>
                                @if($p->payment_mode==1)
                                    <span class="badge text-success">Active</span>
                                @else
                                    <span class="badge text-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/property_subscribe_edit') }}/{{ $p->id }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- CARDS FOR MOBILE VIEW --}}
        <div class="d-md-none">
            @foreach($PropertySubscription as $p)
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">{{ $p->Name }}</h5>
                        <span class="badge bg-primary fs-6">${{ $p->Price }}</span>
                    </div>
                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-5">Duration:</dt>
                            <dd class="col-sm-7">{{ $p->duration }} Days</dd>

                            <dt class="col-sm-5">Status:</dt>
                            <dd class="col-sm-7">
                                @if($p->payment_mode==1)
                                    <span class="badge text-success">Active</span>
                                @else
                                    <span class="badge text-danger">Inactive</span>
                                @endif
                            </dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('admin/property_subscribe_edit') }}/{{ $p->id }}" class="btn btn-primary btn-sm w-100">Edit Plan</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection