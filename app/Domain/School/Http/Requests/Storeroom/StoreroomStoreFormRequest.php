<?php

namespace App\Domain\School\Http\Requests\Storeroom;

use App\Infrastructure\Http\AbstractRequests\BaseRequest as FormRequest;

class StoreroomStoreFormRequest extends FormRequest
{
    /**
     * Determine if the Storeroom is authorized to make this request.
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
    public function rules()
    {
        $rules = [
            'name'        => ['required', 'string', 'max:255'],
        ];
        return $rules;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'        =>  __('main.name'),
        ];
    }
}
