<nav class="nav flex-column">
    <h3 class=" text-secondary  border-bottom"> Your Files </h3>

    <a class="nav-link  {{request()->is('user/files/owned/*')? ' bg-secondary text-warning' : ' '}} " href="{{route('user.files.owned',auth::user())}}">Owned Files</a>
    <a class="nav-link  {{request()->is('user/files/purchased/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('user.files.purchased',auth::user())}}">Purchased Files</a>
    <a class="nav-link {{request()->is('file/create')? ' bg-secondary text-warning' : ' '}}" href="{{route('file.create')}}">Upload a file</a>

    <h3 class=" text-secondary  border-bottom">Your Account </h3>
    <a class="nav-link" href="#">Profile</a>
    <a class="nav-link" href="#">Update Details</a>
    <a class="nav-link" href="#">Change Password</a>

</nav>
