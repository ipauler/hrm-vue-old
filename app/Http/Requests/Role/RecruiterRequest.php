<?php
namespace app\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class RecruiterRequest extends FormRequest {

    /**
     * Determine if the user is authorized
     * and has specific role of Recruiter to
     * make this request.
     *
     * @return bool
     */
    public function authorize() {
        return auth()->user()->hasRole('recruiter');
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