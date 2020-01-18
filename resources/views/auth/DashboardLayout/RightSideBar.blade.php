<!-- right side column. contains the logo and sidebar -->

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset('images/site/user.png')}}" class="img-circle" alt="User Image">
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
                    <a id="{{$item->MainMenu}}" href="{{$item->Url}}">
                        <i class="{{$item->Icon?$item->Icon :'fa fa-circle-o'}}"></i>
                        <span>{{$item->MainMenu}}</span>
                        @if ($item->sub_menus->count())
                            <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                        @endif
                    </a>
                    @if ($item->sub_menus->count())
                        <ul class="treeview-menu">
                            @foreach ($item->sub_menus as $subitem)
                                <li><a id="{{$subitem->SubMenu}}" href="{{$subitem->Url}}">
                                        <i class="{{$subitem->Icon?$subitem->Icon :'fa fa-circle-o'}}"></i>
                                        <span>{{$subitem->SubMenu}}</span>
                                        <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                                    </a>
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
