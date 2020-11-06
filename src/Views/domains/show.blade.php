@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.domains.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.domains.show') }}
                        [{{ $domain->domain }}]
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $domain->domain }}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        <a href="{{ route('dashboard.domains.edit', $domain->id) }}" class="btn btn-primary">
                            {{ __('templateDashboardArgon::dashboard.domains.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
