@extends(config('cw_account.layout'))
@section('title', __('templateDashboardArgon::dashboard.plans.edit'))
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.plans.edit') }}
                        [{{ $plan->title }}]
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($plan, ['route' => ['admin.plans.update', $plan->id], 'method' => 'put', 'id' => 'formEditPlan']) !!}
                    @include('account::plans.partials.form')
                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        {!! Form::submit(__('templateDashboardArgon::dashboard.buttons.save'), ['class' => 'btn btn-primary', 'onClick' => 'document.getElementById(\'formEditPlan\').submit();']) !!}
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
