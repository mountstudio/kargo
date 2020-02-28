@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.order.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="orders-table">
        <thead>
        <tr>
            <th>id</th>
            <th>client_id</th>
            <th>product_id</th>
{{--            <th>actions</th>--}}
        </tr>
        </thead>
    </table>

@endsection

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/font_awesome.css') }}">
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
            $('#orders-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.order.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'client_id', name: 'client_id'},
                    {data: 'product_id', name: 'product_id'},
                    // {data: 'actions', name: 'actions',searchable: false, orderable: false },
                ]
            });
        });
    </script>
@endpush

