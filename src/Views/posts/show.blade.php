@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.posts.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.posts.show') }}
                        [{{ $post->post }}]
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $post->post }}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        <a href="{{ route('dashboard.posts.edit', $post->id) }}" class="btn btn-primary">
                            {{ __('templateDashboardArgon::dashboard.posts.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
