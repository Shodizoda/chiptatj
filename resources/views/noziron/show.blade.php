@extends('layouts.app')

@section('template_title')
    {{ $noziron->name ?? 'Show Noziron' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Noziron</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('noziron.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nomu Nasab:</strong>
                            {{ $noziron->nomu_nasab }}
                        </div>
                        <div class="form-group">
                            <strong>Soli Tavallud:</strong>
                            {{ $noziron->soli_tavallud }}
                        </div>
                        <div class="form-group">
                            <strong>Raghami Telefon:</strong>
                            {{ $noziron->raghami_telefon }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $noziron->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
