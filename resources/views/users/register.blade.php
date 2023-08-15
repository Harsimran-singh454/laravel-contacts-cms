@include('_layout.header')

<main>
    <h1>User Registration</h1>

    @if(session('Success'))
    <p class="Success">{{session('Success')}}</p>
    @elseif(session('Fail'))
    <p class="Fail">{{session('Fail')}}</p>
    @endif


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
        <a href="{{route('login')}}">Already have an account? Login.</a>

        <input type="submit" value="Register">
    </form>

    @if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</main>

@include('_layout.footer')
