@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.domains.dns.create'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Novo dns</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['dashboard.domains.dns.store', 'domain' => $domain->domain], 'id' => 'formCreateDomainDns']) !!}
                        @include('domain::dns.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formCreateDomainDns\').submit();']) !!}
                        <a href="{{ route('dashboard.domains.dns.index', ['domain' => $domain]) }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
