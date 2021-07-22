<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
        return [
            //
            'last' => 'required', 
            'first'  => 'required', 
            'email'  => 'required', 
            'tel'  => 'required|max:11', 
            'content'  => 'required|max:100', 
            
        ];
    }

    public function messages()
    {
        return [
            'last.required' => '名字は必ず入力して下さい。',
            'first.required' => '名前は必ず入力して下さい。',
            'email.required'  => 'メールアドレスは必ず記入して下さい。',
            'tel.required' => '電話番号は必ず記入して下さい。',
            'tel.max' => '電話番号は11文字以下で入力してください。ハイフンは抜いて下さい',
            'content.required' => 'お問い合わせ内容は必ず記入して下さい。',
            'content.max' => 'お問い合わせ内容は100文字以下で入力してください。',
        ];
    }
}
