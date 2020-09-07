@extends(config('cw_entrust.layout'))
@section('title', __('templateDashboardArgon::admin.permissions.create'))
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::admin.permissions.create') }}
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.permissions.store', 'id' => 'formCreatePermission']) !!}
                    @include('entrust::permissions.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::admin.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formCreatePermission\').submit();']) !!}
                        <a href="{{ route('admin.permissions.index') }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::admin.buttons.cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Info</h3>
                </div>
                <div class="card-body">
                    <p>
                        A permissões são utilizadas internamente pelo sistema para destinar
                        a utilização correta a cada nivel de perfil.
                    </p>
                    <p>
                        Poder ser criadas ao desenvolver uma nova funcionabilidade ao sistema,
                        abaixo veja a forma de utilização:
                    </p>
                    <p class="text-muted mb-0">
                        Vews: @ permission('name.permission')
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#!" class="text-muted">Mais detalhes acesse a documentação</a>
                </div>
            </div>
        </div>
    </div>
@endsection
