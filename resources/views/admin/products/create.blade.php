@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.product.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name_field">{{ __('Name') }}<span class="text-danger">*</span></label>
                    <input id="name_field" type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="code_field">{{ __('Code') }}<span class="text-danger">*</span></label>
                    <input id="code_field" type="text" class="form-control" name="code" required>
                </div>
                <div class="form-group">
                    <label for="country_field">{{ __('Country') }}<span class="text-danger">*</span></label>
                    <input id="country_field" type="text" class="form-control" name="country" required>
                </div>
                @if($attributes->count())
                    @foreach($attributes as $attribute)
                        <div class="form-group">
                            <label for="attribute_{{ $attribute->id }}_field">{{ __($attribute->name) }}<span class="text-danger">*</span></label>
                            <input id="attribute_{{ $attribute->id }}_field" type="text" name="attributes[{{ $attribute->id }}]" class="form-control" required>
                        </div>
                    @endforeach
                @endif
                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection
