<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('vendor/confrariaweb/template-dashboard-argon/img/brand/blue.png') }}"
                     class="navbar-brand-img"
                     alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">
                            <i class="fa fa-tachometer-alt text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link" href="#navbar-posts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-posts">
                            <i class="fa fa-file text-primary"></i>
                            <span class="nav-link-text">Posts</span>
                        </a>
                        <div class="collapse" id="navbar-posts" style="">
                            <ul class="nav nav-sm flex-column">
                                @foreach(postSections() as $section)
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> {{ $section->name }} </span>
                                    </a>
                                </li>
                                @endforeach
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <span class="sidenav-mini-icon"> C </span>
                                        <span class="sidenav-normal"> Categorias </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <span class="sidenav-mini-icon"> S </span>
                                        <span class="sidenav-normal"> Seções </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li-->
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('dashboard.sites.index') }}">
                            <i class="fa fa-pager text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Sites</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('dashboard.domains.index') }}">
                            <i class="fa fa-cube text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Dominios</span>
                        </a>
                    </li>
                    <!--li class="nav-item ">
                        <a class="nav-link" href="{{ route('dashboard.sites.menus.index') }}">
                            <i class="fa fa-bars text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Menus</span>
                        </a>
                    </li-->
                    <!--li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.users.index') }}">
                            <i class="fa fa-users text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Usuários</span>
                        </a>
                    </li-->
                    <!--li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-user-secret text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Perfis</span>
                        </a>
                    </li-->
                    <!--li class="nav-item ">
                        <a class="nav-link" href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-user-lock text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Permissões</span>
                        </a>
                    </li-->
                </ul>
                <!--
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Revenda</span>
                </h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('dashboard.accounts.index') }}">
                            <i class="fa fa-random text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Contas</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('dashboard.plans.index') }}">
                            <i class="fa fa-random text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Planos</span>
                        </a>
                    </li>
                </ul>
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Financeiro</span>
                </h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.invoices.index') }}">
                            <i class="fa fa-file-invoice text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Faturas</span>
                        </a>
                    </li>
                    @role('administrator')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.payment-methods.index') }}">
                            <i class="fa fa-money-check text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Meios de Pagamentos</span>
                        </a>
                    </li>
                    @endrole
                </ul>
                <hr class="my-3">
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Documentação</span>
                </h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-hourglass-start text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Começando</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-check-square text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Integrações</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active active-pro" href="#">
                            <i class="fa fa-upload text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text">Upgrade</span>
                        </a>
                    </li>
                </ul>
                -->
            </div>
        </div>
    </div>
</nav>
