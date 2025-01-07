@extends('layout')

@section('content')
<div class="container py-5">
    <h1 class="text-center">Resultado do cálculo para {{ $nome }}</h1>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Parcela</th>
                    <th>Valor Atualizado (R$)</th>
                    <th>Valor da Parcela (R$)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dadosParcelas as $parcela)
                <tr>
                    <td>{{ $parcela['parcela'] }}</td>
                    <td>{{ number_format($parcela['valorAtualizado'], 2, ',', '.') }}</td>
                    <td>{{ number_format($parcela['parcelaValor'], 2, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p><strong>Total Pago:</strong> R$ {{ number_format($totalPago, 2, ',', '.') }}</p>

    <div class="mt-4 text-center">
        <button onclick="window.location.href='{{ route('home') }}';" class="btn btn-primary">Voltar</button>
    </div>
</div>
@endsection
