@include('_layout.header')
<h1>Admin Dashboard</h1>
<div>
    <h2>Users</h2>
    <a href="{{route('register')}}">Add User</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td><a href="{{route('edit_user_form',$user->id)}}">Edit</a> <a href="{{route('user_delete_page',$user->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div>
    <h2>Your Contacts</h2>
    <a href="{{route('new_contact')}}">Add Contact</a>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>phone</th>
                <th>email</th>
                <th>address</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td><img src="{{$contact->image}}" alt="{{$contact->name}}" width="24px"></td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->address}}</td>
                    <td><a href="{{route('edit_contact_form',$contact->id)}}">Edit</a> <a href="{{route('contact_delete_page',$contact->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('_layout.footer')
