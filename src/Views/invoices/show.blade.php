@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::admin.invoices.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{ __('templateDashboardArgon::admin.invoices.show') }} [{{ $invoice->code }}]</h3>
                </div>
                <div class="table-responsive py-4">
                    @include('financial::invoices.partials.invoice')
                </div>
            </div>
        </div>
    </div>
@endsection
