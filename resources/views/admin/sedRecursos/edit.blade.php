@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sedRecurso.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sed-recursos.update", [$sedRecurso->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.sedRecurso.fields.area') }}</label>
                <select class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}" name="area" id="area" required>
                    <option value disabled {{ old('area', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\SedRecurso::AREA_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('area', $sedRecurso->area) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('area'))
                    <span class="text-danger">{{ $errors->first('area') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRecurso.fields.area_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="asignados">{{ trans('cruds.sedRecurso.fields.asignados') }}</label>
                <input class="form-control {{ $errors->has('asignados') ? 'is-invalid' : '' }}" type="number" name="asignados" id="asignados" value="{{ old('asignados', $sedRecurso->asignados) }}" step="0.01" required>
                @if($errors->has('asignados'))
                    <span class="text-danger">{{ $errors->first('asignados') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRecurso.fields.asignados_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ejecutados">{{ trans('cruds.sedRecurso.fields.ejecutados') }}</label>
                <input class="form-control {{ $errors->has('ejecutados') ? 'is-invalid' : '' }}" type="number" name="ejecutados" id="ejecutados" value="{{ old('ejecutados', $sedRecurso->ejecutados) }}" step="0.01" required>
                @if($errors->has('ejecutados'))
                    <span class="text-danger">{{ $errors->first('ejecutados') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRecurso.fields.ejecutados_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ejecucion">{{ trans('cruds.sedRecurso.fields.ejecucion') }}</label>
                <input class="form-control {{ $errors->has('ejecucion') ? 'is-invalid' : '' }}" type="number" name="ejecucion" id="ejecucion" value="{{ old('ejecucion', $sedRecurso->ejecucion) }}" step="0.01">
                @if($errors->has('ejecucion'))
                    <span class="text-danger">{{ $errors->first('ejecucion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRecurso.fields.ejecucion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="vigencia">{{ trans('cruds.sedRecurso.fields.vigencia') }}</label>
                <input class="form-control {{ $errors->has('vigencia') ? 'is-invalid' : '' }}" type="number" name="vigencia" id="vigencia" value="{{ old('vigencia', $sedRecurso->vigencia) }}" step="1" required>
                @if($errors->has('vigencia'))
                    <span class="text-danger">{{ $errors->first('vigencia') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.sedRecurso.fields.vigencia_helper') }}</span>
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