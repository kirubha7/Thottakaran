<header class="main-header">
    <a href="{{ route('admin.home') }}" class="logo">
        <span class="logo-lg"><b>{{ auth()->user()->name }}</b></span>
        <span class="logo-mini"><b>{{ auth()->user()->name }}</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         <img src="/admin/img/photo.jpeg" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    </a>
                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ url('/admin/img/photo.jpeg') }}" class="img-circle" alt="User Image">
                            <h2>{{ auth()->user()->name }}</h2>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{ url('/admin/logout') }}"  class="btn btn-default btn-flat"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>