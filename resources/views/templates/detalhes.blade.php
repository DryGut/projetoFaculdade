@extends('layouts.principal')
@section('conteudo')

<div class="container">
    @foreach($estados as $localidade)
    <h1>Faculdades em: {{$localidade->estado}}</h1>
    <tr>
        <td>{{$localidade->nome}}</td>
        <td>{{$localidade->site}}</td>
    </tr>
    @endforeach
</div>
@endsection
