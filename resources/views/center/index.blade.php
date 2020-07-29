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
            @forelse($centers as $center)
                <div class="col-4 mb-3">
                    <div class="media border shadow p-3 bg-light" style="border-radius:15px;">
                        <i class="fas fa-hospital text-danger" style="font-size:35px;"></i>
                        <!-- <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;"> -->
                        <div class="row d-flex">
                            <div>
                                <div class="media-body" style="font-size:12px;">
                                    <b class="ml-4">Center ID:</b> {{ $center->c_id }} <br>
                                    <b class="ml-4">Name:</b> {{ $center->name }} <br>
                                    <b class="ml-4">Address:</b> {{ $center->address }} <br>
                                    <b class="ml-4">Phone:</b> {{ $center->phone_1 }} <br>
                                    <b class="ml-4">Email:</b> {{ $center->email }}
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
            @empty
            @endforelse
        </div>
    </div>
@endsection
