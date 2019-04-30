<nav class="nav flex-column">
    <h3 class=" text-secondary  border-bottom">Super Admin Tools  </h3>
    <a class="nav-link  border-Buttom {{request()->is('superAdmin/users')? ' bg-info text-warning' : ' '}} " href="{{route('superAdmin.allUsers')}}"> View All users  </a>
    <a class="nav-link  border-Buttom {{request()->is('superAdmin/courses')? ' bg-info text-warning' : ' '}} " href="{{route('superAdmin.allCourses')}}"> View All courses  </a>
    <a class="nav-link  border-Buttom {{request()->is('superAdmin/modules')? ' bg-info text-warning' : ' '}}" href="{{route('superAdmin.allModules')}}"> View all Modules </a>

</nav>
