@extends(config('cw_acl.layout'))
@section('title', __('templateDashboardArgon::dashboard.payment-method-users.create'))
@section('content')
    <div class="row">
        <div class="col-6">
            {!! Form::open(['route' => 'admin.payment-method-users.store', 'id' => 'formCreatePaymentMethodUser', 'role' => 'form', 'class' => 'form-primary']) !!}
            <div class="card bg-gradient-default">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <img src="{{ asset("vendor/template-dashboard-argon/img/icons/cards/mastercard.png") }}" alt="Image placeholder">
                        </div>
                        <div class="col-auto">
                            <div class="d-flex align-items-center">
                                <small class="text-white font-weight-bold mr-3">Tornar padrão</small>
                                <div>
                                    <label class="custom-toggle custom-toggle-white">
                                        <input type="checkbox" checked="checked" name="status" value="1">
                                        <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                              data-label-on="Yes"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-single-02"></i>
                                        </span>
                                </div>
                                <input name="holder" class="form-control" placeholder="Nome no cartão" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-credit-card"></i>
                                        </span>
                                </div>
                                <input name="card-number" class="form-control" placeholder="Numero do cartão" type="text"  required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="ni ni-calendar-grid-58"></i>
                                                </span>
                                        </div>
                                        <input name="expiration-date" class="form-control" placeholder="MM/AA" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="ni ni-lock-circle-open"></i>
                                                </span>
                                        </div>
                                        <input name="security-code" class="form-control" placeholder="CCV" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-info">Salvar</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Info</h3>
                </div>
                <div class="card-body">
                    <p>

                    </p>
                </div>
                <div class="card-footer">
                    <a href="#!" class="text-muted">Mais detalhes acesse a documentação</a>
                </div>
            </div>
        </div>
    </div>
@endsection
