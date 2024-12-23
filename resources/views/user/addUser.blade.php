@extends('layouts.app')

@section('content')
    <main id="main" class="main" style="height: 100vh">

        <div class="pagetitle">
            <h1>Add A New User</h1>
        </div>

        <form id="roleForm" action="{{url('/user_insert')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="roleName" class="form-label">User Name</label>
                <input type="text" class="form-control" name="name" id="roleName" placeholder="Enter name" >
            </div>

            <div class="mb-3">
                <label for="roleName" class="form-label">User Email</label>
                <input type="email" class="form-control" name="email" id="roleName" placeholder="Enter Email" >
            </div>

            <div class="mb-3">
                <label for="roleName" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="roleName" placeholder="Enter  Password" >
            </div>

            <div class="mb-3">
                <label for="userRole" class="form-label">Role</label>
                <select class="form-select" name="role_id" id="userRole">
                    <option value="" disabled selected>----Select----</option>
                    @foreach($getRecord as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Save User</button>
        </form>

    </main>

@endsection