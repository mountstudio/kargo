@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.packed.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="packeds-table">
        <thead>
        <tr>
            <th>id</th>
            <th>order_id</th>
            <th>package_id</th>
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
            $('#packeds-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.packed.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'order_id', name: 'order_id'},
                    {data: 'package_id', name: 'package_id'},
                    // {data: 'actions', name: 'actions',searchable: false, orderable: false },
                ]
            });
        });
    </script>
@endpush

