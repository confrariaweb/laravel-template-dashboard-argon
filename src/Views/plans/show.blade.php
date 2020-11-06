@extends(config('cw_account.layout'))
@section('title', __('templateDashboardArgon::dashboard.plans.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.plans.show') }}
                        [{{ $plan->title }}]
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $plan->title }}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        <a href="{{ route('admin.plans.edit', $plan->id) }}" class="btn btn-primary">
                            {{ __('templateDashboardArgon::dashboard.plans.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
