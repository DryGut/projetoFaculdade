@extends('layouts.principal')
@section('conteudo')
<section class="intro">
    <div>
        <img src="mapabrasil.jpg">
        <div class="estado-item">
            <a id="pe" href="{{url('mostra/Pernambuco')}}">PE</a> 
            <a id="sp" href="{{url('/mostra/Sao Paulo')}}">SP</a>
            <a id="rj" href="{{url('/mostra/Rio de Janeiro')}}">RJ</a>
            <a id="ba" href="{{url('/mostra/Bahia')}}">BA</a>
            <a id="pb" href="{{url('/mostra/Paraiba')}}">PB</a>
            <a id="ce" href="{{url('/mostra/Ceara')}}">CE</a>
            <a id="rs" href="{{url('/mostra/Rio Grande do Sul')}}">RS</a>
            <a id="rn" href="{{url('/mostra/Rio Grande do Norte')}}">RN</a>
            <a id="pr" href="{{url('/mostra/Parana')}}">PR</a>
            <a id="ac" href="{{url('/mostra/Acre')}}">AC</a>
            <a id="rr" href="{{url('/mostra/Roraima')}}">RR</a>
            <a id="ms" href="{{url('/mostra/Mato Grosso do Sul')}}">MS</a>
            <a id="mt" href="{{url('/mostra/Mato Grosso')}}">MT</a>
            <a id="pi" href="{{url('/mostra/Piaui')}}">PI</a>
            <a id="mg" href="{{url('/mostra/Minas Gerais')}}">MG</a>
            <a id="go" href="{{url('/mostra/Goias')}}">GO</a>
            <a id="am" href="{{url('/mostra/Amazonas')}}">AM</a>
            <a id="es" href="{{url('/mostra/Espirito Santo')}}">ES</a>
            <a id="al" href="{{url('/mostra/Alagoas')}}">AL</a>
            <a id="ap" href="{{url('/mostra/Amapa')}}">AP</a>
            <a id="ma" href="{{url('/mostra/Maranhao')}}">MA</a>
            <a id="pa" href="{{url('/mostra/Para')}}">PA</a>
            <a id="ro" href="{{url('/mostra/Rondonia')}}">RO</a>
            <a id="sc" href="{{url('/mostra/Santa Catarina')}}">SC</a>
            <a id="se" href="{{url('/mostra/Sergipe')}}">SE</a>
            <a id="to" href="{{url('/mostra/Tocantins')}}">TO</a>
            <a id="df" href="{{url('/mostra/Distrito Federal')}}">DF</a>
        </div>
    </div>
    <div class="bg-image h-100" style="background-color: #f5f7fa;">
        <div class="mask d-flex align-items-center h-100">
            <div id="c-busca" class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px;">
                            <table id="tabela" style="display: none" class="table table-hover mb-0">
                                <thead style="background-color: #2f33a7; color: white;">
                                    <tr class="text-uppercase text-info">
                                        <th scope="col">Nome</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Site</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
