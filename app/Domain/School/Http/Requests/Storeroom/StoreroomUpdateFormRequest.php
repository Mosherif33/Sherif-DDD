<?php

namespace App\Domain\School\Http\Requests\Storeroom;
use App\Domain\School\Http\Requests\Storeroom\StoreroomStoreFormRequest;

class StoreroomUpdateFormRequest extends StoreroomStoreFormRequest
{
    /**
     * Determine if the storeroom is authorized to make this request.
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
        // 'email'    => ['required','unique:storerooms,name,'.$this->route()->parameter('storeroom').',id'],
        ];

        return array_merge(parent::rules(), $rules);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return parent::attributes();
    }
}
