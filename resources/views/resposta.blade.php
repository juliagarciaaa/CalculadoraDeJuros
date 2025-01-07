@extends('layout')

@section('title', 'Resultado do Cálculo')

@section('content')
    <h1 class="text-center">Resultado para {{ $nome }}</h1>
    <ul>
        @foreach ($detalhes as $detalhe)
            <li>{{ $detalhe }}</li>
        @endforeach
    </ul>
    <h3>Total pago: R$ {{ number_format($totalPago, 2, ',', '.') }}</h3>
    <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
@endsection
