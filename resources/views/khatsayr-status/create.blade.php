@extends('layouts.app')

@section('template_title')
    Create Khatsayr Status
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Khatsayr Status</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('khatsayr-statuses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('khatsayr-status.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
