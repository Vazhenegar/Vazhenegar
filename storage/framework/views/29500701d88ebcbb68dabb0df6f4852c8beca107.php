<?php $__env->startSection('Title', 'سفارشات'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php switch(DashboardCurrentUser::$Role):
        case ('مدیر'): ?>
        <?php echo $__env->make('vazhenegar.DashboardElements.Admin.DashboardAdminBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>

        <?php case ('مشتری'): ?>
        <?php echo $__env->make('vazhenegar.DashboardElements.Customer.DashboardCustomerBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>
    <?php endswitch; ?>

    <div class="box box-primary">
        <div class="box-header">
            <i class="fa fa-star"></i>
            <?php switch($StatusId):

                
                
                case ('1'): ?>
                <?php
                if (DashboardCurrentUser::$Role=='مشتری')
                    echo '<h3 class="box-title">لیست سفارشات ثبت شده</h3>';
                else
                    //For both admin and translator, title would be this
                    echo '<h3 class="box-title">لیست سفارشات جدید</h3>';

                ?>
                <?php break; ?>

                
                <?php case ('2'): ?>
                    <h3 class="box-title">فاکتورهای صادر شده</h3>';

                <?php break; ?>

 
                <?php case ('3'): ?>

                    <h3 class="box-title">لیست سفارشات دریافتی</h3>

                <?php break; ?>


                
                <?php case ('4'): ?>
                <h3 class="box-title">لیست سفارشات آماده ارائه به مترجم</h3>
                <?php break; ?>



                
                <?php case ('5'): ?>
                <h3 class="box-title">لیست سفارشات در حال انجام</h3>
                <?php break; ?>



                
                <?php case ('7'): ?>
                <h3 class="box-title">لیست سفارشات جهت بررسی نهایی</h3>
                <?php break; ?>



                
                <?php case ('8'): ?>
                <h3 class="box-title">لیست سفارشات تکمیل شده</h3>
                <?php break; ?>



                
                <?php case ('9'): ?>
                <h3 class="box-title">لیست سفارشات لغو شده</h3>
                <?php break; ?>


                
                <?php case ('10'): ?>
                <h3 class="box-title">لیست سفارشات لغو شده</h3>
                <?php break; ?>

                
                <?php case (''): ?>
                <h3 class="box-title">لیست تمام سفارشات</h3>
                <?php break; ?>

                


                
                
                
                <?php case ('BankList'): ?>
                <h3 class="box-title">لیست بانک ها</h3>
                <button type="button" class="btn btn-success" onclick="ShowNewBankRow()"><i class="fa fa-plus"></i> افزودن بانک جدید</button>
                <?php break; ?>
                
                
                

            <?php endswitch; ?>
        </div>
        <!-- /.box-header -->


        <div class="box-body">

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
                <?php if(count($List)==0): ?>
                    <tr>
                        <td align='center' colspan='8'>سفارشی وجود ندارد</td>
                    </tr>
                <?php else: ?>
                    <?php
                    $counter = 1;
                    foreach ($List as $order) {
                        echo '<tr>';
                        echo '<td>' . $counter++ . '</td>';
                        echo '<td>' . $order['id'] . '</td>';
                        echo '<td>' . $order['OrderSubject'] . '</td>';
                        echo '<td class="NumberDirectionFixer">' . $order['RegisterDate'] . '</td>';
                        echo '<td class="NumberDirectionFixer">' . $order['DeliveryDate'] . '</td>';
                        echo '<td>' . $order['Status'] . '</td>';
                        echo '<td>' .
                            '<a href="' . route('Order.show', [$order['id']]) . '"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp' .
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









<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\SharedParts\List.blade.php ENDPATH**/ ?>