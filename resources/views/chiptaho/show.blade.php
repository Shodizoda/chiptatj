@extends('layouts.app')

@section('template_title')
    {{ $chiptaho->name ?? 'Show Chiptaho' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Chiptaho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chiptaho.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Narkh:</strong>
                            {{ $chiptaho->narkh }}
                        </div>
                        <div class="form-group">
                            <strong>Joi Nishast:</strong>
                            {{ $chiptaho->joi_nishast }}
                        </div>
                        <div class="form-group">
                            <strong>Nomu Nasab:</strong>
                            {{ $chiptaho->nomu_nasab }}
                        </div>
                        <div class="form-group">
                            <strong>Vagti Kharid:</strong>
                            {{ $chiptaho->vagti_kharid }}
                        </div>
                        <div class="form-group">
                            <strong>Raqami Shinosnoma:</strong>
                            {{ $chiptaho->raqami_shinosnoma }}
                        </div>
                        <div class="form-group">
                            <strong>Khatsayr Id:</strong>
                            {{ $chiptaho->khatsayr_id }}
                        </div>
                        <div class="form-group">
                            <strong>Chipta Status Id:</strong>
                            {{ $chiptaho->chipta_status_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
