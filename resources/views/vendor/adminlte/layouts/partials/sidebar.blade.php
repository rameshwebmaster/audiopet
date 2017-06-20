<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ url('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <!-- <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a> -->
                </div>
            </div>
        @endif

      
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li {!! ((Request::is('home')) ? 'class="active"' : '') !!}>
            <a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span><b>{{ trans('adminlte_lang::message.home') }}</b></span></a></li>
            
            <li {!! ((Request::is('admin/user')) ? 'class="active"' : '') !!} ><a href="{{ url('admin/user') }}"><i class='fa fa-laptop'></i> <span><b>User List</b></span></a></li>
          
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
