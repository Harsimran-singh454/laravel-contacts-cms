@include('_layout.header')

<div class="delete-page">
  <h2>Delete Contact</h2>
  <h3>Are you sure you want to delete this contact?</h3>
  <a href="{{route('delete_contact', $data->id)}}">Yes</a>
  <a href="{{route('contact_list')}}">No</a>
</div>

@include('_layout.footer')
