<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
           <!--  {{--<a class="navbar-brand" href="{{ url('/') }}">Laravel</a>--}}
             -->
            <a class="navbar-brand" href="{{ url('/') }}"> 
            <div class="pull-left"><img src="images/MAHNav.png" style="height: 48px;"></div>
            
            Mercy Affordable Housing Inc.
            </a>
			
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if (Auth::check())
                    <!-- Left Side Of Navbar -->
            
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
                {{-- Menu for Users with Administration Role Only --}}
                @role('admin')
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw fa-cogs"></i>Administration<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-fw fa-user"></i>Users</a></li>
                        <li><a href="{{ url('/roles') }}"><i class="fa fa-btn fa-fw fa-users"></i>Roles</a></li>
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                    </ul>
                </li>
                <li><a href="{{ action('ContactUSController@userrequests') }}">User Msgs</a></li>

                {{-- work order link to the work ordrer page--}}
                @endrole
				@role('pmanager')
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-btn fa-fw fa-cogs"></i>Administration<span class="caret"></span></a>
                    <ul class="dropdown-menu multi level" role="menu">
                        {{--<li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-fw fa-user"></i>Users</a></li> --}}
                        {{--<li><a href="{{ url('/roles') }}"><i class="fa fa-btn fa-fw fa-users"></i>Roles</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                    </ul>
                </li>
                 <li><a href="{{ action('ContactUSController@userrequests') }}">User Msgs</a></li>
                {{-- work order link to the work ordrer page--}}
                @endrole
                
                <li><a href="{{ action('ApartmentController@index') }}">Apartments Info</a></li>
                <li><a href="{{ action('WorkOrderController@index') }}">Work Order</a></li>
                <li><a href="{{ action('PropertyController@index') }}">Property Info</a></li>
                @if (Auth::check())
                
                @role('tenant')
                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                @endrole
			     @endif	 
            </ul>
            
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--<li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>--}}
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a href="{{ url('/change-password') }}"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/help') }}"><i class="fa fa-btn fa-fw fa-question-circle"></i>Help</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
