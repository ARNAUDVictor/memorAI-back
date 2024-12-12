<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Importation de la façade Log

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Affiche le message dans le log
        Log::info('Message reçu: ' . $request->message);

        // Retourne une réponse JSON
        return response()->json(['success' => true, 'message' => $request->message]);
    }
}
