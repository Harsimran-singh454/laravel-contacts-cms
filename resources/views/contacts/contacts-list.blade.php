@include("_layout.header")
<h1>Contacts List</h1>


<a href="{{route('new_contact')}}">Add Contact</a>

{{-- -------------- Contact Card--------- --}}
    @foreach ($data as $contact)
        <div>
           <h3> {{$contact->name}} </h3>
           <img src="{{$contact->image}}" alt="{{$contact->name}}" width="200px">
           <p> {{$contact->email}} </p>
           <p> {{$contact->phone}} </p>
           <p> {{$contact->DOB}} </p>
           <p> {{$contact->address}} </p>
        </div>
        <a href="{{route('edit_contact_form', $contact->id)}}">Edit</a>
        <a href="{{route('contact_delete_page', $contact->id)}}">Delete</a>
    @endforeach
{{-- -------------- Contact Card--------- --}}

@include("_layout.footer")
