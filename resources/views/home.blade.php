@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card  text-white bg-primary" style="content: ''">
                    <div class="card-body mt-2">
                        <div class="container d-flex h-100 dashboard-card card-link">
                            <a href="/chiptaho" class="text-white text-white btn btn-primary pr-4 pl-4">
                                <div class="row justify-content-center align-self-center">
                                    <i class="fa fa-money mt-2"></i>
                                    <h5 class="ml-3 mt-2">Билеты</h5>
                                </div>
                            </a>

                        </div>
                        <h2 class="text-center"></h2>
                        <a href="" class="btn btn-primary">
                            <i class="fa fa-plus mr-2 "></i> <span>Регистрация</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card text-white bg-success">
                    <div class="card-body mt-2">
                        <div class="container d-flex h-100 dashboard-card card-link">
                            <a href="/khatsayrho" class="text-white btn btn-success pr-4 pl-4">
                                <div class="row justify-content-center align-self-center">
                                    <i class="fa fa-book-reader mt-2"></i>
                                    <h5 class="ml-3 mt-2">Машрути</h5>
                                </div>
                            </a>
                        </div>
                        <h2 class="text-center">fghgfh</h2>
                        <a href="" class="btn btn-success">
                            <i class="fa fa-plus mr-2"></i> <span>@lang('layouts.create')</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card text-white bg-info">
                    <div class="card-body mt-2">
                        <div class="container d-flex h-100 dashboard-card card-link">
                            <a href="/autobusho" class="text-white btn btn-info pr-4 pl-4">
                                <div class="row justify-content-center align-self-center">
                                    <i class="fa fa-bus "></i>
                                    <h5 class="ml-3 ">Автобусов</h5>
                                </div>
                            </a>

                        </div>
                        <h2 class="text-center"></h2>
                        <a href="" class="btn btn-info text-white">
                            <i class="fa fa-plus mr-2"></i> <span>бакайдги</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card  text-white bg-primary" style="content: ''">
                    <div class="card-body mt-2">
                        <div class="container d-flex h-100 dashboard-card card-link">
                            <a href="/noziron" class="text-white text-white btn btn-primary pr-4 pl-4">
                                <div class="row justify-content-center align-self-center">
                                    <i class="fa fa-user-tie mt-2"></i>
                                    <h5 class="ml-3 mt-2">Диспетчеры</h5>
                                </div>
                            </a>

                        </div>
                        <h2 class="text-center"></h2>
                        <a href="" class="btn btn-primary">
                            <i class="fa fa-plus mr-2 "></i> <span>Хатсайрхо</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card text-white bg-success">
                    <div class="card-body mt-2">
                        <div class="container d-flex h-100 dashboard-card card-link">
                            <a href="/ronandagon" class="text-white btn btn-success pr-4 pl-4">
                                <div class="row justify-content-center align-self-center">
                                    <i class="fa fa-user-friends mt-2"></i>
                                    <h5 class="ml-3 mt-2">Водители</h5>
                                </div>
                            </a>
                        </div>
                        <h2 class="text-center">fghgfh</h2>
                        <a href="" class="btn btn-success">
                            <i class="fa fa-plus mr-2"></i> <span>@lang('layouts.create')</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card text-white bg-info">
                    <div class="card-body mt-2">
                        <div class="container d-flex h-100 dashboard-card card-link">
                            <a href="" class="text-white btn btn-info pr-4 pl-4">
                                <div class="row justify-content-center align-self-center">
                                    <i class="fa fa-users "></i>
                                    <h5 class="ml-3 ">Посажири</h5>
                                </div>
                            </a>

                        </div>
                        <h2 class="text-center"></h2>
                        <a href="" class="btn btn-info text-white">
                            <i class="fa fa-plus mr-2"></i> <span>@lang('layouts.register now')</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
