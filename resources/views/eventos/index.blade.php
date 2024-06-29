@extends('layouts.app')

@section('conteudo')
<style>
    .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 2rem;
        margin: 1rem;
    }

    h2 {
        color: white;
    }

    p {
        margin-top: 1rem;
        font-size: 25px;
        font-weight: bold;
        color: #D9E400;
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

    .animated-button {
        position: relative;
        display: inline-block;
        text-decoration: none;
        padding: 12px 24px;
        border: none;
        font-size: 16px;
        margin-top: 1rem;
        background-color: inherit;
        border-radius: 100px;
        font-weight: 600;
        color: #ffffff40;
        box-shadow: 0 0 0 2px #ffffff20;
        cursor: pointer;
        overflow: hidden;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .animated-button span:last-child {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        background-color: #D9E400;
        border-radius: 50%;
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .animated-button span:first-child {
        position: relative;
        z-index: 1;
    }

    .animated-button:hover {
        box-shadow: 0 0 0 5px #D9E400;
        color: #ffffff;
    }

    .animated-button:active {
        scale: 0.95;
    }

    .animated-button:hover span:last-child {
        width: 150px;
        height: 150px;
        opacity: 1;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        text-align: center;
    }

    table td {
        background-color: black;
        color: #D9E400;
    }

    table th,
    table td {
        border: 2px solid #ddd;
        color: white;
        padding: 20px;
    }

    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        font-size: 20px;
        text-align: center;
        background-color: black;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: black;
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

        .animated-button {
            padding: 10px 20px;
            font-size: 14px;
        }

        td {
            width: 250px;
            margin-left: 10px;
        }

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        thead tr {
            display: none;
        }

        tbody tr {
            margin-bottom: 15px;
        }

        tbody td {
            border: none;
            position: relative;
            padding-left: 50%;
            text-align: left;
        }

        tbody td:before {
            position: absolute;
            top: 50%;
            left: 10px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            transform: translateY(-50%);
            font-weight: bold;
            text-align: left;
        }

        tbody td:nth-of-type(1):before {
            content: "Nome";
        }

        tbody td:nth-of-type(2):before {
            content: "Descrição";
        }

        tbody td:nth-of-type(3):before {
            content: "Tipo";
        }

        tbody td:nth-of-type(4):before {
            content: "Local";
        }

        tbody td:nth-of-type(5):before {
            content: "Data";
        }

        tbody td:nth-of-type(6):before {
            content: "Editar";
        }

        tbody td:nth-of-type(7):before {
            content: "Deletar";
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

        .animated-button {
            padding: 8px 16px;
            font-size: 12px;
        }

        td {
            width: 250px;
            margin-left: 10px;
        }


        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        thead tr {
            display: none;
        }

        tbody tr {
            margin-bottom: 15px;

        }

        tbody td {
            border: none;
            position: relative;
            padding-left: 50%;
            text-align: left;
        }

        tbody td:before {
            position: absolute;
            top: 50%;
            left: 10px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            transform: translateY(-50%);
            font-weight: bold;
            text-align: left;
        }


        tbody td:nth-of-type(1):before {
            content: "Nome";
        }

        tbody td:nth-of-type(2):before {
            content: "Descrição";
        }

        tbody td:nth-of-type(3):before {
            content: "Tipo";
        }

        tbody td:nth-of-type(4):before {
            content: "Local";
        }

        tbody td:nth-of-type(6):before {
            content: "Editar";
        }

        tbody td:nth-of-type(7):before {
            content: "Deletar";
        }
    }

    button {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0.5em;
        border: 0px solid transparent;
        background-color: #D9E400;
        border-radius: 1.25em;
        cursor: pointer;
        transition: 0.2s ease-in;
    }

    button:hover {
        background-color: white;
    }

    .Btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100px;
        height: 40px;
        border: none;
        padding: 0px 20px;
        background-color: #D9E400;
        color: black;
        font-weight: 500;
        text-decoration: none;
        cursor: pointer;
        border-radius: 10px;
        transition-duration: .3s;
    }

    .Btn:hover {
        background-color: white;
    }

    .svg {
        width: 13px;
        position: absolute;
        right: 0;
        margin-right: 20px;
        fill: white;
        transition-duration: .3s;
    }

    .Btn:hover {
        color: transparent;
    }

    .Btn:hover svg {
        right: 43%;
        margin: 0;
        padding: 0;
        border: none;
        transition-duration: .3s;
    }

    .Btn:active {
        transform: translate(3px, 3px);
        transition-duration: .3s;
        box-shadow: 2px 2px 0px rgb(140, 32, 212);
    }


    .tooltip {
        position: relative;
        display: inline-block;
    }
</style>
<div class="div_deg">
    <h1>Eventos</h1>
    <a class="animated-button" href="{{ route('eventos.create') }}">Criar
        <span></span>
    </a>

    @if ($eventos->count())
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Tipo</th>
                <th>Local</th>
                <th>Data</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
            <tr>
                <td>{{ $evento->nome }}</td>
                <td>{{ $evento->descricao }}</td>
                <td>{{ $evento->tipo }}</td>
                <td>{{ $evento->local }}</td>
                <td>{{ $evento->data }}</td>
                <td>
                    <a class="Btn" href="{{ route('eventos.edit', $evento->id) }}">Editar
                        <svg class="svg" viewBox="0 0 512 512">
                            <path fill="black" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                        </svg>
                    </a>
                </td>
                <td>
                    <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="30" width="30">
                                <path fill="black" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Nenhum evento encontrado.</p>
    @endif
</div>
@endsection