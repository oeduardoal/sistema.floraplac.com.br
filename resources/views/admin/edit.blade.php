<div class="panel panel-white" data-widget='{"draggable": "false"}'>
	<div class="panel-heading">
		<h2>Formulário</h2>
	</div>

	<div class="panel-body">
		
		
	@foreach($representante as $key)
		<form class="grid-form" method="POST" action="{{ url('/representantes/' . $key->id . '/update' ) }}">
			<fieldset>
			@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
		<div class="alert alert-danger">
            {{ $error }}
		</div>
    @endforeach
@endif
				<legend>
					Editando dados para {{ @$key->empresa }}
				</legend>
				<div data-row-span="4">
				{{ csrf_field() }}
					<div data-field-span="1" style="height: 61px;">
						<label>Cidade</label>
						<input type="text" name="cidade" value="{{ @$key->cidade }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Estado</label>
						<select name="estado" class="form-control" style="padding: 0px;" id="">
							<option value="{{ $key->estado }}">Selecione uma opção</option>
							@foreach($estates as $chave => $value )
								<option value="{{ $chave }}">{{ $value }}</option>
							@endforeach
						</select>
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Endereço</label>
						<input type="text" name="endereco" value="{{ @$key->endereco }}"> 
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Número</label>
						<input type="text" name="numero" value="{{ $key->numero }}">
					</div>
				</div>
				<div data-row-span="3">
					<div data-field-span="1" style="height: 61px;">
						<label>Complemento</label>
						<input type="text" name="complemento" value="{{ $key->complemento }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Bairro</label>
						<input type="text" name="bairro"  value="{{ $key->bairro }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>CEP</label>
						<input type="text" name="CEP"  value="{{ $key->CEP }}">
					</div>
				</div>
				<br><br>
				<div data-row-span="4">
					<div data-field-span="1" style="height: 61px;">
						<label>Empresa</label>
						<input type="text" name="empresa"  value="{{ @$key->empresa }}">  
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Telefone</label>
						<input type="text" name="telefone"  value="{{ $key->telefone }}"> 
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Email</label>
						<input type="text" name="email"   value="{{ $key->email }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Site</label>
						<input type="text" name="site"   value="{{ $key->site }}">
					</div>
					

				</div>
			</fieldset>
			<div class="clearfix pt-md">
				<div class="pull-right">
					<button class="btn-danger btn" type="submit">EDITAR</button>
				</div>
			</div>
		</form>
	@endforeach

	</div>
</div>