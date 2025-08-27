<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'project_id' => 'required',
            'title' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'due_date' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'project_id.required' => 'El campo proyecto es obligatorio',
            'title.required' => 'El campo titulo es obligatorio',
            'status.required' => 'El campo estado es obligatorio',
            'priority.required' => 'El campo prioridad es obligatorio',
            'due_date.required' => 'El campo fecha de vencimiento es obligatorio',
        ];
    }
}
