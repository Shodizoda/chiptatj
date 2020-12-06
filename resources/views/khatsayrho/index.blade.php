@extends('layouts.app')

@section('template_title')
    Khatsayrho
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Машрути') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('khatsayrho.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Добавить новый') }}
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
										<th>От куда</th>
										<th>Куда</th>
										<th>Расстояние</th>
										<th>Время отправки</th>
										<th>
                                            Время прыбития</th>
										<th>Время возвращения</th>
										<th>Автобус Id</th>
										<th>Водитель Id</th>
										<th>Диспетчер Id</th>
										<th>Статус машрута</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($khatsayrho as $khatsayrho)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $khatsayrho->nom }}</td>
											<td>{{ $khatsayrho->az_kujo }}</td>
											<td>{{ $khatsayrho->ba_kujo }}</td>
											<td>{{ $khatsayrho->masofa }}</td>
											<td>{{ $khatsayrho->vaqti_raftan }}</td>
											<td>{{ $khatsayrho->vaqti_rasidan }}</td>
											<td>{{ $khatsayrho->vaqti_bargashtan }}</td>
											<td>{{ $khatsayrho->autobus_id }}</td>
											<td>{{ $khatsayrho->ronanda_id }}</td>
											<td>{{ $khatsayrho->nozir_id }}</td>
											<td>{{ $khatsayrho->khatsayr_status_id }}</td>

                                            <td>
                                                <form action="{{ route('khatsayrho.destroy',$khatsayrho->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('khatsayrho.show',$khatsayrho->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('khatsayrho.edit',$khatsayrho->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $khatsayrho->links() !!}
            </div>
        </div>
    </div>
@endsection
