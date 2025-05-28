<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'required|url|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'authors' => 'required|array|min:1',
            'authors.*' => 'integer|exists:authors,id',
            'genres' => 'required|array|min:1',
            'genres.*' => 'integer|exists:genres,id',
        ];
    }
}
