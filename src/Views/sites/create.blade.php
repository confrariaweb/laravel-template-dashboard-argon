@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.sites.create'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{ __('templateDashboardArgon::dashboard.sites.create') }}</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'dashboard.sites.store', 'files' => true, 'id' => 'formCreateSite']) !!}
                    <div class="row">
                        <div class="col-6">
                            @include('site::partials.form')
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formCreateSite\').submit();']) !!}
                        <a href="{{ route('dashboard.sites.index') }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
