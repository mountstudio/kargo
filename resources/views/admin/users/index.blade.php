@extends('admin.dashboard')
@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.user.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
{{--            <th>actions</th>--}}
        </tr>
        </thead>
    </table>

@endsection

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.user.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    // {data: 'actions', name: 'actions',searchable: false, orderable: false },
                ]
            });
        });
    </script>
@endpush

