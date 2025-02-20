<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderMissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change if you have authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'dateDebut' => 'required|date|before_or_equal:dateFin',
            'dateArriver' => 'nullable|date|after_or_equal:dateDebut',
            'dateFin' => 'required|date|after_or_equal:dateDebut',
            'destination' => 'required|string|max:255',
            'objectif' => 'required|string|max:500',
            'idUtilisateur' => 'required|exists:users,id',
            'etatRemboursement' => 'nullable|boolean',
            'file_path' => 'required|file|mimes:pdf,doc,docx|max:2048'

        ];
    }

    /**
     * Custom error messages (Optional)
     */
    public function messages(): array
    {
        return [
            'dateDebut.required' => 'La date de début est obligatoire.',
            'dateDebut.date' => 'La date de début doit être une date valide.',
            'dateArriver.date' => 'La date d’arrivée doit être une date valide.',
            'dateArriver.after_or_equal' => 'La date d’arrivée doit être égale ou postérieure à la date de début.',
            'dateFin.required' => 'La date de fin est obligatoire.',
            'dateFin.date' => 'La date de fin doit être une date valide.',
            'dateFin.after_or_equal' => 'La date de fin doit être égale ou postérieure à la date de début.',
            'destination.required' => 'La destination est obligatoire.',
            'objectif.required' => 'L\'objectif est obligatoire.',
            'idUtilisateur.required' => 'L’utilisateur est requis.',
            'idUtilisateur.exists' => 'L’utilisateur sélectionné est invalide.',
            'file_path.required' => 'Le fichier est obligatoire.'
        ];
    }
}
