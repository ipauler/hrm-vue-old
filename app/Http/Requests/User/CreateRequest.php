<?php
namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest {
    /**
     * Determine if the user is authorized to
     * make this request.
     *
     * @return bool
     */
    public function authorize () {
        return auth()->user()->can( 'user-create' );
    }

    /**
     * Get the validation rules that apply to the
     * request.
     *
     * @return array
     */
    public function rules () {
        return [ 'name'                  => 'required',
                 'email'                 => 'required|email',
                 'password'              => 'required|min:5|confirmed',
                 'password_confirmation' => 'required|min:5' ];
    }
}