@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::dashboard.permissions.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::dashboard.permissions.show') }}
                        [{{ $permission->display_name }}]
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $permission->name }}</li>
                        <li class="list-group-item">{{ $permission->display_name }}</li>
                        <li class="list-group-item">{{ $permission->description }}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-primary">
                            {{ __('templateDashboardArgon::dashboard.permissions.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
