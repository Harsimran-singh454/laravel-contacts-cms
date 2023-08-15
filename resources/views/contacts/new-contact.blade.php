@include('_layout.header')

<div class="new-contact-page">
  <h1>New Contact</h1>
  @if ($errors->any())
    <div class="alert">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if(session('Success'))
  <p class="Success">{{session('Success')}}</p>
  @elseif(session('Fail'))
  <p class="Fail">{{session('Fail')}}</p>
  @endif

  <form action="{{route('create_contact')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{old('name')}}">

    <label for="image">Image:</label>
    <input type="file" name="image" value="{{old('image')}}">

    <label for="DOB">Date of Birth:</label>
    <input type="date" name="DOB" value="{{old('DOB')}}">

    <label for="address">Address:</label>
    <input type="text" name="address" value="{{old('address')}}">

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{old('email')}}">

    <label for="phone">Phone no.:</label>
    <input type="number" name="phone" value="{{old('phone')}}">

    <input type="submit" value="Add">
  </form>
</div>

@include('_layout.footer')
