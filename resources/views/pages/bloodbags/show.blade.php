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
                                <b>BloodBag ID</b>: BB1901 <br>
                                <b>Type</b>: Blood <br>
                                <b>Quantity (cc)</b>: 546 <br>
                                <b>Expires</b>: 21-03-2020 <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <b>BloodBag ID</b>: BB1901 <br>
                                <b>Type</b>: Blood <br>
                                <b>Quantity (cc)</b>: 546 <br>
                                <b>Expires</b>: 21-03-2020 <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <b>BloodBag ID</b>: BB1901 <br>
                                <b>Type</b>: Blood <br>
                                <b>Quantity (cc)</b>: 546 <br>
                                <b>Expires</b>: 21-03-2020 <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <b>BloodBag ID</b>: BB1901 <br>
                                <b>Type</b>: Blood <br>
                                <b>Quantity (cc)</b>: 546 <br>
                                <b>Expires</b>: 21-03-2020 <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <b>BloodBag ID</b>: BB1901 <br>
                                <b>Type</b>: Blood <br>
                                <b>Quantity (cc)</b>: 546 <br>
                                <b>Expires</b>: 21-03-2020 <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <b>BloodBag ID</b>: BB1901 <br>
                                <b>Type</b>: Blood <br>
                                <b>Quantity (cc)</b>: 546 <br>
                                <b>Expires</b>: 21-03-2020 <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <b>BloodBag ID</b>: BB1901 <br>
                                <b>Type</b>: Blood <br>
                                <b>Quantity (cc)</b>: 546 <br>
                                <b>Expires</b>: 21-03-2020 <br>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')