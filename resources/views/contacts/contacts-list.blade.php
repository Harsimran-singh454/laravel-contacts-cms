@include("_layout.header")
<h1>Contacts List</h1>


<a style="text-decoration: none; font-weight:700" href="{{route('new_contact')}}">Add Contact</a>

@if(session('Success'))
<p class="Success">{{session('Success')}}</p>
@elseif(session('Fail'))
<p class="Fail">{{session('Fail')}}</p>
@endif


<div class="contacts-container">

{{-- -------------- Contact Card--------- --}}
    @foreach ($data as $contact)
        <div class="contact-card" >
            <div class="content">
                <h3> {{$contact->name}} </h3>
                <img src="{{$contact->image}}" alt="{{$contact->name}}" width="200px">
                <p> <strong>email:</strong>  {{$contact->email}} </p>
                <p> <strong>ph:</strong>  {{$contact->phone}} </p>
                <p> <strong>birth: </strong> {{$contact->DOB}} </p>
                <p> <strong>address: </strong> {{$contact->address}} </p>
            </div>
            <a href="{{route('edit_contact_form', $contact->id)}}">Edit</a>
            <a href="{{route('contact_delete_page', $contact->id)}}">Delete</a>
        </div>
    @endforeach
{{-- -------------- Contact Card--------- --}}

</div>

@include("_layout.footer")
