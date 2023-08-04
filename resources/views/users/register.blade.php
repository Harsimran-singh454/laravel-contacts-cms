@include('layout.header')

<main>
    <h1>User Registration</h1>

    <form action="" method="post">
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


</main>

@include('layout.footer')
