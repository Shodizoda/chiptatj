@extends('layouts.app')

@section('template_title')
    Khatsayr Status
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Khatsayr Status') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('khatsayr-statuses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nom</th>
										<th>Rang</th>
										<th>Class</th>
										<th>Order</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($khatsayrStatuses as $khatsayrStatus)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $khatsayrStatus->nom }}</td>
											<td>{{ $khatsayrStatus->rang }}</td>
											<td>{{ $khatsayrStatus->class }}</td>
											<td>{{ $khatsayrStatus->order }}</td>

                                            <td>
                                                <form action="{{ route('khatsayr-statuses.destroy',$khatsayrStatus->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('khatsayr-statuses.show',$khatsayrStatus->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('khatsayr-statuses.edit',$khatsayrStatus->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $khatsayrStatuses->links() !!}
            </div>
        </div>
    </div>
@endsection
