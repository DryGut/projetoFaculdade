@extends('layouts.principal')
@section('conteudo')
<section class="intro">
	<div class="input-group">
		<input id="estado" type="search" class="form-control rounded" placeholder="Digite o nome do estado">
		<button id="btn" class="btn btn-primary" type="button">
			<i class="bi bi-search"></i>
		</button>
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