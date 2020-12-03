@extends('layouts.app')

@section('template_title')
    Билеты
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Билеты
                            </span>

                             <div class="float-right">
                                <a href="{{ route('chiptaho.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Регистрация
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
										<th>Стоимость</th>
										<th>Место посажира</th>
										<th>ФИО - посажира</th>
										<th>Дата покупки</th>
										<th>Паспорт</th>
										<th>Машрут</th>
										<th>Статус</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chiptaho as $chiptaho)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $chiptaho->narkh }}</td>
											<td>{{ $chiptaho->joi_nishast }}</td>
											<td>{{ $chiptaho->nomu_nasab }}</td>
											<td>{{ $chiptaho->vagti_kharid }}</td>
											<td>{{ $chiptaho->raqami_shinosnoma }}</td>
											<td>{{ $chiptaho->khatsayr_id }}</td>
											<td>{{ $chiptaho->chipta_status_id }}</td>

                                            <td>
                                                <form action="{{ route('chiptaho.destroy',$chiptaho->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('chiptaho.show',$chiptaho->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('chiptaho.edit',$chiptaho->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $chiptaho->links() !!}
            </div>
        </div>
    </div>
@endsection
