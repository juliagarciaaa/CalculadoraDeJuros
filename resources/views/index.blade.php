@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center">Calculadora de Empréstimos</h1>
    <form method="POST" action="{{ route('calcular') }}">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor do Empréstimo</label>
            <input type="number" class="form-control" id="valor" name="valor" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="juros" class="form-label">Taxa de Juros (% ao mês)</label>
            <input type="number" class="form-control" id="juros" name="juros" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="parcelas" class="form-label">Número de Parcelas</label>
            <input type="number" class="form-control" id="parcelas" name="parcelas" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
@endsection
