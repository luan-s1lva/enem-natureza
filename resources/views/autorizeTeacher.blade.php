@extends('layouts.telas')
@section('css', '/css/autorizeTeacherStyle.css')
@section('content')
<header class="container text-center">
    <h1>Solicitações de Professores:</h1>
</header>

<main>
    @foreach($professores as $professor)
    <hr>
    <div class="container-fluid">
        <div id="campo" class="text-center ">
            <div>
                <p><b>Nome:</b> {{$professor->name}}</p>
            </div>
            <div>
                <p><b>Org:</b> {{$professor->org}}</p>
            </div>
            <div>
                <p><b>Lattes:</b> {{$professor->lattes}}</p>
            </div>
        </div>
        <form action="/validar/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$professor->id}}">
            <div class="text-center container">

                <button name="isValidado" value="1"><img class="icon img-fluid " src="/img/aprovar.png" alt="Icone retirado do: https://www.flaticon.com/br/"></button>

                <button name="isValidado" value="0"><img class="icon img-fluid " src="/img/recusado.png" alt="Icone retirado do: https://www.flaticon.com/br/"></button>

            </div>
        </form>
    </div>
    <hr>
    @endforeach
</main>


@endsection