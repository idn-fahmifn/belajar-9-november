<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class BarangRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_barang' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:30'],
            'brand' => ['required', 'string', 'min:3', 'max:30'],
            'harga' => ['required', 'numeric', 'min:100', 'max:999999999'],
        ];
    }

    public function messages()
    {
        return [
            'nama_barang.required' => 'Nama barang wajib diisi',
            'nama_barang.string' => 'Nama barang wajib berbentuk karakter',
            'nama_barang.regex' => 'Format tidak didukung',
            'nama_barang.min' => 'Nama barang minimal 3 karakter',
            'nama_barang.max' => 'Nama barang maksimal 30 karakter',

            'brand.required' => 'Brand wajib diisi',
            'brand.string' => 'Brand wajib berbentuk karakter',
            'brand.min' => 'Brand minimal 3 karakter',
            'brand.max' => 'Brand maksimal 30 karakter',

            'harga.required' => 'Harga wajib diisi',
            'harga.numeric' => 'Harga wajib berbentuk angka, contoh 100000',
            'harga.min' => 'Harga minimal 100',
            'harga.max' => 'Harga maksimal 999999999',
        ];
    }
}
