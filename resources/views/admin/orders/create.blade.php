@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.order.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="client_field">{{ __('Select Client') }}<span class="text-danger">*</span></label>
                    <select id="client_field" type="text" class="form-control" name="client_id" required>
                        <option value="{{ null }}">{{ __('Select option') }}</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product_field">{{ __('Select Product') }}<span class="text-danger">*</span></label>
                    <select id="product_field" type="text" class="form-control" name="product_id" required>
                        <option value="{{ null }}">{{ __('Select option') }}</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="city_id_field">{{ __('Select City') }}<span class="text-danger">*</span></label>
                    <select id="city_id_field" type="text" class="form-control" name="city_id" required>
                        <option value="{{ null }}">{{ __('Select option') }}</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
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
