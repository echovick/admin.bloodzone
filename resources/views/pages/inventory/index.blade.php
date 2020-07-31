@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inventory</h1>
        </div>
        <div class="row mb-4">
            @forelse($bloodBags as $bloodBag)
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-lg font-weight-bold text-danger text-uppercase mb-1">
                                        {{ $bloodBag->blood_type }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        681 Unit(s)
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-tint fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="col-11" style="margin-left:-8px;">
                                    <a href="#" class="btn btn-sm btn-block btn-danger">Open</a>
                                </div>
                                <div class="row">
                                    <a href="#" class="btn btn-sm btn-danger ml-1"><i class="fas fa-plus"></i></a>
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
