<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuku extends FormRequest
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
            'txtnama'=>'required|unique:buku,nama',
            'txtjenis'=>'required',
            'txtpenerbit'=>'required',
            'txttahun'=>'required|numeric',
        ];
    }
    public function messages():array
    {
        return[
            'txtnama.unique'=>':attribute Data Sudah Ada',
            'txtnama.required'=>':attribute Tidak Boleh Kosong',
            'txtjenis.required'=>':attribute Tidak Boleh Kosong',
            'txtpenerbit.required'=>':attribute Tidak Boleh Kosong',
            'txttahun.required'=>':attribute Tidak Boleh Kosong'
        ];
    }

    public function attributes():array
    {
        return[
            'txtnama'=>'Nama Buku',
            'txtjenis'=>'Jenis Buku',
            'txtpenerbit'=>'Penerbit Buku',
            'txttahun'=>'Tahun Buku',
            
        ];
    }
}
