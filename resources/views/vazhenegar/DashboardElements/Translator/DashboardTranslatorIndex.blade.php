
{{-- these contents will include to dashboard index--}}

@include('vazhenegar.DashboardElements.Translator.DashboardTranslatorBadges')

@if(session('status')=='Translation Stored')
    <script>alert("مترجم گرامی فایل ترجمه با موفقیت آپلود شد.")</script>
@endif


<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        @include('vazhenegar.DashboardElements.SharedParts.DashboardChatBox')
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        @include('vazhenegar.DashboardElements.SharedParts.DashboardCalendar')
    </section>
    <!-- left col -->

</div>
