@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.sites.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.sites.show') }}
                        [{{ $site->site }}]
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $site->site }}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        <a href="{{ route('dashboard.sites.edit', $site->id) }}" class="btn btn-primary">
                            {{ __('templateDashboardArgon::dashboard.sites.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
