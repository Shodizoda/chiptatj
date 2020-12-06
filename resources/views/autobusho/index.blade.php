@extends('layouts.app')

@section('template_title')
    Autobusho
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Автобусы') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('autobusho.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Номер</th>
										<th>Модель</th>
										<th>Количество мест</th>
										<th>Организация</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autobusho as $autobusho)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $autobusho->raqam }}</td>
											<td>{{ $autobusho->model }}</td>
											<td>{{ $autobusho->joi_nishast }}</td>
											<td>{{ $autobusho->tashkilot_id }}</td>

                                            <td>
                                                <form action="{{ route('autobusho.destroy',$autobusho->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autobusho.show',$autobusho->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('autobusho.edit',$autobusho->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $autobusho->links() !!}
            </div>
        </div>
    </div>
@endsection
