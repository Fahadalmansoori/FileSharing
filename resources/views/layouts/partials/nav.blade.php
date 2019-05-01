<nav class="navbar navbar-expand-md  navbar-dark bg-dark border mb-5 p-4 border">

    <a class="navbar-brand" href="{{ url('/') }}">
         {{ config('app.name', 'File sharing') }}
    </a>
    <button class="navbar-toggler border text-info" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
@auth
        <ul class="nav nav-pills nav-fill m-auto">
            <li class="nav-item m-2">
                <a class="nav-link border text-info {{request()->is('account')? 'bg-info text-warning' : ' '}}" href="{{ route('account.index') }}"> My Dashboard</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link bordertext-info border text-info {{request()->is('school/*')? 'bg-info text-warning' : ' '}}" href="{{ route('school.page',auth()->user()->school) }}"> My School</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link border text-info {{request()->is('course/*')? 'bg-info text-warning' : ' '}}" href="{{ route('course.page', auth()->user()->course) }}"> My Course</a>
            </li>

        </ul>
        @endauth



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


@if(auth()->user()->hasRole('Tutor'))
            <li class="nav-item dropdown m-2 mr-3">
                <a class="nav-link dropdown-toggle border text-info" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tutor Tools</a>
                <div class="dropdown-menu">
                <a class="dropdown-item border" href="{{route('admin.index')}}">Tutor Dashboard</a>
                    <a class="dropdown-item " href="{{ route('admin.pending', Auth::user())}}">Pending assignments</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " href="{{route('account.update',auth()->user())}}">Update Details </a>

                </div>
            </li>
    @endif
    @if(auth()->user()->hasRole('Super_Admin') )
            <li class="nav-item dropdown m-2 mr-3">
                <a class="nav-link dropdown-toggle border text-info" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin Tools</a>
                <div class="dropdown-menu">
                <a class="dropdown-item border" href="{{route('superAdmin.index',auth()->user())}}">Super Admin Dashboard</a>

                    <a class="dropdown-item" href="{{route('superAdmin.allUsers')}}"> update roles   </a>

                </div>
            </li>
    @endif

            <li class="nav-item dropdown m-2 mr-3 ">
                <a id="navbarDropdown" class="nav-link dropdown-toggle  text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                       Search
                    </a>
                    <a class="dropdown-item" href="{{ route('file.create') }}">
                       Upload a file
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
