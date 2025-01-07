<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function calcular(Request $request)
    {
        $nome = $request->input('nome');
        $valor = (float) $request->input('valor');
        $juros = (float) $request->input('juros') / 100;
        $parcelas = (int) $request->input('parcelas');

        $detalhes = [];
        $totalPago = 0;

        for ($i = 1; $i <= $parcelas; $i++) {
            $valor = $valor * (1 + $juros); // Atualiza valor com juros
            $parcela = $valor / $parcelas;
            $detalhes[] = "Parcela $i - Valor atualizado: R$ " . number_format($valor, 2, ',', '.') .
                          " - parcela: R$ " . number_format($parcela, 2, ',', '.');
            $totalPago += $parcela;
        }

        return view('resposta', compact('nome', 'detalhes', 'totalPago'));
    }
}
