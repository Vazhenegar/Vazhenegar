@extends('auth.DashboardLayout.DashboardMasterLayout')

@php
    use Illuminate\Support\Facades\Auth;
    $user=new App\User;
    $CurrentUser=Auth::user();
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $Role=$CurrentUser->role()->value('RoleName');
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=(new App\Http\Controllers\HomeController)->MenuPicker($CurrentUser);

 // for admin badges
        $employmentRequest=NewEmployment();
        $OnlineUsers=OnlineUsers();
        $DailyVisitors=(new App\Session)->GetSiteVisitors(1);
@endphp

@section('Title', '- پنل '.$Role)

@section('content')
    {{--=========================================================--}}

    @include('auth.DashboardLayout.TopBar')

    {{--=========================================================--}}

    @include('auth.DashboardLayout.RightSideBar')

    {{--=========================================================--}}

    @include('auth.DashboardLayout.LeftSideBar')

    {{--======= Get Main Content of dashboard from dashboard elements according to user type ========--}}

    {{--    Content Wrapper. Contains page content--}}
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        @switch($CurrentUser->role()->value('id'))
            {{--=============================== ِ Admin =======================================--}}
                    {{--Admin--}}
            @case(1)
            @include('vazhenegar.AdminBadges')
            @include('vazhenegar.OrdersList')

            <!-- Main row -->
                <div class="row">
                    <!-- right col -->
                    <section class="col-lg-7 connectedSortable">
                        @include('vazhenegar.Charts')
                        @include('vazhenegar.ChatBox')
                        @include('vazhenegar.EmailWidget')
                    </section>
                    <!-- /.right col -->


                    <!-- left col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">
                        @include('vazhenegar.Calendar')
                    </section>
                    <!-- left col -->

                </div>
                <!-- /.row (main row) -->



                @break
                {{--=============================== ِ Translator =======================================--}}
                    {{--Translator--}}
                @case(8)



                @break
                {{--=============================== ِ Customer =======================================--}}
                    {{--Customer--}}
                @case(11)
                    @include('vazhenegar.CustomerBadges')
                    @include('vazhenegar.CustomerGuide')



                @break
            @endswitch
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection
