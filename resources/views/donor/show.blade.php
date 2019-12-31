@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Donors</h1>
    </div>
    <div class="row">
        <div class="col-3 mb-3">
            <div class="card shadow" style="width:220px;">
                <img class="card-img-top" style="length:60px;" src="{{ asset('images/img_avatar1.png')}}"
                    alt="Card image">
                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <i class="fas fa-tint"></i> - B+ <br>
                                    <i class="fas fa-user"></i> - Eze Uchechukwu <br>
                                    <i class="fas fa-phone"></i> - 08131117279 <br>
                                    <i class="fas fa-male"></i>/<i class="fas fa-male"></i> - Male
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
        <div class="col-3 mb-3">
            <div class="card shadow" style="width:220px;">
                <img class="card-img-top" style="length:60px;" src="{{ asset('images/img_avatar1.png')}}"
                    alt="Card image">
                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <i class="fas fa-tint"></i> - B+ <br>
                                    <i class="fas fa-user"></i> - Eze Uchechukwu <br>
                                    <i class="fas fa-phone"></i> - 08131117279 <br>
                                    <i class="fas fa-male"></i>/<i class="fas fa-male"></i> - Male
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
        <div class="col-3 mb-3">
            <div class="card shadow" style="width:220px;">
                <img class="card-img-top" style="length:60px;" src="{{ asset('images/img_avatar1.png')}}"
                    alt="Card image">
                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <i class="fas fa-tint"></i> - B+ <br>
                                    <i class="fas fa-user"></i> - Eze Uchechukwu <br>
                                    <i class="fas fa-phone"></i> - 08131117279 <br>
                                    <i class="fas fa-male"></i>/<i class="fas fa-male"></i> - Male
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
        <div class="col-3 mb-3">
            <div class="card shadow" style="width:220px;">
                <img class="card-img-top" style="length:60px;" src="{{ asset('images/img_avatar1.png')}}"
                    alt="Card image">
                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <i class="fas fa-tint"></i> - B+ <br>
                                    <i class="fas fa-user"></i> - Eze Uchechukwu <br>
                                    <i class="fas fa-phone"></i> - 08131117279 <br>
                                    <i class="fas fa-male"></i>/<i class="fas fa-male"></i> - Male
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
        <div class="col-3 mb-3">
            <div class="card shadow" style="width:220px;">
                <img class="card-img-top" style="length:60px;" src="{{ asset('images/img_avatar1.png')}}"
                    alt="Card image">
                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <i class="fas fa-tint"></i> - B+ <br>
                                    <i class="fas fa-user"></i> - Eze Uchechukwu <br>
                                    <i class="fas fa-phone"></i> - 08131117279 <br>
                                    <i class="fas fa-male"></i>/<i class="fas fa-male"></i> - Male
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
        <div class="col-3 mb-3">
            <div class="card shadow" style="width:220px;">
                <img class="card-img-top" style="length:60px;" src="{{ asset('images/img_avatar1.png')}}"
                    alt="Card image">
                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <i class="fas fa-tint"></i> - B+ <br>
                                    <i class="fas fa-user"></i> - Eze Uchechukwu <br>
                                    <i class="fas fa-phone"></i> - 08131117279 <br>
                                    <i class="fas fa-male"></i>/<i class="fas fa-male"></i> - Male
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
    </div>
</div>
@endsection