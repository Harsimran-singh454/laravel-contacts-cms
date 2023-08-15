@include('_layout.header')

<main>
    <h1>User Login</h1>

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


    <form action="{{route('login_logic')}}" method="post">
        @csrf
        <label for="email">Email: </label>
        <input type="email" name="email">

        <label for="password">Password: </label>
        <input type="password" name="password">

        <input type="submit" value="Login">
    </form>
</main>

@include('_layout.footer')
