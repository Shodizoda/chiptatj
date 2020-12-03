@extends('layouts.app')

@section('template_title')
    {{ $chiptaStatus->name ?? 'Show Chipta Status' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Chipta Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('chipta-statuses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $chiptaStatus->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Rang:</strong>
                            {{ $chiptaStatus->rang }}
                        </div>
                        <div class="form-group">
                            <strong>Class:</strong>
                            {{ $chiptaStatus->class }}
                        </div>
                        <div class="form-group">
                            <strong>Order:</strong>
                            {{ $chiptaStatus->order }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
