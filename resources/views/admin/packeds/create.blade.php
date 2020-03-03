@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-10 col-md-10">
            <form action="{{ route('admin.packed.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="package_id_field">{{ __('Package') }}<span class="text-danger">*</span></label>
                    <select id="package_id_field" type="text" class="form-control" name="package_id" required>
                        <option value="{{ null }}">{{ __('Select option') }}</option>
                        @foreach($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_id_field">{{ __('Order') }}<span class="text-danger">*</span></label>
                    <select id="order_id_field" type="text" class="form-control" name="order_id" required>
                        <option value="{{ null }}">{{ __('Select option') }}</option>
                        @foreach($orders as $order)
                            <option value="{{ $order->id }}" data-client="{{ $order->client->code }}">{{ $order->product->name }} + {{ $order->client->code }} + {{ $order->client->user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="code_field">{{ __('Code') }}</label>
                    <input type="text" id="code_field" name="code" class="form-control disabled" disabled>

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

@push('scripts')
    <script>
        $('#order_id_field').change(e => {
            let select = $(e.currentTarget);

            let inputCode = $('#code_field');
            let clientCode = select.children('option:selected').data('client');
            inputCode.val(clientCode + '/1');
        })
    </script>
@endpush
