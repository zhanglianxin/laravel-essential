<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{ route('home') }}" id="logo">LOGO</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
@if (Auth::check())
                    <li>
                        <a href="{{ route('users.index') }}">Users List</a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle"
                            data-toggle="dropdown">{{ Auth::user()->name }} <b
                            class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('users.show', Auth::user()->id) }}">Personal Center</a>
                            </li>
                            <li>
                                <a href="{{ route('users.edit', Auth::user()->id) }}">Edit Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a id="logout" href="javascript">
                                    <form action="{{ route('logout') }}" method="post" id="logout">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-block btn-danger" type="submit">Logout</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
@else
                    <li>
                        <a href="{{ route('help') }}">HELP</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Sign in</a>
                    </li>
@endif
                </ul>
            </nav>
        </div>
    </div>
</header>
