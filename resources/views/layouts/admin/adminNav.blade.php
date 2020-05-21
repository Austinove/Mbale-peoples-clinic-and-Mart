<li><a href="{{ url('/appointments')}}">Appointments</a></li>
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        Administrator <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" data-toggle="modal" data-target="#slides" href="#"><i class="fa fa-slideshare"></i> Slides</a>
        <a class="dropdown-item" data-toggle="modal" data-target="#news" href="#"><i class="fa fa-newspaper-o"></i> News</a>
        <a class="dropdown-item" data-toggle="modal" data-target="#staff" href="#"><i class="fa fa-users"></i> Staff</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" data-toggle="modal" data-target="#profile" href="#"><i class="fa fa-user-o"></i> Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }} <i class="fa fa-sign-out"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>