@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::admin.users.index'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">{{ __('templateDashboardArgon::admin.users.index') }}</h3>
                </div>
                <div class="table-responsive py-4">
                    @include('user::users.partials.list')
                </div>
            </div>
        </div>
    </div>
@endsection
