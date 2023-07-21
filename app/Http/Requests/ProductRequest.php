<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [];
        $currenAction = $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'POST':
                switch ($currenAction) {
                    case 'create':
                        $rules = [
                            'name' => 'required',
                        ];
                        break;
                    default:
                        # code...
                        break;
                }
                break;
            case 'label':
                # code...
                break;
            default:
                # code...
                break;
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Phải nhập tên sản phẩm',
        ];
    }
}
