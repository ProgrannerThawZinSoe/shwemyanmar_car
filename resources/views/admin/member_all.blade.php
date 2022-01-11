@extends('compoent.admin_main')
@section('title','Admin - Dashboard')
@section('content')

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $i=>$u)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td> 
                    @if($u->role == 0)
                        Member
                    @elseif($u->role == 1)
                        Admin
                    @endif
                </td>
                <td>
                    <a onclick="return confirm('Are Sure To Delete This Account')"  href="/admin/member/{{$u->id}}/delete">Delete</a> ||
                    @if($u->role == 0)
                        <a onclick="return confirm('Are Sure To Promte This Account')" href="/admin/member/{{$u->id}}/promote-admin">Promote To Admin</a>
                    @elseif($u->role == 1)
                        <a onclick="return confirm('Are Sure To Change Member This Account')" href="/admin/member/{{$u->id}}/change-member">Change To Member</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
