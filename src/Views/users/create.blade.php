@extends(config('cw_user.layout'))
@section('title', __('templateDashboardArgon::dashboard.users.create'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.users.create') }}
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.users.store', 'files' => true, 'class' => 'horizontal-form', 'id' => 'formCreateUser']) !!}
                    @include('user::users.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formCreateUser\').submit();']) !!}
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



