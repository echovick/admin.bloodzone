@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-danger" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admins</h1>
    </div>
    <div class="row">
        @forelse($users as $user)
            <div class="col-3 mb-3">
                <div class="card shadow" style="width:220px;">
                    <img class="card-img-top" style="width: 100%;" src="{{ asset('images/img_avatar1.png') }}" alt="Card image">
                    <div class="card-body">
                        <div class="d-flex">
                            <div style="font-size:11px;">
                                <a class="text-danger" href="#" style="text-decoration:none;">
                                    <div><i class="fas fa-hashtag"></i> - {{ $user->admin_id }}</div>
                                    <div class="text-capitalize"><i class="fas fa-user"></i> - {{ $user->last_name . ' ' . $user->first_name }}</div>
                                    <div><i class="fas fa-phone"></i> - {{ $user->phone }}</div>
                                    <div><i class="fas fa-envelope"></i> - {{ $user->email }}</div>
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
@endsection
