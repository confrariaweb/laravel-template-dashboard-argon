@extends(config('cw_account.layout'))
@section('title', __('templateDashboardArgon::dashboard.plans.create'))
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.plans.create') }}
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.plans.store', 'id' => 'formCreatePlan']) !!}
                    @include('account::plans.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formCreatePlans\').submit();']) !!}
                        <a href="{{ route('admin.plans.index') }}" class="btn btn-secondary">
                            {{ __('templateDashboardArgon::dashboard.buttons.cancel') }}
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
                    <ul>
                        <li><b>Storage</b>: É o espaço disponivels para armazenamento geral.</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="#!" class="text-muted">Mais detalhes acesse a documentação</a>
                </div>
            </div>
        </div>
    </div>
@endsection
