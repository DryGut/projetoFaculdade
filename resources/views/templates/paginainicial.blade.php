@extends('layouts.principal')
@section('conteudo')
<section id="bg" class="vh-100" style="background-image: url('Brasil.png');">
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="card text-center">
				<div class="card-header" style="background-color: yellow;">
					CST - Análise e Desenvolvimento de Sistemas
				</div>
				<div class="card-body" style="position: relative; top: 4rem;">
					<h5 class="card-title">Projeto Integrado III</h5>
					<p class="card-text">tarefa 2 do projeto</p>
					<a href="{{route('login')}}" onclick="alert('Realize o login para acessar esta área')" class="btn btn-primary">Ir para área de pesquisa</a>
				</div>
				<div id="calendario" class="card-footer" style="background-color: yellow;">
					<script>
						let data = new Date(Date.now());
						document.getElementById('calendario').innerHTML = 'Recife, ' + data.toLocaleString('default', {day:'numeric', month: 'long', year:'numeric'});
					</script>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
