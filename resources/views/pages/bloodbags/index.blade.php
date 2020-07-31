@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blood Bags</h1>
        </div>
        <div class="row mb-4">
            @forelse($bloodBags as $bloodBag)
                <div class="col-2 mb-3">
                    <div class="card shadow" style="width:150px; border-radius:30px;">
                        <div class="d-flex flex-content-justify p-4">
                            <div>
                                <i class="fa fa-tint text-danger" style="font-size:100px; text-align:center;"></i>
                            </div>
                            <div>
                                <h3 class="text-dark text-weight-bold">B+</h3>
                            </div>
                        </div>
                        <div class="card-body" style="margin-top:-20px;">
                            <div class="d-flex">
                                <div style="font-size:11px;">
                                    <a class="text-dark" href="#" style="text-decoration:none;">
                                        <b>BloodBag</b>: {{ $bloodBag->bb_id }} <br>
                                        <b>Type</b>: {{ $bloodBag->blood_type }} <br>
                                        <b>Quantity (cc)</b>: {{ $bloodBag->quantity_cc }} <br>
                                        <b>Expires</b>: {{ $bloodBag->expiry_date }} <br>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection('content')
