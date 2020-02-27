@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <p>{{ $role->id }}</p>
                    <p>{{ $role->name }}</p>
                </div>
            </div>

            <div class="col-12">
                <h2>Какие действия имеет роль?</h2>
                <form action="{{ route('admin.role.assign.permission', $role) }}" method="post">
                    @csrf

                    @foreach($permissions as $permission)
                        <div class="form-control">
                            <label for="permission-{{ $permission->id }}">
                                <input type="checkbox" name="permissions[]" id="permission-{{ $permission->id }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : ''  }} value="{{ $permission->id }}">
                                {{ $permission->name }}</label>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-success mt-4">{{ __('Submit') }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
