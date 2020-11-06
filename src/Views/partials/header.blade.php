@php
$currentRouteName = Route::currentRouteName();
$routeIndex = Str::of($currentRouteName)->replace(['create', 'edit', 'show'], 'index');
$routeCreate = Str::of($currentRouteName)->replace(['index', 'edit', 'show'], 'create');
$routeParameters = request()->all();
@endphp
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">{{ __('templateDashboardArgon::' . $routeIndex) }}</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            @if (Str::contains($currentRouteName, ['create', 'edit', 'show']))
                                <li class="breadcrumb-item">
                                    <a href="{{ route("$routeIndex") }}">
                                        {{ __('templateDashboardArgon::' . $routeIndex) }}
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ __('templateDashboardArgon::' . $currentRouteName) }}
                                </li>
                            @endif
                            @if (Str::contains($currentRouteName, ['index']))
                                <li class="breadcrumb-item active">
                                    {{ __('templateDashboardArgon::' . $routeIndex) }}
                                </li>
                            @endif
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    @if (Str::contains($currentRouteName, ['create', 'edit', 'show']))
                        <a href="{{ route("$routeIndex", $routeParameters) }}" class="btn btn-sm btn-neutral">
                            {{ __('templateDashboardArgon::' . $routeIndex) }}
                        </a>
                    @endif
                    @if (!Str::contains($currentRouteName, ['create']))
                    <a href="{{ route("$routeCreate", $routeParameters) }}" class="btn btn-sm btn-neutral">
                        {{ __('templateDashboardArgon::' . $routeCreate) }}
                    </a>  
                    @endif                  
                </div>
            </div>
        </div>
    </div>
</div>
