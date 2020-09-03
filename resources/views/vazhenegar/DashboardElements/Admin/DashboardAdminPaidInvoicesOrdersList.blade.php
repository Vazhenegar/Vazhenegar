{{--=================== paid Invoice Ordre List   =================================--}}
@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'سفارشات دریافتی')

@section('content')
    @include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')
@include('vazhenegar.DashboardElements.Admin.DashboardAdminBadges')
<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-star"></i>

        <h3 class="box-title">لیست سفارشات دریافتی</h3>
        <!-- tools box -->
        <div class="pull-left box-tools">
            <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i
                    class="fa fa-minus"></i>
            </button>
        </div>
        <!-- /. tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <table class="table table-bordered" id="NewOrdersTable">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">شماره سفارش</th>
                <th scope="col">موضوع</th>
                <th scope="col">تاریخ ثبت</th>
                <th scope="col">تاریخ تحویل</th>
                <th scope="col">زمینه</th>
                <th scope="col">زبان مبدا</th>
                <th scope="col">زبان مقصد</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @if(count($PaidOrdersList)==0)
                <tr>
                    <td align='center' colspan='9'>هیچ فاکتوری پرداخت نشده است</td>

                </tr>
            @else
                @php
                    $counter=1;
                 foreach($PaidOrdersList as $order){ //get from dashboard
                    echo '<tr>';
                    echo '<td>'.$counter++.'</td>';
                    echo '<td>'.$order['id'].'</td>';
                    echo '<td>'.$order['OrderSubject'].'</td>';
                    echo '<td class="NumberDirectionFixer">'.$order['RegisterDate'].'</td>';
                    echo '<td class="NumberDirectionFixer">'.$order['DeliveryDate'].'</td>';
                    echo '<td>'.$order['TranslationField'].'</td>';
                    echo '<td>'.$order['SourceLanguage'].'</td>';
                    echo '<td>'.$order['DestLanguage'].'</td>';
                    echo '<td>'.
                         '<a href="/dashboard/Order/'.$order['id'].'"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp'.
                         '<button type="button" class="btn btn-success"><i class="fa fa-arrow-down"></i></button>&nbsp'.
                         '<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>&nbsp'.
                     '</td>';
                     echo '</tr>';
                 }
                @endphp
            @endif
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->

</div>

{{--=================== End Of Paid Orders List  =================================--}}
@endsection
