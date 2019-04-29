<nav class="nav flex-column">
    <h3 class=" text-secondary  border-bottom"> Your Files </h3>

    <a class="nav-link text-info {{request()->is('user/files/owned/*')? ' bg-secondary text-warning' : ' '}} " href="{{route('user.files.owned',auth::user())}}">Uploaded Files</a>
    <a class="nav-link text-info {{request()->is('user/files/approved/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('user.files.approved',auth::user())}}">Approved Files</a>
    <a class="nav-link text-info {{request()->is('user/files/declined/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('user.files.declined',auth::user())}}">Declined Files</a>
    <a class="nav-link text-info {{request()->is('user/files/pending/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('user.files.pending',auth::user())}}">Pending Files</a>
    <a class="nav-link text-info {{request()->is('file/create')? ' bg-secondary text-warning' : ' '}}" href="{{route('file.create')}}">Upload a file</a>
<hr>
    <h3 class=" text-secondary  border-bottom">Your Account </h3>
    <a class="nav-link text-info {{request()->is('account/details/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('account.details', auth::user())}}">Profile</a>
    <a class="nav-link  text-info {{request()->is('account/update-details/*')? ' bg-secondary text-warning' : ' '}} " href="{{route('account.update',auth()->user())}}">Update Details</a>
    <a class="nav-link text-info {{request()->is('account/change-password/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('account.changePassword',auth()->user())}}">Change Password</a>
<hr>
    @if(auth()->user()->hasRole('Tutor'))
    <h3 class=" text-secondary  border-bottom">Tutor tools </h3>
    <a class="nav-link text-info {{request()->is('admin/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('admin.index')}}"> Tutor dashboard</a>
@endif
</nav>
