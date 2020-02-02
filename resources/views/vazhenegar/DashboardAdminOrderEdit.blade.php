@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'ویرایش مشخصات سفارش')

@section('content')
@include('vazhenegar.DashboardCurrentUser')
    {{--=================== order edit form  =================================--}}
    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-7">

            <div class="box box-primary OrderSpecification">
                <div class="box-header">
                    <i class="fa fa-pencil"></i>
                    <h3 class="box-title">ویرایش مشخصات سفارش</h3>
                </div>

                <div class="box-body">
                    <form action="/dashboard/Order/{{$Order->id}}" method="post">
                        @csrf
                        {{method_field('PATCH')}}


                        {{-- =============== Order Id =================================================== --}}
                        <div class="form-group">
                            شماره سفارش:{{$Order->id}}
                        </div>

                        {{-- =============== Subject =================================================== --}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="OrderSubject" placeholder="موضوع" value="{{$Order->OrderSubject}}" required>
                        </div>

                        {{-- =================== Description ========================================= --}}
                        <div class="form-group">
                            <div class="panel-heading">
                                <h3 class="panel-title">توضیحات</h3>
                            </div>
                            <textarea class="textarea" name="Description"
                                      placeholder="مواردی مانند گرایش، صفحات، و توضیحاتی که فکر می کنید به ترجمه راحتتر و بهتر مترجم کمک می کند را اینجا بنویسید">{!!nl2br($Order->Description)!!}</textarea>
                        </div>
                        {{-- =========================================================================== --}}

                        <div class="box-footer clearfix">
                            <button type="submit" class="pull-left btn btn-default">ثبت تغییرات
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
        </section>
        <!-- left col -->

    </div>

    {{--    script needed for order--}}
    @include('scripts.DatePicker')
@endsection
