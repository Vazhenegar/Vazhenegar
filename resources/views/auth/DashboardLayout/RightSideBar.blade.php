<!-- right side column. contains the logo and sidebar -->

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="auth/dist/img/user2.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{$UserFullName}}</p>
                <a id="UserMode"><i class="fa fa-circle text-success"></i>{{$user->mode($UserMode)}}
                </a>
            </div>
        </div>

    {{--========================================================================--}}

    <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>

            @foreach($Menus as $item)
                {{--========================================================================--}}
                <li class="treeview">
                    <a href="{{$item->Url}}">
                        <i class="{{$item->Icon?$item->Icon :'fa fa-circle-o'}}"></i>
                        <span>{{$item->MainMenu}}</span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                    </a>
                    @if ($item->sub_menus->count())
                        <ul class="treeview-menu">
                            @foreach ($item->sub_menus as $subitem)
                                <li><a href="{{$subitem->Url}}"><i class="{{$subitem->Icon?$subitem->Icon :'fa fa-circle-o'}}"></i>{{$subitem->SubMenu}}</a>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                </li>
                {{--========================================================================--}}
            @endforeach
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

