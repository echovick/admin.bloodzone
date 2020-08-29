@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Patients</h1>
    </div>
    <div class="row">
        @forelse($patients as $patient)
        <div class="col-3 mb-3">
            <div class="card shadow" style="width:220px;">
                <img class="card-img-top" style="length:60px;" src="{{ asset('images/img_avatar1.png')}}"
                    alt="Card image">
                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <i class="fas fa-tint"></i> - {{ $patient->blood_type }} <br>
                                    <i class="fas fa-user"></i> - {{ $patient->last_name . ' ' . $patient->first_name }} <br>
                                    <i class="fas fa-calendar"></i> - {{ $patient->date_of_birth }} <br>
                                    <i class="fas fa-phone"></i> - {{ $patient->phone }} <br>
                                    <b>Need Status</b> - <label class="bg-danger p-1 rounded text-white"
                                        style="font-size:10px;">{{ $patient->need_status }}</label>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 pr-2">
                        <button class="btn btn-sm btn-danger" style="font-size:10px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <div class="alert alert-info p-3">
                <i class="fa fa-exclamation-circle"></i>
                The are currently no patients!!!
            </div>
        @endforelse
    </div>
</div>
@endsection
