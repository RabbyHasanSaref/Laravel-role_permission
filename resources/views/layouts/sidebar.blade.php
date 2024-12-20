<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
@php
$PermissionUser = \App\Models\permissionRoleModel::getPermission('User', Auth::User()->role_id);
$PermissionRole = \App\Models\permissionRoleModel::getPermission('Role', Auth::User()->role_id);
$PermissionCategory = \App\Models\permissionRoleModel::getPermission('Category', Auth::User()->role_id);
$PermissionSub_Category = \App\Models\permissionRoleModel::getPermission('Sub Category', Auth::User()->role_id);
$PermissionProduct = \App\Models\permissionRoleModel::getPermission('Product', Auth::User()->role_id);
@endphp
        <li class="nav-item">
            <a class="nav-link " href="{{url('/dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
@if(!empty($PermissionUser))
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/user_list')}}">
                <!-- Icon for User -->
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li>
@endif
@if(!empty($PermissionRole))
        <li class="nav-item">
            <a class="nav-link collapsed" {{ Request::segment(1) }} href="{{url('role_list')}}">
                <!-- Icon for Role -->
                <i class="bi bi-person-lock"></i>
                <span>Role</span>
            </a>
        </li>
        @endif
        @if(!empty($PermissionCategory))
        <li class="nav-item">
            <a class="nav-link collapsed" {{ Request::segment(1) }} href="">
                <!-- Icon for Role -->
{{--                <i class="bi bi-person-lock"></i>--}}
                <span>Category</span>
            </a>
        </li>
        @endif
        @if(!empty($PermissionSub_Category))
        <li class="nav-item">
            <a class="nav-link collapsed" {{ Request::segment(1) }} href="">
                <!-- Icon for Role -->
                {{--                <i class="bi bi-person-lock"></i>--}}
                <span>Sub Category</span>
            </a>
        </li>
        @endif
        @if(!empty($PermissionProduct))
        <li class="nav-item">
            <a class="nav-link collapsed" {{ Request::segment(1) }} href="">
                <!-- Icon for Role -->
                {{--                <i class="bi bi-person-lock"></i>--}}
                <span>Product</span>
            </a>
        </li>
        @endif
    </ul>

</aside><!-- End Sidebar-->