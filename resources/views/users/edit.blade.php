@include('_layout.header')

<main>
    <h1>Edit User Details</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
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



    <form action="{{route('edit_user',$data->id)}}" method="post">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" value="{{$data->name}}">

        <label for="DOB">Date of Birth: </label>
        <input type="date" name="DOB" value="{{$data->DOB}}">

        <label for="email">Email: </label>
        <input type="email" name="email" value="{{$data->email}}">

        <label for="password">Password: </label>
        <input type="password" name="password" value="{{$data->password}}">

        <select name="role" id="role">
            <option value="{{$data->role}}" style="border-bottom:1px solid black;">{{$data->role}}</option>
            <option value="user">user</option>
            <option value="superuser">superuser</option>
        </select>

        <input type="submit" value="Register">
    </form>
</main>

@include('_layout.footer')
