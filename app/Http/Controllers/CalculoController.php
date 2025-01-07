<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function calcular(Request $request)
    {
        // Receber os dados do formulário
        $nome = $request->input('nome'); // Nome do usuário
        $valor = (float) $request->input('valor'); // Valor do empréstimo
        $juros = (float) $request->input('juros') / 100; // Taxa de juros
        $parcelas = (int) $request->input('parcelas'); // Número de parcelas

        // Inicializar os dados
        $dadosParcelas = [];
        $totalPago = 0;
        $valorAtualizado = $valor;

        for ($i = 1; $i <= $parcelas; $i++) {
            // Calcular o valor atualizado e a parcela
            $valorAtualizado *= (1 + $juros);
            $parcelaValor = $valorAtualizado / $parcelas;

            // Armazenar os dados da parcela
            $dadosParcelas[] = [
                'parcela' => $i,
                'valorAtualizado' => $valorAtualizado,
                'parcelaValor' => $parcelaValor,
            ];

            // Incrementar o total pago
            $totalPago += $parcelaValor;
        }

        // Enviar os dados para a view
        return view('resposta', compact('nome', 'dadosParcelas', 'totalPago'));
    }
}
