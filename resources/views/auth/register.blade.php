@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'ثبت نام')
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
                <h1>ثبت نام کاربران</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="FirstName" class="input form-control" value="{{ old('FirstName') }}"
                               placeholder="نام" required/>
                    </div>

                    <div class="form-group">
                        <input type="text" name="LastName" class="input form-control" value="{{ old('LastName') }}"
                               placeholder="نام خانوادگی" required/>
                    </div>

                    <div class="form-group">
                        <input type="email" name="Email" class="input form-control" value="{{ old('Email') }}"
                               placeholder="ایمیل" required/>
                    </div>

                    <div class="form-group">
                        <input type="password" name="Password" class="form-control input" placeholder="رمز عبور"
                               required/>
                    </div>

                    <div class="form-group">
                        <input type="password" name="Password_confirmation" class="form-control input"
                               placeholder="تایید رمز عبور"
                               required/>
                    </div>

                    <div class="form-group">
                        <input type="number" name="FixNumber" class="form-control input" value="{{ old('FixNumber') }}"
                               placeholder="تلفن ثابت"
                               required/>
                    </div>

                    <div class="form-group">
                        <input type="number" name="MobileNumber" class="form-control input" value="{{ old('MobileNumber') }}"
                               placeholder="تلفن همراه"
                               required/>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn uza-btn btn-2 loginBtnSubmit">ثبت نام</button>
                    </div>

                    @if ($errors->any())
                        <div class="login-error alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
@endsection



