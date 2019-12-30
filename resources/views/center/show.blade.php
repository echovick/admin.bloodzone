@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Centers</h1>
    </div>
    <div class="row">
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-hospital text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Center ID:</b> CE191 <br>
                            <b class="ml-4">Name:</b> Daughters Of charity <br>
                            <b class="ml-4">Address:</b> Phase 3, Kubwa <br>
                            <b class="ml-4">Phone:</b> 08092837463 <br>
                            <b class="ml-4">Email:</b> daughtersofcharity@gmail.com
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-hospital text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Center ID:</b> CE191 <br>
                            <b class="ml-4">Name:</b> Daughters Of charity <br>
                            <b class="ml-4">Address:</b> Phase 3, Kubwa <br>
                            <b class="ml-4">Phone:</b> 08092837463 <br>
                            <b class="ml-4">Email:</b> daughtersofcharity@gmail.com
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-hospital text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Center ID:</b> CE191 <br>
                            <b class="ml-4">Name:</b> Daughters Of charity <br>
                            <b class="ml-4">Address:</b> Phase 3, Kubwa <br>
                            <b class="ml-4">Phone:</b> 08092837463 <br>
                            <b class="ml-4">Email:</b> daughtersofcharity@gmail.com
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-hospital text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Center ID:</b> CE191 <br>
                            <b class="ml-4">Name:</b> Daughters Of charity <br>
                            <b class="ml-4">Address:</b> Phase 3, Kubwa <br>
                            <b class="ml-4">Phone:</b> 08092837463 <br>
                            <b class="ml-4">Email:</b> daughtersofcharity@gmail.com
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-hospital text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Center ID:</b> CE191 <br>
                            <b class="ml-4">Name:</b> Daughters Of charity <br>
                            <b class="ml-4">Address:</b> Phase 3, Kubwa <br>
                            <b class="ml-4">Phone:</b> 08092837463 <br>
                            <b class="ml-4">Email:</b> daughtersofcharity@gmail.com
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
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