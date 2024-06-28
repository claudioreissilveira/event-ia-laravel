@extends('layouts.app')

@section('conteudo')
<style>
    .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        min-height: 50vh;
        padding: 2rem;
        margin: 1rem;
    }

    h2 {
        color: white;
    }

    .text-fk {
        font-size: 30px;
    }

    .a-button {
        text-decoration: none;
        background-color: #D9E400;
        padding: 1rem;
        margin: 1rem;
        color: black;
        font-weight: bold;
        border-radius: 15px;
        transition: 0.1s ease-in;
    }

    .a-button:hover {
        background-color: white;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .div_deg {
            padding: 1rem;
            margin: 0.5rem;
        }

        .text-fk {
            font-size: 24px;
        }

        .a-button {
            padding: 0.8rem;
            margin: 0.8rem;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .div_deg {
            padding: 0.5rem;
            margin: 0.25rem;
        }

        .text-fk {
            font-size: 20px;
        }

        .a-button {
            padding: 0.6rem;
            margin: 0.6rem;
            font-size: 12px;
        }
    }
</style>
<div class="div_deg">
    <h1 class="text-fk">Ola</h1>
    <h2 class="text-fk">Seja bem vindo ao nosso gerenciado de eventos.</h2>
    <a class="a-button" href="/eventos">Saiba Mais</a>
</div>
@endsection