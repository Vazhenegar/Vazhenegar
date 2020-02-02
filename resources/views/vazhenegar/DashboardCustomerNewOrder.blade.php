@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'ثبت سفارش جدید')


@section('content')
@include('vazhenegar.DashboardCurrentUser')
    {{--=================== New order for customer  =================================--}}
    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-7">

            <div class="box box-primary OrderSpecification">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">ثبت سفارش جدید</h3>
                </div>

                <div class="box-body">
                    <form action="/dashboard/Order" method="post" enctype="multipart/form-data">
                        @csrf

                        {{-- =============== Subject =================================================== --}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="OrderSubject" placeholder="موضوع" value="{{old('OrderSubject')}}" required>
                        </div>

                        {{-- =============== Languages ================================================= --}}
                        <div class="form-group">
                            <select class="form-control" name="source_lang" required>
                                <option value="">زبان مبدا</option>
                                @foreach ($languages as $language)
                                    <option
                                        value="{{$language->id}}">{{$language->LanguageName}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="dest_lang" required>
                                <option value="">زبان مقصد</option>
                                @foreach ($languages as $language)
                                    <option
                                        value=" {{$language->id}}">{{$language->LanguageName}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- =================== Translation Fields =================================== --}}
                        <div class="form-group">
                            <select class="form-control" name="TranslationField" required>
                                <option value="">زمینه</option>
                                @foreach($translation_fields as $t_f)
                                    <option value="{{$t_f->id}}">{{$t_f->FieldName}}</option>
                                @endforeach
                            </select>
                        </div>

                        <hr>
                        {{-- =================== File ================================================= --}}
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">فایل سفارش (zip, rar) حداکثر 20MB</h3>
                            </div>
                            <input type="file" name="OrderFile" required>
                        </div>

                        {{-- =================== Date Time ================================================= --}}
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">تاریخ و ساعت مورد نظر برای تحویل سفارش</h3>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text"  name="NewOrderDeliveryDate"
                                       id="NewOrderDeliveryDate" value="{{old('NewOrderDeliveryDate')}}" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control HiddenItem" dir="ltr" name="NewOrderDeliveryDateAlt" id="NewOrderDeliveryDateAlt"
                                       value="{{old('NewOrderDeliveryDateAlt')}}"
                                       readonly/>
                            </div>
                        </div>

                        {{-- =================== TranslationParts ========================================= --}}
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">مواردی که ترجمه آنها ضروری است (در غیر این صورت ترجمه نخواهد شد)</h3>
                            </div>
                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="جداول"
                                       type="checkbox"><span>جداول</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="شکل ها"
                                       type="checkbox"><span>شکل ها</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="نمودارها"
                                       type="checkbox"><span>نمودارها</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="منابع"
                                       type="checkbox"><span>منابع</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="فهرست"
                                       type="checkbox"><span>فهرست</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="زیرنویس"
                                       type="checkbox"><span>زیرنویس (اشکال، جداول، نمودارها)</span>
                            </label>
                            &nbsp; &nbsp;

                            <label class="pure-material-checkbox">
                                <input name="TranslationParts[]"
                                       value="فرمول"
                                       type="checkbox"><span>تایپ فرمول</span>
                            </label>
                            &nbsp; &nbsp;
                        </div>

                        {{-- =================== Description ========================================= --}}
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">توضیحات</h3>
                            </div>
                            <textarea class="textarea" name="Description"
                                      placeholder="مواردی مانند گرایش، صفحات، و توضیحاتی که فکر می کنید به ترجمه راحتتر و بهتر مترجم کمک می کند را اینجا بنویسید"></textarea>
                        </div>
                        {{-- =========================================================================== --}}

                        <div class="box-footer clearfix">
                            <button type="submit" class="pull-left btn btn-default">ارسال
                                <i class="fa fa-arrow-circle-left"></i></button>
                        </div>
                        {{-- =========================================================================== --}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
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

        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5">
            @include('vazhenegar.DashboardCalendar')
            @include('vazhenegar.DashboardChatBox')
        </section>
        <!-- left col -->

    </div>

    {{--    script needed for order--}}
    @include('scripts.DatePicker')
    @include('scripts.TranslationLanguages')
    @include('scripts.TranslationFields')
@endsection
