<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [            
            'title_ar' => 'required:string|max:100',
            'title_en' => 'required:string|max:100',
            'content_ar' => 'required',
            'content_en' => 'required',
            'summary-length' => 'nullable|int',
            'date' =>'nullable|date',
            'hidden' => "nullable|in:1,0",
            'image_id' => 'nullable|file|max:5000',
            'province_id' => 'nullable|exists:provinces,id',
            'doings' => 'nullable|array',
        ];
    }
}
