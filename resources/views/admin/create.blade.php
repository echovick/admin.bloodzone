@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Create New Admin</h1>

        <!-- New Donor -->
        <div class="card card-register mx-auto mt-1">
            <div class="card-header">New Admin</div>
            <div class="card-body">
                <form method="POST" action="/u">
                    @csrf

                    <div class="form-group row">

                        <div class="col-md-6">
                            {{ __('Admin ID') }}
                            <input id="admin_id" type="text" class="form-control @error('admin_id') is-invalid @enderror"
                                   name="admin_id" value="Auto Genetrated" required autocomplete="admin_id" readonly>

                            @error('admin_id')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            {{ __('First Name') }}
                            <input id="first_name" type="text"
                                   class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                   value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('Last Name') }}
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                   name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            {{ __('Date Of Birth') }}
                            <input id="date_of_birth" type="date"
                                   class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                                   value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                            @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('Gender') }}
                            <select id="gender" type="text" class="form-control @error('gender') is-invalid @enderror"
                                    name="gender" required autocomplete="gender" autofocus>
                                <option value="{{ old('gender') }}"
                                ">Select Gender</option>
                                <option value=" M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            {{ __('E-Mail Address') }}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-6">
                            {{ __('Phone') }}
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            {{ __('Address') }}
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                   name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            {{ __('Password') }}
                            <div class="position-relative">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password" required
                                       autocomplete="new-password">
                                <a type="button" title="show password text" class="show-password position-absolute" style="z-index: 100;right: 5px;top: 8px;font-size: 14px">
                                    <i class="fas fa-eye text-muted"></i>
                                </a>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection
