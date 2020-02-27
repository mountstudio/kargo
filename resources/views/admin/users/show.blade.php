@extends('admin.dashboard')
@section('dashboard_content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-8 px-0">
                    <h1>{{ $tag->id }}</h1>
                    <h2>{{ $tag->name }}</h2>
                </div>
                <p>{{ $tag->created_at }}</p>
                <p>{{ $tag->updated_at }}</p>
            </div>
        </div>
    </div>

@endsection
