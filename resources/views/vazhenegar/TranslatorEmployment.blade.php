@extends('vazhenegar.layout.MasterLayout')

@section('PageTitle', 'استخدام مترجم')

@section('content')

    {{-- employment Area --}}
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <h1 class="title">استخدام مترجم</h1>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <section class="employment-area section-padding-50">
        <div class="container" dir="rtl">
            <div class="row justify-content-between">
                <!-- employment Form -->
                <div class="col-12 col-lg-12">
                    <div class="employment-form mb-50">
                        <div class="mb-50">
                            <h4>فرم درخواست همکاری
                                <br>
                                لطفا در صورتی که فرصت کافی دارید فرم زیر را تکمیل و در آزمون آنلاین شرکت کنید.
                                <br>
                                بدیهی است به فرم هایی که بصورت ناقص ارسال شده باشند یا در آزمون شرکت نکرده باشند پاسخی
                                داده نخواهد شد.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="employment-form mb-40">
                    <form action="/TranslatorEmployment" method="post" enctype="multipart/form-data">
                        <div class="row">
                            {{ csrf_field() }}
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <p class="mb-30">
                                    اطلاعات فردی
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('FirstName'))
                                        <input type="text" class="wrong-field form-control mb-30" name="FirstName"
                                               value="{{old('FirstName')}}" required>
                                    @else
                                        <input type="text" class="form-control mb-30" name="FirstName"
                                               value="{{old('FirstName')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="FirstName"> نام</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('LastName'))
                                        <input type="text" class="wrong-field form-control mb-30" name="LastName"
                                               value="{{old('LastName')}}" required>
                                    @else
                                        <input type="text" class="form-control mb-30" name="LastName"
                                               value="{{old('LastName')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="LastName">نام خانوادگی</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('BirthDate'))
                                        <input type="text" class="wrong-field form-control mb-30 DatePicker"
                                               id="BirthDate" name="BirthDate" value="{{old('BirthDate')}}"
                                               required>
                                    @else
                                        <input type="text" class="form-control mb-30 DatePicker"
                                               id="BirthDate" name="BirthDate" value="{{old('BirthDate')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="BirthDate">تاریخ تولد</label>
                                    <input class="form-control NumberDirectionFixer" name="BirthDateAlt" id="BirthDateAlt"
                                           value="{{old('BirthDateAlt')}}" type="hidden"
                                           readonly/>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <div class="FormRadioBox">
                                        @if ($errors->has('Gender'))
                                            <fieldset class="r-pill wrong-field">
                                                @else
                                                    <fieldset class="r-pill">
                                                        @endif
                                                        <label class="mb-30" dir="rtl">جنسیت:</label>
                                                        <div class="r-pill__group">
                                                <span class="r-pill__item">
                                                    @if (($errors->any()) && (old('Gender')==1))
                                                        <input type="radio" name="Gender" value="1" id=r1 checked>
                                                    @else
                                                        <input type="radio" name="Gender" value="1" id=r1>
                                                    @endif
                                                    <label for="r1">مرد</label>
                                                </span>
                                                            <span class="r-pill__item">
                                                    @if (($errors->any()) && (old('Gender')==0) && (old('Gender')!=null))
                                                                    <input type="radio" name="Gender" value="0" id="r2"
                                                                           checked>
                                                                @else
                                                                    <input type="radio" name="Gender" value="0" id="r2">
                                                                @endif
                                                    <label for="r2">زن</label>
                                                </span>
                                                        </div>
                                                    </fieldset>
                                            </fieldset>
                                    </div>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('Email'))
                                        <input type="text" class="wrong-field form-control mb-30" name="Email"
                                               id="email" value="{{old('Email')}}" required>
                                    @else
                                        <input type="text" class="form-control mb-30" name="Email" id="email"
                                               value="{{old('Email')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="Email">ایمیل</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('Password'))
                                        <input type="password" class="wrong-field form-control mb-30" name="Password"
                                               value="{{old('Password')}}" required>
                                    @else
                                        <input type="password" class="form-control mb-30" name="Password"
                                               value="{{old('Password')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="Password">رمز عبور</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('Password'))
                                        <input type="password" class=" wrong-field form-control mb-30"
                                               name="Password_confirmation" value="{{old('Password_confirmation')}}"
                                               required>
                                    @else
                                        <input type="password" class="form-control mb-30" name="Password_confirmation"
                                               value="{{old('Password_confirmation')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="Password_confirmation">تکرار رمز
                                        عبور</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('FixNumber'))
                                        <input type="number" class="wrong-field form-control mb-30" name="FixNumber"
                                               value="{{old('FixNumber')}}" required>
                                    @else
                                        <input type="number" class="form-control mb-30" name="FixNumber"
                                               value="{{old('FixNumber')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="FixNumber"> تلفن ثابت با کد
                                        شهرستان</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('MobileNumber'))
                                        <input type="number" class="wrong-field form-control mb-30" name="MobileNumber"
                                               value="{{old('MobileNumber')}}" required>
                                    @else
                                        <input type="number" class="form-control mb-30" name="MobileNumber"
                                               value="{{old('MobileNumber')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="MobileNumber">تلفن همراه</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <select class="form-control mb-30" name="State" id="State" required>
                                        <option value=""></option>
                                        <script>
                                            let states =@json($states);//for using states array in js to populate select box
                                        </script>
                                    </select>
                                    <label class="form-placeholder-label" for="State">استان محل سکونت</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <select class="form-control mb-30" name="City" id="City" required>
                                        <option value=""></option>
                                    </select>
                                    <label class="form-placeholder-label" for="City">شهر محل سکونت</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('Address'))
                                        <input type="text" class="wrong-field form-control mb-30" name="Address"
                                               value="{{old('Address')}}" required>
                                    @else
                                        <input type="text" class="form-control mb-30" name="Address"
                                               value="{{old('Address')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="Address">آدرس</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <p class="mb-30">
                                    اطلاعات تحصیلی
                                </p>
                            </div>

                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('Degree'))
                                        <input type="text" class="wrong-field form-control mb-30" name="Degree"
                                               value="{{old('Degree')}}" required>
                                    @else
                                        <input type="text" class="form-control mb-30" name="Degree"
                                               value="{{old('Degree')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="Degree">آخرین مدرک تحصیلی</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('GraduationDate'))
                                        <input type="text" class="wrong-field form-control mb-30 DatePicker"
                                               id="GraduationDate" name="GraduationDate"
                                               value="{{old('GraduationDate')}}"
                                               required>
                                    @else
                                        <input type="text" class="form-control mb-30 DatePicker" name="GraduationDate"
                                               id="GraduationDate" value="{{old('GraduationDate')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="GraduationDate">تاریخ فارغ
                                        التحصیلی</label>
                                    <input class="form-control NumberDirectionFixer" name="GraduationDateAlt" id="GraduationDateAlt"
                                           value="{{old('GraduationDateAlt')}}" type="hidden"
                                           readonly/>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <div class="col-4 form-group">
                                    @if ($errors->has('GraduationField'))
                                        <input type="text" class="wrong-field form-control mb-30" name="GraduationField"
                                               value="{{old('GraduationField')}}" required>
                                    @else
                                        <input type="text" class="form-control mb-30" name="GraduationField"
                                               value="{{old('GraduationField')}}" required>
                                    @endif
                                    <label class="form-placeholder-label" for="GraduationField">رشته / گرایش</label>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <p class="mb-30">
                                    سوابق کاری
                                </p>
                            </div>

                            <div class="col-12">
                                <div class="col-4 form-group">
                                    <textarea class="form-control mb-30" name="Resume" rows="8"
                                              cols="80">{{old('Resume')}}</textarea>
                                </div>
                            </div>
                            {{-- =========================================================================== --}}
                            <div class="col-12">
                                <p class="mb-30">
                                    زبان ها
                                </p>
                            </div>
                            @if ($errors->has('UserSelectedLangs'))
                                <div class="col-12 wrong-field">
                                    @else
                                        <div class="col-12">
                                            @endif
                                            <div class="row">
                                                <div class="col-3 form-group">
                                                    <select class="form-control mb-30" name="source_lang"
                                                            onchange="SL(this)" required>
                                                        <option value="{{old('source_lang')}}"></option>
                                                        @foreach ($languages as $language)
                                                            <option
                                                                value="{{$language->id}}">{{$language->LanguageName}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="form-placeholder-label" for="source_lang">زبان
                                                        مبدا</label>
                                                </div>

                                                <div class="col-3 form-group">
                                                    <select class="form-control mb-30" name="dest_lang"
                                                            onchange="DL(this)" required>
                                                        <option value="{{old('dest_lang')}}"></option>
                                                        @foreach ($languages as $language)
                                                            <option
                                                                value=" {{$language->id}}">{{$language->LanguageName}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="form-placeholder-label" for="dest_lang">زبان
                                                        مقصد</label>
                                                </div>
                                                <button type="submit" class="btn lang-btn btn-2 fa fa-check"
                                                        id="lang-btn" onclick="add_to_list()" disabled></button>
                                            </div>
                                        </div>{{-- for div without wrong field --}}
                                </div>{{-- for div with wrong field --}}

                                <div class="col-12">
                                    <div class="col-7">
                                        <div class="form-group" id="selected_lang">
                                            {{-- if form has some errors and user was selected some languages, they will show up here --}}
                                            <script>
                                                let UserSelectedLangs = @json(old('UserSelectedLangs'));//for language pairs that may user selected before
                                            </script>
                                            {{-- and user newly selected langs will appear here --}}
                                        </div>
                                    </div>
                                </div>

                                {{-- =========================================================================== --}}

                                @if ($errors->has('TranslationFields'))
                                    <div class="col-12 wrong-field">
                                        @else
                                            <div class="col-12">
                                                @endif
                                                <p class="mb-30">
                                                    زمینه ها
                                                </p>
                                            </div>{{-- for div without wrong field --}}
                                    </div>{{-- for div with wrong field --}}

                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-4">
                                                <div class="form-group" id="translation_fields1">
                                                    {{-- translation fields will populate here--}}
                                                    @for($i=0; $i<14; $i++)
                                                        <label class="pure-material-checkbox"><input
                                                                name="TranslationFields[]"
                                                                value="{{$translation_fields[$i]->id}}"
                                                                type="checkbox"><span>{{$translation_fields[$i]->FieldName}}</span></label>
                                                        <br>
                                                    @endfor
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group" id="translation_fields2">
                                                    {{-- translation fields will populate here --}}
                                                    @for($i=14; $i<count($translation_fields); $i++)
                                                        <label class="pure-material-checkbox"><input
                                                                name="TranslationFields[]"
                                                                value="{{$translation_fields[$i]->id}}"
                                                                type="checkbox"><span>{{$translation_fields[$i]->FieldName}}</span></label>
                                                        <br>
                                                    @endfor

                                                </div>
                                            </div>

                                            <script>
                                                let old_tf =@json(old('TranslationFields')); //for populate and select translation fields that user may selected before --}
                                            </script>

                                        </div>
                                    </div>

                                    {{-- =========================================================================== --}}

                                    <div class="col-12">
                                        <p class="mb-30">
                                            ارسال مدارک <br>
                                            مدارک شناسایی (شناسنامه یا کارت ملی) و مدارک تحصیلی خود را در یک فایل زیپ
                                            (zip, rar) ارسال کنید.
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        @if($errors->has('UserDocuments'))
                                            <div class="wrong-field col-4 form-group">
                                                @else
                                                    <div class="col-4 form-group">
                                                        @endif
                                                        <input type="file" name="UserDocuments">
                                                    </div>
                                            </div>
                                    </div>

                                    {{-- =========================================================================== --}}

                                    {{--  Terms Of Service --}}

                                    <div class="col-12">
                                        <div class="col-4 form-group">
                                            <label class="pure-material-checkbox">
                                                <input type="checkbox" name="tos" required>
                                                @if ($errors->has('tos'))
                                                    <span class="wrong-field"><a href="/tos" target="blank">قوانین و مقررات </a>را
                                        مطالعه کردم و
                                        موافقم.</span>
                                                @else
                                                    <span><a href="/tos" target="blank">قوانین و مقررات </a>را مطالعه کردم و
                                        موافقم.</span>
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                    {{-- =========================================================================== --}}
                                    <div class="col-12 mb-30">
                                        <button type="submit" class="btn uza-btn btn-2 mt-15">مرحله
                                            بعد
                                        </button>
                                    </div>
                                    {{-- =========================================================================== --}}
                                    <div class="col-12">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- =========================================================================== --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

    {{-- ================================================ --}}

    <!-- Form Background Pattern -->
        <div class="employment-area-bg-pattern">
            <img src="{{asset('images/core-img/curve-2.png')}}" alt="">
        </div>
    </section>
    <!-- ***** employment Area End ***** -->

    {{--    script needed for employment page--}}
    @include('scripts.CoreScripts')
    @include('scripts.DatePicker')
    @include('scripts.StateCity')
    @include('scripts.TranslationFields')
    @include('scripts.TranslationLanguages')


@endsection
