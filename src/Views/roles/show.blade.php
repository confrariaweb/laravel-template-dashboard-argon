@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::admin.roles.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::admin.roles.show') }}
                        [{{ $role->display_name }}]
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $role->name }}</li>
                        <li class="list-group-item">{{ $role->display_name }}</li>
                        <li class="list-group-item">{{ $role->description }}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-primary">
                            {{ __('templateDashboardArgon::admin.roles.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
