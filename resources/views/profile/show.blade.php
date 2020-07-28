@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <hr class="mt-0"/>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Bio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Password</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <h3>Bio Info</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>Account Info</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <h3>Password</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
    </div>
@endsection
