@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.domains.edit'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.domains.edit') }}
                        [{{ $domain->domain }}]
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($dns, ['route' => ['dashboard.domains.dns.update', ['domain' => $domain->domain, 'id' => $dns->id]], 'method' => 'put', 'id' => 'formEditDomainDns']) !!}
                    @include('domain::dns.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formEditDomainDns\').submit();']) !!}
                        <a href="{{ route('dashboard.domains.dns.index', ['domain' => $domain]) }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
