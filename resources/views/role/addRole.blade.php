@extends('layouts.app')

@section('content')
    <main id="main" class="main" style="height: 100vh">

        <div class="pagetitle">
            <h1>Add A New Role</h1>
        </div>

        <form id="roleForm" action="{{url('role_insert')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="roleName" class="form-label">Role Name</label>
                <input type="text" class="form-control" name="name" id="roleName" placeholder="Enter role name" >
            </div>



            <div class="row mb-3">
                <label style="display: block; margin-bottom: 20px;" for="inputText" class="col-sm-12 col-form-label"><b>
                        Permission</b></label>
                @foreach($getPermission as $value)
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-md-3">
                            {{ $value['name'] }}
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                @foreach($value['group'] as $group)
                                    <div class="col-md-3">
                                        <label><input type="checkbox" value="{{$group['id']}}" name="permission_id[]"> {{ $group['name'] }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Save Role</button>
        </form>

    </main>

@endsection