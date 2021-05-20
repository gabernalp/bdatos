@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.sedParticipacionArtistum.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sed-participacion-artista.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nombre_artista">{{ trans('cruds.sedParticipacionArtistum.fields.nombre_artista') }}</label>
                <input class="form-control {{ $errors->has('nombre_artista') ? 'is-invalid' : '' }}" type="text" name="nombre_artista" id="nombre_artista" value="{{ old('nombre_artista', '') }}" required>
                @if($errors->has('nombre_artista'))
                    <span class="text-danger">{{ $errors->first('nombre_artista') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedParticipacionArtistum.fields.nombre_artista_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nombre_festival">{{ trans('cruds.sedParticipacionArtistum.fields.nombre_festival') }}</label>
                <input class="form-control {{ $errors->has('nombre_festival') ? 'is-invalid' : '' }}" type="text" name="nombre_festival" id="nombre_festival" value="{{ old('nombre_festival', '') }}" required>
                @if($errors->has('nombre_festival'))
                    <span class="text-danger">{{ $errors->first('nombre_festival') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedParticipacionArtistum.fields.nombre_festival_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fecha_inicial">{{ trans('cruds.sedParticipacionArtistum.fields.fecha_inicial') }}</label>
                <input class="form-control date {{ $errors->has('fecha_inicial') ? 'is-invalid' : '' }}" type="text" name="fecha_inicial" id="fecha_inicial" value="{{ old('fecha_inicial') }}">
                @if($errors->has('fecha_inicial'))
                    <span class="text-danger">{{ $errors->first('fecha_inicial') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedParticipacionArtistum.fields.fecha_inicial_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fecha_final">{{ trans('cruds.sedParticipacionArtistum.fields.fecha_final') }}</label>
                <input class="form-control date {{ $errors->has('fecha_final') ? 'is-invalid' : '' }}" type="text" name="fecha_final" id="fecha_final" value="{{ old('fecha_final') }}">
                @if($errors->has('fecha_final'))
                    <span class="text-danger">{{ $errors->first('fecha_final') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedParticipacionArtistum.fields.fecha_final_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection