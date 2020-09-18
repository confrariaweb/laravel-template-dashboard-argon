@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::admin.payment-methods.index'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{ __('templateDashboardArgon::admin.payment-methods.index') }}</h3>
                </div>
                <div class="table-responsive py-4">
                    @include('financial::payment-methods.partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection
