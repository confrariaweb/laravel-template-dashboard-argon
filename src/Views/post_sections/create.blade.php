@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.posts.sections.create'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{ __('templateDashboardArgon::dashboard.posts.sections.create') }}</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'dashboard.posts.sections.store', 'files' => true, 'id' => 'formCreatePostSection']) !!}
                    @include('post::sections.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formCreatePostSection\').submit();']) !!}
                        <a href="{{ route('dashboard.posts.sections.index') }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
