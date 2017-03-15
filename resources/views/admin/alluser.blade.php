@extends('admin.adminView')
<h2>All User OF This Event</h2>
@section('table')
    <div class="example">
        <table id="example" class="display nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>User Id</th>
                <th>User name</th>
                <th>User Email</th>
                <th>User Phone</th>
                <th>User College</th>
                <th>join on</th>
                <th>Sand Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $u)
                <tr>
                    <td></td>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->phone}}</td>
                    <td>{{$u->college}}</td>
                    <td>{{$u->created_at}}</td>
                    <td><a href="#" type="button" class="btn btn-success">sand E-mail</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection