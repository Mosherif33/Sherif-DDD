<?php

namespace App\Domain\School\Http\Requests\Room;
use App\Domain\School\Http\Requests\Room\RoomStoreFormRequest;

class RoomUpdateFormRequest extends RoomStoreFormRequest
{
    /**
     * Determine if the room is authorized to make this request.
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
        // 'email'    => ['required','unique:rooms,name,'.$this->route()->parameter('room').',id'],
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
