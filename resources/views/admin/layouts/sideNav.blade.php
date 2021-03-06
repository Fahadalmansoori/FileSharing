<nav class="nav flex-column">
    <h3 class=" text-secondary  border-bottom"> Tutor Tools  </h3>
    <a class="nav-link {{request()->is('admin/pending/*')? ' bg-info text-warning' : ' '}} " href="{{ route('admin.pending', Auth::user())}}">Pending files </a>
    <a class="nav-link  {{request()->is('admin/approvedbyme/*')? ' bg-info text-warning' : ' '}} " href="{{route('admin.approvedby', Auth::user()) }}">Files approved by you </a>
    <a class="nav-link  {{request()->is('admin/declinedbyme/*')? ' bg-info text-warning' : ' '}}" href="{{route('admin.declinedby',Auth::user())}}">Files declined by you</a>
    <a class="nav-link  {{request()->is('admin/uploadedbyme/*')? ' bg-info text-warning' : ' '}}" href="{{route('admin.uploadedby', Auth::user())}}">Your uploaded files</a>
    <a class="nav-link {{request()->is('file/create')? ' bg-info text-warning' : ' '}}" href="{{route('admin.create')}}">Upload a file</a>

    <h3 class=" text-secondary  border-bottom">Your Account </h3>
    <a class="nav-link text-info {{request()->is('account/details/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('account.details', auth::user())}}">Profile</a>
    <a class="nav-link  text-info {{request()->is('account/update-details/*')? ' bg-secondary text-warning' : ' '}} " href="{{route('account.update',auth()->user())}}">Update Details</a>
    <a class="nav-link text-info {{request()->is('account/change-password/*')? ' bg-secondary text-warning' : ' '}}" href="{{route('account.changePassword',auth()->user())}}">Change Password</a>

</nav>
