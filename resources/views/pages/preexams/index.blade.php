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
        @forelse($preExams as $preExam)
        <div class="col-4 mb-3">
            <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                <i class="fas fa-file text-danger" style="font-size:35px;"></i>
                <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                <div class="row d-flex">
                    <div>
                        <div class="media-body" style="font-size:12px;">
                            <b class="ml-4">Pre Exam ID:</b> {{ $preExam->pe_id }} <br>
                            <b class="ml-4">Hemoglobin:</b> {{ $preExam->hemoglobin_gDl . ' g/dl' }} <br>
                            <b class="ml-4">Temperature:</b> {{ $preExam->temperature_F }} <br>
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
        @empty
            <div class="alert alert-info p-3">
                <i class="fa fa-exclamation-circle"></i>
                The are currently no records!!!
            </div>
        @endforelse
    </div>
</div>
@endsection
