<div class="list-group">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin/dashboard*') ? 'active' : '' }}">{{ __('Dashboard') }}</a>
    <a href="{{ route('admin.role.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/role*') ? 'active' : '' }}">{{ __('Roles') }}</a>
    <a href="{{ route('admin.permission.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/permission*') ? 'active' : '' }}">{{ __('Permissions') }}</a>
    <a href="{{ route('admin.user.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}">{{ __('Users') }}</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
