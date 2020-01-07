@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Register Center (Hospital / Blood Bank Facility)</h1>

    <!-- New Donor -->
    <div class="card card-register mx-auto mt-1">
        <div class="card-header">New Center</div>
        <div class="card-body">
            <form method="POST" action="/c" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        {{ __('Facility Name') }}
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
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
                    <div class="col-md-6">
                        {{ __('Phone Number') }}
                        <input id="phone_1" type="number" class="form-control @error('phone_1') is-invalid @enderror"
                            name="phone_1" value="{{ old('phone_1') }}" required autocomplete="phone_1" autofocus>

                        @error('phone_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        {{ __('Phone 2 (Optional)') }}
                        <input id="phone_2" type="number" class="form-control @error('phone_2') is-invalid @enderror"
                            name="phone_2" value="{{ old('phone_2') }}" autocomplete="phone_2" autofocus>

                        @error('phone_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        {{ __('Email') }}
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        {{ __('State') }}
                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror"
                            name="state" value="{{ old('state') }}" required autocomplete="state" autofocus>

                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        {{ __('City') }}
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                            name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        {{ __('Landmark') }}
                        <input id="landmark" type="text" class="form-control @error('landmark') is-invalid @enderror"
                            name="landmark" value="{{ old('landmark') }}" autocomplete="landmark" autofocus>

                        @error('landmark')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        {{ __('Blood Bank License') }}
                        <div class="custom-file">
                            <input class="custom-file-input @error('license') is-invalid @enderror" name="license"
                                id="customFile" type="file" value="{{ old('license') }}" required autocomplete="license"
                                autofocus>
                            <label class="custom-file-label" for="customFile">Choose file</label>

                            @error('license')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <button type="submit" class="btn btn-block btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
            <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            </script>
        </div>
    </div>
</div>
@endsection