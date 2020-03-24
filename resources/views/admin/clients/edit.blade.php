@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.client.update', $client) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name_field">{{ __('Full name') }}<span class="text-danger">*</span></label>
                    <input id="name_field" type="text" class="form-control" name="name" value="{{ $client->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email_field">{{ __('E-mail') }}<span class="text-danger">*</span></label>
                    <input id="email_field" type="text" class="form-control" name="email" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label for="password_field">{{ __('Password') }}<span class="text-danger">*</span></label>
                    <input id="password_field" type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="code_field">{{ __('Code') }}<span class="text-danger">*</span></label>
                    <input id="code_field" type="text" class="form-control" name="code" value="{{ $client->code }}" required>
                </div>
                <div class="form-group">
                    <label for="phone_field">{{ __('Phone') }}<span class="text-danger">*</span></label>
                    <input id="phone_field" type="text" class="form-control" name="phone" value="{{ $client->phone }}" required>
                </div>
                <div class="form-group">
                    <label for="address_field">{{ __('Address') }}<span class="text-danger">*</span></label>
                    <input id="address_field" type="text" class="form-control" name="address" value="{{ $client->address }}" required>
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
