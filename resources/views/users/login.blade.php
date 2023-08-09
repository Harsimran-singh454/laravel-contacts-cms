@include('_layout.header')

<main>
    <h1>User Login</h1>

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
