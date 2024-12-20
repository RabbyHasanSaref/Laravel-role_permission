@extends('layouts.app')

@section('content')
    <main id="main" class="main" style="height: 100vh">

        <div class="pagetitle d-flex justify-content-between align-items-center">
            <h1>Role List</h1>
            @if(!empty($permissionAdd))
            <a href="{{url('role_add')}}" class="btn btn-primary">Add</a>
                @endif
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Role Name</th>
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
                    <a href="{{url('role_edit', $value->id)}}">
                        <button class="btn btn-info btn-sm">Edit</button>
                    </a>
                    <a href="{{url('role_delete', $value->id)}}">
                    <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </main>


@endsection