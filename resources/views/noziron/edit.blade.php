@extends('layouts.app')

@section('template_title')
    Изменить данные от диспетчере
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Изменить данные от диспетчере</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('noziron.update', $noziron->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('noziron.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
