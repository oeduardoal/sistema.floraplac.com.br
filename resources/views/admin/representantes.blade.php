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
						    	<div class="col-md-6">
						    	
									@if (Request::is('representantes'))
										@include('admin.insert')
									@elseif(Request::is('representantes/*/edit'))
										@include('admin.edit')
									@endif

								</div>
								<div class="col-md-6">
									<div class="panel panel-success" data-widget='{"draggable": "false"}'>
										<div class="panel-heading">
											<h2>Representantes</h2>
											<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
										</div>
										<div class="panel-body no-padding">
											<table class="table table-striped">
												<thead>
													<tr class="success">
														<th>#</th>
														<th>Empresa</th>
														<th>Estado</th>
														<th>CEP</th>
														<th>Ações</th>
													</tr>
												</thead>
												<tbody>
												@foreach($dados as $a)
													<tr>
														<td>{{ $a->id }}</td>
														<td>{{ $a->empresa }}</td>
														<td>{{ $a->estado }}</td>
														<td>{{ $a->CEP }}</td>
														<td style="text-align: right;width: 100px;">
												<form action="{{ url('/representantes/' . $a->id . '/edit') }}" method="POST" style="float: left;clear: left;">
												  <input type="hidden" name="_token" value="{{ csrf_token() }}">
												  {{ method_field('GET') }}
													<button href="" data-method="delete" class="btn btn-default">
														<i class="ti ti-settings"></i>
													</button>
												</form>
												<form action="{{ url('/representantes/' . $a->id . '/delete') }}" method="POST"  style="float: right;clear: right;">
												    {{ method_field('DELETE') }}
												  <input type="hidden" name="_token" value="{{ csrf_token() }}">
													<button href=""  data-method="delete" class="btn btn-danger">
														<i class="ti ti-close"></i>
													</button>
												</form>
												</td>
													</tr>
												@endforeach
												</tbody>
											</table>
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
	
@endsection