@extends('layouts.app')

@section('template_title')
    {{ $archivo->name ?? "{{ __('Show') Archivo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Archivo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('archivos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $archivo->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Tema:</strong>
                            {{ $archivo->tema }}
                        </div>
                        <div class="form-group">
                            <strong>Recurso:</strong>
                            {{ $archivo->recurso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
