@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'ورود کاربران')
@section('content')

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row 75 align-items-end">

            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <div class="col-12 login">
        <div class="login-container">
            <div class="login-form">
                <h1>ورود کاربران</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <input type="email" name="email" class="input form-control" value="{{ old('email') }}"
                               placeholder="ایمیل" required/>
                    </div>

                    <div class="form-group mb-30">
                        <input type="password" name="password" class="form-control input " placeholder="رمز عبور"
                               required/>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn uza-btn btn-2 loginBtnSubmit">ورود به ناحیه کاربری</button>

                        <a href="{{ route('register') }}">
                            <button type="button" class="btn uza-btn btn-2 loginBtnSubmit">ثبت نام</button>
                        </a>
                    </div>

                    <div class="form-group ForgetPwd">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                رمز عبور را فراموش کرده ام
                            </a>
                        @endif
                    </div>

                    @if ($errors->any())
                        <div class="login-error alert alert-danger">
                            نام کاربری یا رمز عبور اشتباه است.
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
@endsection
