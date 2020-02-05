{{--=================== Customer Invoice List  =================================--}}
@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'فاکتورها')

@section('content')
@include('vazhenegar.DashboardCurrentUser')
@php
    $Order= CustomerInvoices(DashboardCurrentUser::$CurrentUser->id,2);
@endphp
    <div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-clipboard"></i>

        <h3 class="box-title">لیست فاکتورها</h3>
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
                <th scope="col">موضوع</th>
                <th scope="col">تعداد کلمات</th>
                <th scope="col">مبلغ فاکتور</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @if(count($Order)==0)
                <tr>
                    <td align='center' colspan='8'>فاکتور جدیدی وجود ندارد</td>

                </tr>
            @else
                @php
                    $counter=1;
                 foreach($Order as $item){
                    echo '<tr>';
                    echo '<td>'.$counter++.'</td>';
                    echo '<td>'.$item['OrderSubject'].'</td>';
                    echo '<td>'.$item['Amount'].'</td>';
                    echo '<td>'.$item['TotalPrice'].'</td>';
                    echo '<td>'.
                         '<a href="/dashboard/Order/'.$item['id'].'"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp'.
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


@endsection

{{--=================== End Of Orders List  =================================--}}
