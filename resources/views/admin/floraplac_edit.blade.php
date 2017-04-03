@extends('app')
@section('content')
@include('partials.header')

        <div id="wrapper">
            <div id="layout-static">
                @include('partials.sidebar')
                <div class="static-content-wrapper">
                    <div class="static-content">
                        @include('partials.bread')
						{{-- Conteiner Fluid --}}
						<div class="container-fluid">
							<div data-widget-group="group1" class="ui-sortable">
							    <div class="row">
							    <div class="col-md-2"></div>
									<div class="col-md-8">
										<div class="panel panel-white" data-widget='{"draggable": "false"}'>
											<div class="panel-heading">
												<h2>Formulário</h2>
											</div>
											<span>
												
												
												
											</span>
											<div class="panel-body">
											@foreach($item as $i)
												<form class="grid-form" method="POST" action="{{ url('/floraplac/' . $i->id . '/update')}}">
													<div data-row-span="1">
													{{ csrf_field() }}
														
														<div data-field-span="1">
															<textarea name="texto" rows="10" value="{{ old('numero') }}">{{ $i->texto }}</textarea>
														</div>
													</div>
													<div class="clearfix pt-md">
														<div class="pull-left">
															<button class="btn-primary btn" type="submit">Salvar</button>
														</div>
													</div>
												</form>
												@endforeach
											</div>
										</div>
							    	</div>
								</div>
							</div>
						</div>
				</div>
			</div>
			</div>
		</div>
	
<script>
	
</script>

@endsection