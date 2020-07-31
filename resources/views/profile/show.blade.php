@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Profile Dashboard</h1>
        </div>
        <hr class="mt-0"/>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#account">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#security">Security</a>
            </li>
            {{--<li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Password</a>
            </li>--}}
        </ul>

        <!-- Tab panes -->
        <div class="tab-content shadow-sm pb-2">
            <div id="account" class="container tab-pane active"><br>
                {{--<h3>Account</h3>--}}
                <form method="POST" action="{{ route('admin.update', auth()->id()) }}" id="edit-admin-account">
                    @csrf
                    @method('patch')

                    <div class="form-group row text-sm">
                        <div class="col-md-6">
                            <label for="admin_id">{{ __('Admin Id') }}</label>
                            <input id="admin_id" type="text"
                                   class="form-control form-control-sm @error('admin_id') is-invalid @enderror" name="admin_id"
                                   value="{{ auth()->user()->admin_id }}" autocomplete="admin_id" readonly>

                            {{--<span id="admin_idValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>--}}
                        </div>

                        <div class="col-md-6">
                            <label for="first_name">{{ __('First Name') }}</label>
                            <input id="first_name" type="text"
                                   class="form-control form-control-sm @error('first_name') is-invalid @enderror"
                                   name="first_name" value="{{ auth()->user()->first_name }}" autocomplete="first_name"
                                   autofocus>

                            <span id="first_nameValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="last_name">{{ __('Last Name') }}</label>
                            <input id="last_name" type="text"
                                   class="form-control form-control-sm @error('last_name') is-invalid @enderror"
                                   name="last_name" value="{{ auth()->user()->last_name }}" autocomplete="last_name" autofocus>

                            <span id="last_nameValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <label for="date_of_birth">{{ __('Date Of Birth') }}</label>
                            <input id="date_of_birth" type="date"
                                   class="form-control form-control-sm @error('date_of_birth') is-invalid @enderror"
                                   name="date_of_birth" value="{{ auth()->user()->date_of_birth }}"
                                   autocomplete="date_of_birth" autofocus>

                            <span id="date_of_birthValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="gender">{{ __('Gender') }}</label>
                            <select id="gender" type="text"
                                    class="form-control form-control-sm @error('gender') is-invalid @enderror" name="gender"
                                    autocomplete="gender" autofocus>
                                <option value="" disabled>Select Gender</option>
                                <option value="M" @if(auth()->user()->gender == 'M') selected @endif>Male</option>
                                <option value="F" @if(auth()->user()->gender == 'F') selected @endif>Female</option>
                            </select>

                            <span id="genderValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email"
                                   class="form-control form-control-sm @error('email') is-invalid @enderror" name="email"
                                   value="{{ auth()->user()->email }}" autocomplete="email">

                            <span id="emailValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="phone">{{ __('Phone') }}</label>
                            <input id="phone" type="text"
                                   class="form-control form-control-sm @error('phone') is-invalid @enderror" name="phone"
                                   value="{{ auth()->user()->phone }}" autocomplete="phone" autofocus>

                            <span id="phoneValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <label for="address">{{ __('Address') }}</label>
                            <input id="address" type="text"
                                   class="form-control form-control-sm @error('address') is-invalid @enderror" name="address"
                                   value="{{ auth()->user()->address }}" autocomplete="address" autofocus>

                            <span id="addressValid" class="invalid-feedback" role="alert">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-md-center">
                            <button type="submit" class="btn btn-sm btn-danger">
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </div>

                    <div class="form-group row my-2">
                        <div id="mess" class="col-12" style="display: none;">
                            <i class="text-danger fa fa-exclamation-circle"></i> <span class="text-primary">Please Wait...</span>
                        </div>
                    </div>
                </form>
            </div>

            <div id="security" class="container tab-pane fade"><br>
                <form method="POST" action="{{ route('admin.update', auth()->id()) }}" id="edit-admin-security">
                    @csrf
                    @method('patch')

                    <div class="form-group row text-sm">
                        <div class="col-md-12">
                            <label for="current-password">{{ __('Current Password') }}</label>
                            <div class="position-relative">
                                <input id="current-password" type="password"
                                       class="form-control form-control-sm" name="current-password"
                                       autocomplete="new-password">
                                <a type="button" title="show password text" class="show-password position-absolute" style="z-index: 100;right: 5px;top: 5px;font-size: 14px">
                                    <i class="fas fa-eye text-muted"></i>
                                </a>
                                <span id="current-passwordValid" class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row text-sm">
                        <div class="col-md-12">
                            <label for="password">{{ __('New Password') }}</label>
                            <div class="position-relative">
                                <input id="password" type="password"
                                       class="form-control form-control-sm" name="password"
                                       autocomplete="new-password">
                                <a type="button" title="show password text" class="show-password position-absolute" style="z-index: 100;right: 5px;top: 5px;font-size: 14px">
                                    <i class="fas fa-eye text-muted"></i>
                                </a>
                                <span id="passwordValid" class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-md-center">
                            <button type="submit" class="btn btn-sm btn-danger">
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </div>

                    <div class="form-group row my-2">
                        <div id="mess" class="col-12" style="display: none;">
                            <i class="text-danger fa fa-exclamation-circle"></i> <span class="text-primary">Please Wait...</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
