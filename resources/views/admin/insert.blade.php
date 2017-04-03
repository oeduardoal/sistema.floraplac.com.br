<div class="panel panel-white" data-widget='{"draggable": "false"}'>
	<div class="panel-heading">
		<h2>Formulário</h2>
	</div>

	<div class="panel-body">
		
		
		<form class="grid-form" method="POST" action="{{ url('/representantes') }}">											<fieldset>
		@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
		<div class="alert alert-danger">
            {{ $error }}
		</div>
    @endforeach
@endif
				<legend>
					Insira os dados das empresas representantes
				</legend>
				<div data-row-span="2">
				{{ csrf_field() }}
					<div data-field-span="1" style="height: 61px;">
						<label>Cidade</label>
						<input type="text" name="cidade"  value="{{ old('cidade') }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Estado</label>
						<select name="estado" class="form-control" style="padding: 0px;" id="">
								<option value="{{ old('empresa') }}">Selecione uma opção</option>
							@foreach($estates as $key => $value )
								<option value="{{ $key }}">{{ $value }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div data-row-span="2">
					<div data-field-span="1" style="height: 61px;">
						<label>Endereço</label>
						<input type="text" name="endereco"  value="{{ old('endereco') }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Número</label>
						<input type="text" name="numero"  value="{{ old('numero') }}">
					</div>
				</div>
				<div data-row-span="3">
					<div data-field-span="1" style="height: 61px;">
						<label>Complemento</label>
						<input type="text" name="complemento"  value="{{ old('complemento') }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Bairro</label>
						<input type="text" name="bairro"  value="{{ old('bairro') }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>CEP</label>
						<input type="text" name="CEP"  value="{{ old('CEP') }}">
					</div>
				</div>
				<br><br>
				<div data-row-span="2">
					<div data-field-span="1" style="height: 61px;">
						<label>Empresa</label>
						<input type="text" name="empresa" value="{{ old('empresa') }}"> 
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Telefone</label>
						<input type="text" name="telefone" value="{{ old('telefone') }}"> 
					</div>
				</div>
				<div data-row-span="2">
					<div data-field-span="1" style="height: 61px;">
						<label>Email</label>
						<input type="text" name="email" value="{{ old('email') }}">
					</div>
					<div data-field-span="1" style="height: 61px;">
						<label>Site</label>
						<input type="text" name="site"  value="{{ old('site') }}">
					</div>
					
				</div>
			</fieldset>
			<div class="clearfix pt-md">
				<div class="pull-right">
					<button class="btn-success btn" type="submit">Salvar</button>
				</div>
			</div>
		</form>

	</div>
</div>