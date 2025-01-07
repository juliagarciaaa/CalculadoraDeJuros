@extends('layout')

@section('title', 'Calculadora de Juros Compostos')

@section('content')
    <h1 class="text-center">Calculadora de Empréstimo</h1>
    <form method="POST" action="{{ route('calcular') }}">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor do Empréstimo (R$)</label>
            <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="juros" class="form-label">Taxa de Juros (% ao mês)</label>
            <input type="number" class="form-control" id="juros" name="juros" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="parcelas" class="form-label">Quantidade de Parcelas</label>
            <input type="number" class="form-control" id="parcelas" name="parcelas" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
@endsection
