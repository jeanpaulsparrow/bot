<?php

namespace App\Http\Requests;

use App\Models\Bot;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBotRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('bot_edit');
    }

    public function rules()
    {
        return [
            'nome' => [
                'string',
                'max:255',
                'required',
            ],
        ];
    }
}
