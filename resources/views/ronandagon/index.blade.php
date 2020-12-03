@extends('layouts.app')

@section('template_title')
    Ronandagon
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ronandagon') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ronandagon.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>

										<th>Nomu Nasab</th>
										<th>Soli Tavallud</th>
										<th>Hujati Ronandagi</th>
										<th>Raghami Telefon</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ronandagon as $ronandagon)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $ronandagon->nomu_nasab }}</td>
											<td>{{ $ronandagon->soli_tavallud }}</td>
											<td>{{ $ronandagon->hujati_ronandagi }}</td>
											<td>{{ $ronandagon->raghami_telefon }}</td>

                                            <td>
                                                <form action="{{ route('ronandagon.destroy',$ronandagon->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ronandagon.show',$ronandagon->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ronandagon.edit',$ronandagon->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ronandagon->links() !!}
            </div>
        </div>
    </div>
@endsection
