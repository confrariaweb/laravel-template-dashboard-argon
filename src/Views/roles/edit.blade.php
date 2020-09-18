@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::admin.roles.edit'))
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::admin.roles.edit') }}
                        [{{ $role->display_name }}]
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($role, ['route' => ['admin.roles.update', $role->id], 'method' => 'put', 'id' => 'formEditRole']) !!}
                    @include('acl::roles.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::admin.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formEditRole\').submit();']) !!}
                        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">
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
                        Os perfis são utilizadas internamente pelo sistema para destinar
                        a utilização correta a cada nivel de usuário.
                    </p>
                    <p>
                        Poder ser criadas ao desenvolver uma nova funcionabilidade ao sistema,
                        abaixo veja a forma de utilização:
                    </p>
                    <p class="text-muted mb-0">
                        Vews: @ role('name.role')
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#!" class="text-muted">Mais detalhes acesse a documentação</a>
                </div>
            </div>
        </div>
    </div>
@endsection
