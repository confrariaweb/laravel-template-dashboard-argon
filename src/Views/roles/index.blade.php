@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.roles.index'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{ __('templateDashboardArgon::dashboard.roles.index') }}</h3>
                </div>
                <div class="table-responsive py-4">
                    @include('acl::roles.partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection
