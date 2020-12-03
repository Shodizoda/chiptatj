@extends('layouts.app')

@section('template_title')
    {{ $khatsayrStatus->name ?? 'Show Khatsayr Status' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Khatsayr Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('khatsayr-statuses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $khatsayrStatus->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Rang:</strong>
                            {{ $khatsayrStatus->rang }}
                        </div>
                        <div class="form-group">
                            <strong>Class:</strong>
                            {{ $khatsayrStatus->class }}
                        </div>
                        <div class="form-group">
                            <strong>Order:</strong>
                            {{ $khatsayrStatus->order }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
