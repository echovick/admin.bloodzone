@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pre Exam Records</h1>
    </div>
    <div class="row">
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-file text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Pre Exam ID:</b> PE191 <br>
                            <b class="ml-4">Hemoglobin:</b> 15.2 g/dl <br>
                            <b class="ml-4">Temperature:</b> 98.6 <br>
                        </div>
                    </div>
                    <!-- <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-file text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Pre Exam ID:</b> PE191 <br>
                            <b class="ml-4">Hemoglobin:</b> 14.5 <br>
                            <b class="ml-4">Temperature:</b> 98.5 <br>
                        </div>
                    </div>
                    <!-- <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-file text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Pre Exam ID:</b> PE191 <br>
                            <b class="ml-4">Hemoglobin:</b> 15.7 <br>
                            <b class="ml-4">Temperature:</b> 98.5 <br>
                        </div>
                    </div>
                    <!-- <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-file text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Pre Exam ID:</b> PE191 <br>
                            <b class="ml-4">Hemoglobin:</b> 16.1 <br>
                            <b class="ml-4">Temperature:</b> 98.4 <br>
                        </div>
                    </div>
                    <!-- <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-file text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Pre Exam ID:</b> PE191 <br>
                            <b class="ml-4">Hemoglobin:</b> 14.2 <br>
                            <b class="ml-4">Temperature:</b> 98.2 <br>
                        </div>
                    </div>
                    <!-- <div>
                        <button class="btn btn-danger btn-sm" style="font-size:11px;">
                            <i class="fas fa-file"></i>
                            Details
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection