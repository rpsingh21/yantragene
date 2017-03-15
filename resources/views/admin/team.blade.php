@extends('admin.adminView')
<div class="">
    <h2 class="center"> Team and its Member</h2>
</div>
<hr>
@section('table')
    <div class="example">
        <table id="example" class="display nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>Team Id</th>
                <th>Team name</th>
                <th>Event id</th>
                <th>Team Limit</th>
                <th>Email</th>
                <th>Phone</th>
                <th>2'st Member</th>
                <th>Email</th>
                <th>Phone</th>
                <th>3'st Member</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($team as $t)
                <tr>
                    <td></td>
                    <td>{{$t->teamId}}</td>
                    <td>{{$t->teamName}}</td>
                    <td>{{$t->eventId}}</td>
                    <td>{{$t->teamLimit}}</td>
                    <?php
                        $arr=\App\Http\Controllers\adminController::join3($t->teamId);
                    ?>
                    @foreach($arr as $a)
                        <td>{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->phone}}</td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection