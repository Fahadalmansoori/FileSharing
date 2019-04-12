<nav class="nav flex-column">
    <h3 class=" text-secondary  border-bottom">Super Admin Tools  </h3>
    <a class="nav-link  border-Buttom {{request()->is('superAdmin/users')? ' bg-info text-warning' : ' '}} " href="{{route('superAdmin.allUsers')}}"> View All users  </a>
    <a class="nav-link  border-Buttom {{request()->is('admin/approvedbyme/*')? ' bg-info text-warning' : ' '}} " href="#"> View All courses  </a>
    <a class="nav-link  border-Buttom {{request()->is('admin/declinedbyme/*')? ' bg-info text-warning' : ' '}}" href="#"> View all schools </a>
</nav>
