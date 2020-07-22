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

                <hr>
                <div class="form-group row">
                    <div class="col-md-6">
                        {{ __('Bank') }}
                        <select id="bank" type="text" class="form-control @error('bank') is-invalid @enderror"
                            name="bank" required autocomplete="bank" autofocus>
                            <option value="Access Bank">Access Bank Plc</option>
                            <option value="Fideity Bank">Fidelity Bank Plc</option>
                            <option value="FCMB">First City Monument Bank Limited</option>
                            <option value="First Bank">First Bank of Nigeria Limited</option>
                            <option value="GTbank">Guaranty Trust Bank Plc</option>
                            <option value="Union bank">Union Bank of Nigeria Plc</option>
                            <option value="UBA">United Bank for Africa Plc</option>
                            <option value="Zenith Bank">Zenith Bank Plc</option>
                            <option value="Vitibank">Citibank Nigeria Limited</option>
                            <option value="Ecobank">Ecobank Nigeria Plc</option>    
                            <option value="Heritage Bank">Heritage Banking Company Limited</option>
                            <option value="Keystone Bank">Keystone Bank Limited</option>
                            <option value="Polaris Bnak">Polaris Bank Limited.</option>
                            <option value="Stanbic">Stanbic IBTC Bank Plc</option>
                            <option value="Standard Chartared">Standard Chartered</option>
                            <option value="Sterling Bank">Sterling Bank Plc</option>
                            <option value="Titan Bank">Titan Trust Bank Limited</option>
                            <option value="Unity Bank">Unity Bank Plc</option>
                            <option value="Wema Bank">Wema Bank Plc</option>
                        </select>

                        @error('bank')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        {{ __('Account Number') }}
                        <input id="account_no" type="number" class="form-control @error('account_no') is-invalid @enderror"
                            name="account_no" value="{{ old('account_no') }}" min-lenght="5" max-lenght="10" required autocomplete="account_no" autofocus>

                        @error('account_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        {{ __('Account Name') }}
                        <input id="account_name" type="text" class="form-control @error('account_name') is-invalid @enderror"
                            name="account_name" value="{{ old('account_name') }}" required autocomplete="account_name" autofocus>

                        @error('account_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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