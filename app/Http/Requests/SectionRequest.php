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
            'type' => "required|in:article,compaign,news,story",
            'title' => 'required:string|max:100',
            'title_en' => 'required:string|max:100',
            'content' => 'required:string|max:75000',
            'content_en' => 'required:string|max:7500',
            'visible' => "nullable|in:1,0",
            'image' => 'nullable|file|max:5000',
            'branch_id' => 'required|exists:branches,id',
            'keywords' => 'nullable|array',
            'keywords.*' => 'required|string|max:30',
        ];
    }
}
