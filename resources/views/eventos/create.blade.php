@extends('layouts.app')

@section('conteudo')
<style>
    .div_deg {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 1rem;
    }

    .container-form {
        width: 370px;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        border-radius: 3px;
        border: 1px solid #D9E400;
        background: linear-gradient(to right, #005c97, #363795);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .container form .descr {
        font-size: 20px;
        font-weight: 500;
        color: #e8e8e8;
        margin-bottom: 25px;
        margin-top: 25px;
        text-align: center;
    }

    .form {
        display: flex;
        flex-direction: column;
    }

    .input,
    textarea {
        margin: 1em 0 1em 0;
        width: 300px;
        position: relative;
    }

    .input input,
    textarea {
        font-size: 100%;
        padding: 0.7em;
        outline: none;
        color: #e8e8e8;
        border: none;
        border-bottom: 2px solid #e8e8e8;
        background: transparent;
        border-radius: none;
        width: 100%;
        resize: none;
    }

    .input label {
        font-size: 100%;
        position: absolute;
        left: 0;
        color: #e8e8e8;
        padding: 0.7em;
        margin-left: 0.1em;
        pointer-events: none;
        transition: all 0.5s ease;
        text-transform: uppercase;
    }

    .input :is(input:focus, input:valid)~label {
        transform: translateY(-50%) scale(.9);
        margin: 0em;
        padding: 0.4em;
        background: transparent;
    }

    .input textarea:focus~label,
    .input textarea:valid~label {
        transform: translateY(-50%) scale(.9);
        margin: 0em;
        padding: 0.4em;
        background: transparent;
    }

    .inputGroup :is(input:focus, input:valid) {
        border-color: rgb(37, 37, 211);
    }

    .form button {
        color: #e8e8e8;
        font-size: 15px;
        align-self: flex-start;
        padding: 0.6em;
        border: none;
        cursor: pointer;
        margin-bottom: 50px;
        background: transparent;
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .form button:before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #e8e8e8;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .form button:hover:before {
        opacity: 0.2;
    }

    .form button:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="container-form">
    <form class="form" action="{{ route('eventos.store') }}" method="POST">
        @csrf
        <div class="descr">Criar Evento</div>
        <div class="input">
            <input placeholder="Nome" type="text" id="nome" name="nome" required>
        </div>

        <div class="input">
            <input placeholder="Descrição" type="text" id="descricao" name="descricao" required>
        </div>

        <div class="input">
            <input placeholder="Tipo" type="text" id="tipo" name="tipo" required>
        </div>

        <div class="input">
            <input placeholder="Local" type="text" id="local" name="local" required>
        </div>

        <div class="input">
            <input placeholder="Data" type="date" id="data" name="data" required>
        </div>
        <button type="submit">Criar →</button>
    </form>
</div>

@endsection