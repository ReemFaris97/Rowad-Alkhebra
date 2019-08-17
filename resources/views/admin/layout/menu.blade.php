<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="">

            <a href="{{route('admin.layout.main')}}" class="logo-wrapper">

                {{--<img src="{{asset('admin/assets/images/logo2.png')}}" alt="شعار المشروع">--}}
            </a>
        </div>
        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                @php $image = auth()->user()->image; @endphp
                @if($image != null or $image != "")
                    <img src="{{getimg($image)}}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                    @else
                    <img src="{{asset('admin/assets/images/1.png')}}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                    @endif

                {{--<div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>--}}
            </div>
            <h5 style="margin-top: 40px;"><a href="#">{{auth()->user()->name}}</a> </h5>
            <ul class="list-inline">
                <li>
                    {{--{{route('user.get.profile')}}--}}
                    <a href="" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="#" class="text-custom" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">القائمة</li>


                    <li><a href="{{route('admin.layout.main')}}" class="waves-effect"><i class="zmdi zmdi-home"></i><span>الرئيسية</span></a></li>
                    <li><a href="{{route('admin.users.index')}}" class="waves-effect"><i class="zmdi zmdi-accounts"></i><span>المستخدمين</span></a></li>

                    <li><a href="{{route('admin.banners.index')}}" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i><span>البنرات</span></a></li>
                <li><a href="{{route('admin.clients.index')}}" class="waves-effect"><i class="zmdi zmdi-accounts-list-alt"></i><span>العملاء</span></a></li>
                <li><a href="{{route('admin.services.index')}}" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span>الخدمات</span></a></li>
                <li><a href="{{route('admin.structures.index')}}" class="waves-effect"><i class="zmdi zmdi-widgets
"></i><span>الهياكل التنظمية</span></a></li>
                <li><a href="{{route('admin.contacts.index')}}" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span>رسائل التواصل</span></a></li>

                <li><a href="{{route('admin.settings.index')}}" class="waves-effect"><i class="zmdi zmdi-settings"></i><span>الإعدادات</span></a></li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
