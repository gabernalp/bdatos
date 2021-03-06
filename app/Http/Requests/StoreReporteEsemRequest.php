<?php

namespace App\Http\Requests;

use App\Models\ReporteEsem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreReporteEsemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('reporte_esem_create');
    }

    public function rules()
    {
        return [
            'nombre' => [
                'string',
                'required',
            ],
            'fecha' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
