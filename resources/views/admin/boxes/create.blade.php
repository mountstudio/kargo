@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.box.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="width_field">{{ __('Width') }}<span class="text-danger">*</span></label>
                    <input id="width_field" type="number" class="form-control" name="width" required>
                </div>
                <div class="form-group">
                    <label for="height_field">{{ __('Height') }}<span class="text-danger">*</span></label>
                    <input id="height_field" type="number" class="form-control" name="height" required>
                </div>
                <div class="form-group">
                    <label for="length_field">{{ __('Length') }}<span class="text-danger">*</span></label>
                    <input id="length_field" type="text" class="form-control" name="length" required>
                </div>
                <div class="form-group">
                    <label for="weight_field">{{ __('Weight') }}<span class="text-danger">*</span></label>
                    <input id="weight_field" type="text" class="form-control" name="weight" required>
                </div>
                <div class="form-group">
                    <label for="package_field">{{ __('Package type') }}<span class="text-danger">*</span></label>
                    <select id="package_field" type="text" class="form-control" name="package_id" required>
                        <option value="{{ null }}">{{ __('Select option') }}</option>
                        @foreach($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="city_field">{{ __('City') }}<span class="text-danger">*</span></label>
                    <select id="city_field" type="text" class="form-control" name="city_id" required>
                        <option value="{{ null }}">{{ __('Select option') }}</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" title="{{ __('Добавить') }}" class="btn n btn-success">{{ __('Добавить') }}</button>
            </form>
        </div>
    </div>
@endsection
