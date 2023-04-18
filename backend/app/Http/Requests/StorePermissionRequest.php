<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePermissionRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Determine if the user is authorized to make this request.
     *  @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:1'
        ];
    }

    public function messages(): array
    {
        return [
            'permission.required' => 'A name is required .',
            'permission.min' => 'A name must be at least 3 characters .'
        ];
    }

    public function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(response()->json(
            $validator->errors()
            , 422));
    }

}
