@extends('layouts.app')
@section('content')

    <section class="vh-100" style="background-color: rgba(227,242,253,0.85);">
        <div class="container h-100" dir="ltr">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <p><span class="h2">Shopping Cart </span></p>

                    <div class="card mb-4">
                        <div class="card-body p-4">

                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                                         class="img-fluid" alt="Generic placeholder image">
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Name</p>
                                        <p class="lead fw-normal mb-0">iPad Air</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Color</p>
                                        <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #fdd8d2;"></i>
                                            pink rose</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Quantity</p>
                                        <p class="lead fw-normal mb-0">1</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Price</p>
                                        <p class="lead fw-normal mb-0">$799</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Total</p>
                                        <p class="lead fw-normal mb-0">$799</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="card-body p-4">

                            <div class="float-end">
                                <p class="mb-0 me-5 d-flex align-items-center">
                                    <span class="small text-muted me-2">Order total:</span> <span
                                        class="lead fw-normal">$799</span>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
                        <button type="button" class="btn btn-primary btn-lg">CheckOut</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
