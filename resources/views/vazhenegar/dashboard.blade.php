@extends('auth.DashboardLayout.DashboardMasterLayout')

@php
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\DashboardMenuPicker;
    $user=new App\User;
    $CurrentUser=Auth::user();
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $Role=$CurrentUser->role()->value('RoleName');
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus= (new DashboardMenuPicker)->MenuPicker($CurrentUser);

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


                @break
            @endswitch
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    {{-- scripts for autoload admin badges every 30 seconds--}}
    @php
        $employmentRequest=NewEmployment();
        $OnlineUsers=OnlineUsers();
        $DailyVisitors=(new App\Session)->GetSiteVisitors(1);
    @endphp
    <script>
            {{--        initialize all of menu items with data when page loads for the first time --}}
        let employmentRequest =@json($employmentRequest);
        let OnlineUsers =@json($OnlineUsers);
        let DailyVisitors=@json($DailyVisitors);
        document.getElementById('NewEmployment').innerHTML = employmentRequest;
        document.getElementById('درخواست همکاری').querySelector('#yellow').innerHTML = employmentRequest;
        document.getElementById('OnlineUsers').innerHTML=OnlineUsers;
        document.getElementById('DailySiteVisitors').innerHTML=DailyVisitors;

        {{--  ====================  Refresh dashboard data every 30 seconds ===================--}}
        {{--  ====================  for online users ===================--}}
        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/GetOnlineUsers',
                success: function (data) {
                    $('#OnlineAmount').empty();
                    $('#OnlineAmount').append(data);
                }
            });
        }, 30000);

            {{-- ===================   for daily visitors ===============--}}
        let day = 1;
        let token = "{{ csrf_token() }}";
        setInterval(function () {
            $.ajax({
                type: "POST",
                url: '/GetDailyVisitors/' + day,
                data: {_token: token},
                success: function (data) {
                    $('#DailySiteVisitors').empty();
                    $('#DailySiteVisitors').append(data);
                }
            });
        }, 30000);

        {{--  ====================  for new employments ================--}}

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/NewEmployments',
                success: function (data) {
                    $('#NewEmployment').empty();
                    $('#NewEmployment').append(data);
                    let spanclass = 'pull-left-container';
                    let smallclass = 'label pull-left bg-yellow';
                    document.getElementById('درخواست همکاری').querySelector('#yellow').innerHTML = data;
                }
            });
        }, 30000);
    </script>
@endsection
