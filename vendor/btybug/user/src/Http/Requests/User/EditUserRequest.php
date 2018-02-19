<?php
/**
 * Created by PhpStorm.
 * User: Ara Arakelyan
 * Date: 7/20/2017
 * Time: 4:28 PM
 */

namespace Btybug\User\Http\Requests\User;

use Btybug\btybug\Http\Requests\Request;

class EditUserRequest extends Request
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
    public function rules()
    {
        $id = auth()->user()->id;
        return [
            'username' => 'nullable|max:255|unique:users,username,' . $id, ',id',
            'email' => 'nullable|email|max:255|unique:users,email,' . $id, ',id'
        ];
    }

}