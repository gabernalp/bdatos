@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sedCalificacionDocente.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sed-calificacion-docentes.update", [$sedCalificacionDocente->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="dane">{{ trans('cruds.sedCalificacionDocente.fields.dane') }}</label>
                <input class="form-control {{ $errors->has('dane') ? 'is-invalid' : '' }}" type="text" name="dane" id="dane" value="{{ old('dane', $sedCalificacionDocente->dane) }}" required>
                @if($errors->has('dane'))
                    <span class="text-danger">{{ $errors->first('dane') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.dane_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="institucion_id">{{ trans('cruds.sedCalificacionDocente.fields.institucion') }}</label>
                <select class="form-control select2 {{ $errors->has('institucion') ? 'is-invalid' : '' }}" name="institucion_id" id="institucion_id" required>
                    @foreach($institucions as $id => $entry)
                        <option value="{{ $id }}" {{ (old('institucion_id') ? old('institucion_id') : $sedCalificacionDocente->institucion->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('institucion'))
                    <span class="text-danger">{{ $errors->first('institucion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.institucion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="sede_id">{{ trans('cruds.sedCalificacionDocente.fields.sede') }}</label>
                <select class="form-control select2 {{ $errors->has('sede') ? 'is-invalid' : '' }}" name="sede_id" id="sede_id" required>
                    @foreach($sedes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('sede_id') ? old('sede_id') : $sedCalificacionDocente->sede->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('sede'))
                    <span class="text-danger">{{ $errors->first('sede') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.sede_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.sedCalificacionDocente.fields.zona') }}</label>
                <select class="form-control {{ $errors->has('zona') ? 'is-invalid' : '' }}" name="zona" id="zona" required>
                    <option value disabled {{ old('zona', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\SedCalificacionDocente::ZONA_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('zona', $sedCalificacionDocente->zona) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('zona'))
                    <span class="text-danger">{{ $errors->first('zona') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.zona_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="comuna_id">{{ trans('cruds.sedCalificacionDocente.fields.comuna') }}</label>
                <select class="form-control select2 {{ $errors->has('comuna') ? 'is-invalid' : '' }}" name="comuna_id" id="comuna_id" required>
                    @foreach($comunas as $id => $entry)
                        <option value="{{ $id }}" {{ (old('comuna_id') ? old('comuna_id') : $sedCalificacionDocente->comuna->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('comuna'))
                    <span class="text-danger">{{ $errors->first('comuna') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.comuna_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cargo">{{ trans('cruds.sedCalificacionDocente.fields.cargo') }}</label>
                <input class="form-control {{ $errors->has('cargo') ? 'is-invalid' : '' }}" type="text" name="cargo" id="cargo" value="{{ old('cargo', $sedCalificacionDocente->cargo) }}" required>
                @if($errors->has('cargo'))
                    <span class="text-danger">{{ $errors->first('cargo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.cargo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="area">{{ trans('cruds.sedCalificacionDocente.fields.area') }}</label>
                <input class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}" type="text" name="area" id="area" value="{{ old('area', $sedCalificacionDocente->area) }}" required>
                @if($errors->has('area'))
                    <span class="text-danger">{{ $errors->first('area') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.area_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="calificacion">{{ trans('cruds.sedCalificacionDocente.fields.calificacion') }}</label>
                <input class="form-control {{ $errors->has('calificacion') ? 'is-invalid' : '' }}" type="number" name="calificacion" id="calificacion" value="{{ old('calificacion', $sedCalificacionDocente->calificacion) }}" step="0.01" required>
                @if($errors->has('calificacion'))
                    <span class="text-danger">{{ $errors->first('calificacion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.calificacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="valoracion">{{ trans('cruds.sedCalificacionDocente.fields.valoracion') }}</label>
                <input class="form-control {{ $errors->has('valoracion') ? 'is-invalid' : '' }}" type="text" name="valoracion" id="valoracion" value="{{ old('valoracion', $sedCalificacionDocente->valoracion) }}" required>
                @if($errors->has('valoracion'))
                    <span class="text-danger">{{ $errors->first('valoracion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.valoracion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="vigencia">{{ trans('cruds.sedCalificacionDocente.fields.vigencia') }}</label>
                <input class="form-control {{ $errors->has('vigencia') ? 'is-invalid' : '' }}" type="number" name="vigencia" id="vigencia" value="{{ old('vigencia', $sedCalificacionDocente->vigencia) }}" step="1" required>
                @if($errors->has('vigencia'))
                    <span class="text-danger">{{ $errors->first('vigencia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedCalificacionDocente.fields.vigencia_helper') }}</span>
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