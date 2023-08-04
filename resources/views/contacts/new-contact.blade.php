@include('layout.header')

<h1>New Contact</h1>

<form action="" method="post">
    @csrf
    <label for="name">Name: </label>
    <input type="text" name="name" value="{{old('name')}}">

    <label for="image">Image: </label>
    <input type="file" name="image" value="{{old('image')}}">

    <label for="DOB">Date of Birth: </label>
    <input type="date" name="DOB" value="{{old('DOB')}}">

    <label for="address">Address: </label>
    <input type="text" name="address" value="{{old('address')}}">

    <label for="email">Email: </label>
    <input type="email" name="email" value="{{old('email')}}">

    <label for="phone">Phone no.: </label>
    <input type="number" name="phone" value="{{old('phone')}}">

    <input type="submit" value="Add">
</form>

@include('layout.footer')
