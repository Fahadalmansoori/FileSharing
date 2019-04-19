<nav class="navbar navbar-expand-md  bg-dark border mb-5 p-4 text-info">

    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'File sharing') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->

        <ul class="nav nav-pills  m-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item border-bottom " href="{{route('course.index')}}">All courses</a>
                    <a class="dropdown-item border-bottom" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modules</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('module.index')}}">All Modules</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>
            @else
@if(auth()->user()->hasRole('Tutor') ||auth()->user()->hasRole('Tutor'))
            <li class="nav-item dropdown mr-3">
                <a class="nav-link dropdown-toggle border" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tutor Tools</a>
                <div class="dropdown-menu">
                <a class="dropdown-item border" href="{{route('admin.index')}}">Tutor Dashboard</a>
                    <a class="dropdown-item " href="#">Pending assignments</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " href="#">My Details </a>

                </div>
            </li>
    @endif
    @if(auth()->user()->hasRole('Super_Admin') )
            <li class="nav-item dropdown mr-3">
                <a class="nav-link dropdown-toggle border" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin Tools</a>
                <div class="dropdown-menu">
                <a class="dropdown-item border" href="{{route('superAdmin.index',auth()->user())}}">Super Admin Dashboard</a>

                    <a class="dropdown-item" href="#"> Add  Role  </a>

                </div>
            </li>
    @endif

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->first_name }} {{ Auth::user()->student_number }} <span class="caret"></span>


                </a>




                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <a class="dropdown-item" href="{{ route('account.index') }}">
                        Dashboard
                    </a>

                    <a class="dropdown-item" href="{{ route('home') }}">
                        Home
                    </a>

 <a class="dropdown-item" href="#">
 {{auth()->user()->hasRole('Admin')?'You are logged as  Admin ': ''}}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

            @endguest
        </ul>
    </div>

</nav>
