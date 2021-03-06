<?php

namespace App\Http\Requests;

use App\Models\ReportesSgen;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateReportesSgenRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('reportes_sgen_edit');
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
