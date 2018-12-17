<?php
namespace app\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest {

    /**
     * Determine if the user is authorized
     * and has specific role of Owner to
     * make this request.
     *
     * @return bool
     */
    public function authorize() {
        return auth()->user()->hasRole('owner');
    }

    /**
     * Get the validation rules that apply to the
     * request.
     *
     * @return array
     */
    public function rules() {
        return ['name'        => 'required',
                'description' => 'required'];
    }

}