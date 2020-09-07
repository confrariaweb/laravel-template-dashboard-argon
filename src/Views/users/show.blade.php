@extends(config('cw_entrust.layout'))
@section('title', __('templateDashboardArgon::admin.users.show'))
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        {{ __('templateDashboardArgon::admin.users.show') }}
                        [{{ $user->name }}]
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $user->name }}</li>
                        <li class="list-group-item">{{ $user->email }}</li>
                        <li class="list-group-item">{{ $user->roles->implode('display_name', ', ')}}</li>
                    </ul>
                </div>
                <div class="card-footer text-right">
                    <div class="btn-group" role="group" aria-label="Basic">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
                            {{ __('templateDashboardArgon::admin.users.edit') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
