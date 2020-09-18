@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::admin.permissions.create'))
@section('content')
    <div class="row">
        <div class="col-6">
            @include('financial::payment-methods.partials.form')
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Info</h3>
                </div>
                <div class="card-body">
                    <p>

                    </p>
                </div>
                <div class="card-footer">
                    <a href="#!" class="text-muted">Mais detalhes acesse a documentação</a>
                </div>
            </div>
        </div>
    </div>
@endsection
