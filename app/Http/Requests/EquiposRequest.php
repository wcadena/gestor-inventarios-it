<?php

namespace App\Http\Requests;

use App\Empresa;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class EquiposRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public $empresa_procede1;

    public function rules(Request $request)
    {
        if ($this->method() == 'PATCH') {
            // Update operation, exclude the record with id from the validation:
            $no_serie_rule = 'required|unique:equipos,no_serie,'.$request->segment(2);
        } else {
            // Create operation. There is no id yet.
            $no_serie_rule = 'required|unique:equipos,no_serie,|max:250';
        }

        //dd($this->method());
        return [
            'area_id'           => 'required',
            'observaciones'     => 'required',
            'descripcion'       => 'required',
            'no_serie'          => 'required',
            'codigo_avianca'    => 'required|unique:equipos,codigo_avianca|max:250'.$this->get('id'),
            'no_serie'          => $no_serie_rule,
            //'check_list_id' => 'required|unique:equipos,check_list_id|max:250',
            'empresa_procede1' => [function ($attribute, $value, $fail) {
                if (strlen($value) < 1) {
                    $fail(':attribute No puede ser vacio');
                }

                /*$empresa = Empresa::all();
                foreach ($empresa as $e){
                    if(!preg_match($e->formula_codigo,$value))
                    {
                        $fail(':attribute No cumple con estructura de codigo de empresa!('.$e->empresa.';'.$e->formula_codigo.')');
                    }
                }*/
            }],
            'codigo_avianca' => [function ($attribute, $value, $fail) use ($request) {
                /*if ($value <= 10) {
                    $fail(':attribute needs more cowbell!');
                }*/
                $empresa = Empresa::where('empresa', '=', $request->empresa_procede1)->first();

                if ($empresa->formula_codigo != '' && !preg_match($empresa->formula_codigo, $value)) {
                    $fail(':attribute NO cumple con estructura de codigo de empresa!('.$empresa->formula_codigo.')');
                }
            }],

        ];
    }
}
