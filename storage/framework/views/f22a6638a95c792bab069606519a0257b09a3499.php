



<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-star"></i>

        <?php switch(session('OrderList')):
            case ('AllOrders'): ?>
            <h3 class="box-title">لیست تمام سفارشات</h3>
            <?php break; ?>

            <?php case ('NewOrders'): ?>
            <h3 class="box-title">لیست سفارشات جدید</h3>
            <?php break; ?>

            <?php case ('ReceivedOrders'): ?>
            <h3 class="box-title">لیست سفارشات دریافتی</h3>
            <?php break; ?>

            <?php case ('InProgressOrders'): ?>
            <h3 class="box-title">لیست سفارشات در حال انجام</h3>
            <?php break; ?>

            <?php case ('CancelledOrders'): ?>
            <h3 class="box-title">لیست سفارشات لغو شده</h3>
            <?php break; ?>

            <?php case ('FinishedOrders'): ?>
            <h3 class="box-title">لیست سفارشات تکمیل شده</h3>
            <?php break; ?>

            <?php case ('DeliveredOrders'): ?>
            <h3 class="box-title">لیست سفارشات تحویل شده</h3>
            <?php break; ?>

        <?php endswitch; ?>
    </div>
    <!-- /.box-header -->

    <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <table class="table table-bordered" id="OrdersTable">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">شماره سفارش</th>
                <th scope="col">موضوع</th>
                <th scope="col">تاریخ ثبت</th>
                <th scope="col">تاریخ تحویل</th>
                <th scope="col">وضعیت</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>

            
                <?php
                    $Orders=GetOrders();
                ?>
                <?php if(count($Orders)==0): ?>
                    <tr>
                        <td align='center' colspan='9'>سفارش جدیدی وجود ندارد</td>
                    </tr>
                <?php else: ?>
                    <?php
                        $counter=1;
                     foreach($Orders as $order){
                        echo '<tr>';
                        echo '<td>'.$counter++.'</td>';
                        echo '<td>'.$order['id'].'</td>';
                        echo '<td>'.$order['OrderSubject'].'</td>';
                        echo '<td class="NumberDirectionFixer">'.$order['RegisterDate'].'</td>';
                        echo '<td class="NumberDirectionFixer">'.$order['DeliveryDate'].'</td>';
                        echo '<td><a data-toggle="tooltip" data-placement="bottom" title="'.$order['StatusDescription'].'">'.$order['Status'].'</a></td>';
                        echo '<td>'.
                             '<a href="/dashboard/Order/'.$order['id'].'"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp'.
                             '<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>&nbsp'.
                         '</td>';
                         echo '</tr>';
                     }
                    ?>
                <?php endif; ?>
            </tbody>
        </table>

        
    </div>
    <!-- /.box-body -->
</div>
























































<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardList.blade.php ENDPATH**/ ?>