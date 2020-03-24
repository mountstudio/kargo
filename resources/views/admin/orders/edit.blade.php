@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.tags.update', $tag) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name_field">Наименование тега<span class="text-danger">*</span></label>
                    <input id="name_field" type="text" class="form-control" value="{{ $tag->name }}" name="name" required>
                </div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
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
