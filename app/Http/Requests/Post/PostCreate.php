<?php

namespace App\Http\Requests\Post;

use App\Http\Enum\PostStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class PostCreate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'min:3|required',
            'body'=>'required|min:5',
            'slug'=>'unique:posts,slug',
            'status'=>[new Enum(PostStatus::class)],
        ];
    }
}
