@extends(config('cw_user.layout'))
@section('title', __('templateDashboardArgon::dashboard.users.edit'))
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.users.edit') }}
                        [{{ $user->name }}]
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'put', 'id' => 'formEditUser']) !!}
                    @include('user::users.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formEditUser\').submit();']) !!}
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
