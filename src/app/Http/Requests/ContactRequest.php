<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'tel_1' => 'required|max:5|regex:/^[0-9]+$/',
            'tel_2' => 'required|max:5|regex:/^[0-9]+$/',
            'tel_3' => 'required|max:5|regex:/^[0-9]+$/',
            'address' => 'required',
            'category_id' => 'required',
            'detail' => 'required|max:120',
            'item_id' => 'required',
            'channels' => 'nullable|array',
            'channels.*' => 'exists:channels,id',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel_1.required' => '電話番号を入力してください',
            'tel_1.regex' => '電話番号は半角数字で入力してください',
            'tel_1.max' => '電話番号は5桁までの数字で入力してください',
            'tel_2.required' => '電話番号を入力してください',
            'tel_2.regex' => '電話番号は半角数字で入力してください',
            'tel_2.max' => '電話番号は5桁までの数字で入力してください',
            'tel_3.required' => '電話番号を入力してください',
            'tel_3.regex' => '電話番号は半角数字で入力してください',
            'tel_3.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせの内容を入力してください',
            'detail.max' => 'お問い合わせの内容は120文字以内で入力してください',
            'item_id.required' => '商品の種類を選択してください',
            'image_file.image' => 'アップロードされるファイルは画像ファイルのみです',
            'image_file.mimes' => '画像ファイルはjpeg, png, jpg, gif, svg形式のみ対応しています',
            'image_file.max' => '画像ファイルは2MB以下でアップロードしてください',
        ];
    }
}
