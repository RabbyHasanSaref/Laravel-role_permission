@extends('layouts.app')

@section('content')
    <main id="main" class="main" style="height: 100vh">

        <div class="pagetitle">
            <h1>Edit A Role</h1>
        </div>

        <form id="roleForm" action="{{url('role_update',$getRecord->id )}}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="mb-3">
                <label for="roleName" class="form-label">Role Name</label>
                <input type="text" class="form-control" value="{{$getRecord->name}}" name="name" id="roleName" placeholder="Enter role name" >
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
                                    @php
                                        $checked='';
                                    @endphp
                                    @foreach($getRolePermissions as $role)
                                    @if($role->permission_id == $group['id'])
                                        @php
                                            $checked ='checked';
                                        @endphp
                                    @endif
                                @endforeach

                                        <div class="col-md-3">
                                            <label><input type="checkbox" {{  $checked }}  value="{{$group['id']}}" name="permission_id[]"> {{ $group['name'] }}</label>
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