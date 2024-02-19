@extends('layouts.app')

@section('template_title')
    Archivo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Archivo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('archivos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Autor</th>
										<th>Tema</th>
										<th>Recurso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archivos as $archivo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $archivo->autor }}</td>
											<td>{{ $archivo->tema }}</td>
											<td>{{ $archivo->recurso }}</td>

                                            <td>
                                                <form action="{{ route('archivos.destroy',$archivo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('archivos.show',$archivo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('archivos.edit',$archivo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $archivos->links() !!}
            </div>
        </div>
    </div>
@endsection
