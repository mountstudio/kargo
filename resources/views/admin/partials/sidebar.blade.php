<div class="list-group">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action {{ request()->is('admin/dashboard*') ? 'active' : '' }}">{{ __('Dashboard') }}</a>
    <a href="{{ route('admin.role.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/role*') ? 'active' : '' }}">{{ __('Roles') }}</a>
    <a href="{{ route('admin.permission.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/permission*') ? 'active' : '' }}">{{ __('Permissions') }}</a>
    <a href="{{ route('admin.user.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/user*') ? 'active' : '' }}">{{ __('Users') }}</a>
    <a href="{{ route('admin.client.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/client*') ? 'active' : '' }}">{{ __('Clients') }}</a>
    <a href="{{ route('admin.product.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/product*') ? 'active' : '' }}">{{ __('Products') }}</a>
    <a href="{{ route('admin.attribute.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/attribute*') ? 'active' : '' }}">{{ __('Attributes') }}</a>
    <a href="{{ route('admin.order.index') }}" class="list-group-item list-group-item-action {{ request()->is('admin/order*') ? 'active' : '' }}">{{ __('Orders') }}</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
