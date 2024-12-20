@extends('layouts.app')

@section('content')
    <main id="main" class="main" style="height: 100vh">

        <div class="pagetitle d-flex justify-content-between align-items-center">
            <h1>User List</h1>
            <a href="{{url('/user_add')}}" class="btn btn-primary">Add</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>
                <th scope="col">User Role</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getRecord as $index => $value)
            <tr>
                <td>{{$index +1}}</td>
                <td>
                   {{$value->name}}
                </td>
                <td>
                    {{$value->email}}
                </td>
                <td>
                    {{$value->role_name}}
                </td>
                <td>
                    <a href="{{url('/user_edit', $value->id)}}">
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                    <a href="{{url('/user_delete', $value->id)}}">
                    <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </main>


@endsection