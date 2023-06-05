<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class crimeReportFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "state" => "required|alpha",
            "local_govt" => "required|alpha",
            "street_address" => "required|alpha_num",
            "comment" => "required|max:500",
            "file_path" => "",
        ];
    }
}
