@extends('master')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p></p>
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <section style="background-color: #eee;">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
        <div class="container py-5">
            <div class="row">
                <div class="col">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ $user['name'] }}</h5>
                            <p class="text-muted mb-4">{{ $user['address'] }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/addpet" method="POST">
                                                @csrf
                                                <div class="modal-body mx-3">
                                                    <div class="md-form mb-5">
                                                        <input type="text" id="form6Example1" class="form-control"
                                                            placeholder="name" name="name" />
                                                    </div>

                                                    <div class="md-form mb-5">
                                                        <input type="text" id="form6Example4" class="form-control"
                                                            placeholder="phone" name="phone" />
                                                    </div>

                                                    <div class="md-form mb-5">
                                                        <input type="text" id="form6Example5" class="form-control"
                                                            placeholder="address" name="address" />
                                                    </div>
                                                    <div class="md-form mb-5">
                                                        <textarea class="form-control" id="form6Example7" rows="4" name="desc" placeholder="description"></textarea>

                                                    </div>

                                                    <div class="md-form">
                                                        <i class="fas fa-pencil prefix grey-text"></i>
                                                        <input type="text" id="form6Example5" class="form-control"
                                                            placeholder="image url" name="image" />
                                                    </div>

                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button class="btn btn-unique" type="submit">Send <i
                                                            class="fas fa-paper-plane-o ml-1"></i></button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <div class="text-center">
                                    <a href="" class="btn btn-warning btn-rounded mb-4 " data-toggle="modal"
                                        data-target="#modalContactForm">add pet for adopt</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user['name'] }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user['email'] }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user['phone'] }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user['address'] }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">zip</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user['zip'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        {{-- {{ dd($sub[0]['created_at']) }} --}}
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <div class="card text-center">
                                    <div class="card-header">subsecribe</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Subscription Date and Type</h5>
                                        <p class="card-text">{{ $sub[0]['created_at'] }} | Premium
                                            .</p>

                                    </div>
                                    @php
                                        $remain = 0;

                                        if ($sub[0]['sub_id'] == 2) {
                                            $datetime1 = date_create($sub[0]['created_at']);
                                            $remain = $datetime1->modify('+1 month');
                                        }
                                    @endphp
                                    <div class="card-footer text-muted"> End at :
                                        {{ $remain->format('Y-m-d H:i:s') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
