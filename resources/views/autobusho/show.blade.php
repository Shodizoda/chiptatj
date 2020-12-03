@extends('layouts.app')

@section('template_title')
    {{ $autobusho->name ?? 'Show Autobusho' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Autobusho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autobusho.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Raqam:</strong>
                            {{ $autobusho->raqam }}
                        </div>
                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $autobusho->model }}
                        </div>
                        <div class="form-group">
                            <strong>Joi Nishast:</strong>
                            {{ $autobusho->joi_nishast }}
                        </div>
                        <div class="form-group">
                            <strong>Tashkilot Id:</strong>
                            {{ $autobusho->tashkilot_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
