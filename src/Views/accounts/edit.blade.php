@extends('templateDashboardArgon::layouts.app')
@section('title', __('templateDashboardArgon::dashboard.accounts.edit'))
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        Usuários desta conta
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @forelse($account->users as $user)
                            <li class="list-group-item">{{ $user->name }}</li>
                        @empty
                            <p>No users</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
