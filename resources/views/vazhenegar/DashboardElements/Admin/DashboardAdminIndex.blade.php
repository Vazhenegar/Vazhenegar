{{--these contents will include in dashboard master MainLayout --}}
@include('vazhenegar.DashboardElements.Admin.DashboardAdminBadges')

<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        @include('vazhenegar.DashboardElements.SharedParts.DashboardCharts')
        @include('vazhenegar.DashboardElements.SharedParts.DashboardEmailWidget')
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        @include('vazhenegar.DashboardElements.SharedParts.DashboardCalendar')
        @include('vazhenegar.DashboardElements.SharedParts.DashboardChatBox')
    </section>
    <!-- left col -->

</div>

