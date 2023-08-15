@include('_layout.header')

<div class="delete-user">
  <h1>Delete User</h1>
  <h3>Are you sure you want to delete this user?</h3>
  <a href="{{route('delete_user',$data->id)}}">Yes</a>
  <a href="{{route('dashboard')}}">No</a>
</div>

@include('_layout.footer')
