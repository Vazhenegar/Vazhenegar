
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="FirstName"
                                       class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="FirstName"
                                           value="{{ old('FirstName') }}" required>

                                    @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="LastName"
                                       class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="LastName"
                                           value="{{ old('LastName') }}" required>

                                    @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="Email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="Email"
                                           value="{{ old('Email') }}" required autocomplete="Email">

                                    @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('Password') is-invalid @enderror" name="Password"
                                           required autocomplete="new-password">

                                    @error('Password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="Password-confirm" type="password" class="form-control"
                                           name="Password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="FixNumber"
                                       class="col-md-4 col-form-label text-md-right">{{ __('FixNumber') }}</label>

                                <div class="col-md-6">
                                    <input id="FixNumber" type="number"
                                           class="form-control @error('FixNumber') is-invalid @enderror" name="FixNumber"
                                           value="{{ old('FixNumber') }}" required autocomplete="FixNumber">

                                    @error('FixNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="MobileNumber"
                                       class="col-md-4 col-form-label text-md-right">{{ __('MobileNumber') }}</label>

                                <div class="col-md-6">
                                    <input id="MobileNumber" type="number"
                                           class="form-control @error('MobileNumber') is-invalid @enderror" name="MobileNumber"
                                           value="{{ old('MobileNumber') }}" required autocomplete="MobileNumber">

                                    @error('MobileNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ثبت نام') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

