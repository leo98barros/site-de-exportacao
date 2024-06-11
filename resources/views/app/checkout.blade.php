@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .bg-grey {
            background-color: #eae8e8;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-grey {
                border-top-right-radius: 16px;
                border-bottom-right-radius: 16px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-grey {
                border-bottom-left-radius: 16px;
                border-bottom-right-radius: 16px;
            }
        }
    </style>
@endsection

@section('body')
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h3 class="fw-bold mb-0 text-black">Carrinho</h3>
                                            <h6 class="mb-0 text-muted">2 items</h6>
                                        </div>
                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{asset('img/produtos/AR-1.jpg')}}"
                                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-4 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Quadro triplo Monte Fuji</h6>
                                                <h6 class="text-black mb-0">50x70</h6>
                                            </div>
                                            <div class="col-md-2 col-lg-3 col-xl-2 d-flex">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm" />

                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">R$ 120,00</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{asset('img/produtos/PS-1.jpg')}}"
                                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">Quadro a rua acesa</h6>
                                                <h6 class="text-black mb-0">70x100</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm" />

                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">R$ 59,00</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-lg-5 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Resumo</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">items 2</h5>
                                            <h5>R$ 179,00</h5>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Entrega</h5>

                                        <div class="mb-4 pb-2">
                                            <select class="form-control" data-mdb-select-init>
                                                <option value="1">SEDEX - R$ 10,93</option>
                                                <option value="2">PAC - 20,31</option>
                                            </select>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Cupom?</h5>

                                        <div class="mb-5">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Digite acima</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total (Produtos e Entrega)</h5>
                                            <h5>R$ 189,93</h5>
                                        </div>

                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Pagamento</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
