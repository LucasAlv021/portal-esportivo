<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContatoController extends Controller
{
    /**
     * Armazena os dados do formulário de contato.
     */
    public function enviar(Request $request)
    {
        // 1. Validar os dados recebidos do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'assunto' => 'required|string|max:255',
            'mensagem' => 'required|string',
            'esporte' => 'required|string',
        ]);

        // 2. Apenas registra em um log para confirmar que funcionou.
        Log::info('Novo relato recebido: ', $validatedData);

        // 3. Redirecionar de volta com uma mensagem de sucesso
        return back()->with('success', 'Seu relato foi enviado com sucesso! Agradecemos o seu contato.');
    }
}
