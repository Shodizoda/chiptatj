@extends('layouts.app')

@section('template_title')
    {{ $khatsayrho->name ?? 'Show Khatsayrho' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Khatsayrho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('khatsayrho.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $khatsayrho->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Az Kujo:</strong>
                            {{ $khatsayrho->az_kujo }}
                        </div>
                        <div class="form-group">
                            <strong>Ba Kujo:</strong>
                            {{ $khatsayrho->ba_kujo }}
                        </div>
                        <div class="form-group">
                            <strong>Masofa:</strong>
                            {{ $khatsayrho->masofa }}
                        </div>
                        <div class="form-group">
                            <strong>Vaqti Raftan:</strong>
                            {{ $khatsayrho->vaqti_raftan }}
                        </div>
                        <div class="form-group">
                            <strong>Vaqti Rasidan:</strong>
                            {{ $khatsayrho->vaqti_rasidan }}
                        </div>
                        <div class="form-group">
                            <strong>Vaqti Bargashtan:</strong>
                            {{ $khatsayrho->vaqti_bargashtan }}
                        </div>
                        <div class="form-group">
                            <strong>Autobus Id:</strong>
                            {{ $khatsayrho->autobus_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ronanda Id:</strong>
                            {{ $khatsayrho->ronanda_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nozir Id:</strong>
                            {{ $khatsayrho->nozir_id }}
                        </div>
                        <div class="form-group">
                            <strong>Khatsayr Status Id:</strong>
                            {{ $khatsayrho->khatsayr_status_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
