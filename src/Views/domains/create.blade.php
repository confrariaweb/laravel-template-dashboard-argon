@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.domains.create'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Novo dominio</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'dashboard.domains.store', 'id' => 'formCreateDomain']) !!}
                        @include('domain::partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formCreateDomain\').submit();']) !!}
                        <a href="{{ route('dashboard.domains.index') }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
