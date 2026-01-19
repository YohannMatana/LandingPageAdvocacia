<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Resend;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'mensagem' => 'required|string|max:5000',
        ]);

        try {
            // Inicializar Resend
            $resend = Resend::client(env('RESEND_API_KEY'));

            // Montar HTML do email
            $html = view('emails.contato', ['dados' => $validated])->render();

            // Enviar email via Resend
            $resend->emails->send([
                'from' => 'Contato Site <onboarding@resend.dev>',
                'to' => ['rodriguesantunes.adv@gmail.com'],
                'reply_to' => $validated['email'],
                'subject' => 'Novo Contato do Site - ' . $validated['nome'],
                'html' => $html
            ]);

            // Log para debug
            Log::info('Contato recebido:', $validated);

            return response()->json([
                'success' => true,
                'message' => 'Mensagem enviada com sucesso!'
            ]);

        } catch (\Exception $e) {
            Log::error('Erro ao enviar contato: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Erro ao enviar mensagem. Tente novamente.'
            ], 500);
        }
    }
}

