@extends('layouts.app')

@section('template_title')
    {{ $ronandagon->name ?? 'Show Ronandagon' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ronandagon</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ronandagon.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nomu Nasab:</strong>
                            {{ $ronandagon->nomu_nasab }}
                        </div>
                        <div class="form-group">
                            <strong>Soli Tavallud:</strong>
                            {{ $ronandagon->soli_tavallud }}
                        </div>
                        <div class="form-group">
                            <strong>Hujati Ronandagi:</strong>
                            {{ $ronandagon->hujati_ronandagi }}
                        </div>
                        <div class="form-group">
                            <strong>Raghami Telefon:</strong>
                            {{ $ronandagon->raghami_telefon }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
