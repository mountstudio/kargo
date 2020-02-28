@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.attribute.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name_field">{{ __('Name') }}<span class="text-danger">*</span></label>
                    <input id="name_field" type="text" class="form-control" name="name" required>
                </div>
                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection
