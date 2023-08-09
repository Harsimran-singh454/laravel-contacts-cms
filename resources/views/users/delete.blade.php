@include('_layout.header')

<h1>Delete User</h1>
<h3>Are you sure you want to delete this user?</h3>
<a href="{{route('delete_user',$data->id)}}">Yes</a>
<a href="{{route('dashboard')}}">No</a>

@include('_layout.footer')
