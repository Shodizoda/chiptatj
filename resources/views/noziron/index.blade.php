@extends('layouts.app')

@section('template_title')
    Диспетчеры
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Диспетчеры') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('noziron.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Добавить') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>№</th>

										<th>ФИО</th>
										<th>Дата рождения</th>
										<th>Номер телефона</th>
										<th>ID пользователя</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noziron as $noziron)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $noziron->nomu_nasab }}</td>
											<td>{{ $noziron->soli_tavallud }}</td>
											<td>{{ $noziron->raghami_telefon }}</td>
											<td>{{ $noziron->user_id }}</td>

                                            <td>
                                                <form action="{{ route('noziron.destroy',$noziron->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('noziron.show',$noziron->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('noziron.edit',$noziron->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
{{--                {!! $noziron->links() !!}--}}
            </div>
        </div>
    </div>
@endsection
