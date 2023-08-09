@include('_layout.header')

<main>
    <h1>User Registration</h1>

    <form action="{{route('register_logic')}}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" value="{{old('name')}}">

        <label for="DOB">Date of Birth: </label>
        <input type="date" name="DOB" value="{{old('DOB')}}">

        <label for="email">Email: </label>
        <input type="email" name="email" value="{{old('email')}}">

        <label for="password">Password: </label>
        <input type="password" name="password" >

        <input type="hidden" name="role" value="user">

        <input type="submit" value="Register">
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</main>

@include('_layout.footer')
