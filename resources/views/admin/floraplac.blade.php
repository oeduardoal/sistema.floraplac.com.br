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
						<div class="container-fluid padding">
							<div data-widget-group="group1" class="ui-sortable">
							    <div class="row">
							    	<div class="col-md-12">
										<div class="panel panel-transparent">
							                <div class="panel-body" ng-app="app" ng-controller="main">
							                    
							                    <div class="panel">
							                        <div class="panel-body no-padding">
														<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="editable">
									                        <thead>
									                            <tr>
									                                <th>ID</th>
									                                <th style="width: 10rem">Estado</th>
									                                <th style="width: 150px">Ações</th>
									                            </tr>
									                        </thead>
									                        <tbody>
									                        @foreach($data_floraplac as $value)
									                            <tr class="odd gradeX">
										                            <td>{{ $value->id }}</td>
										                            <td>{{ $value->texto }}</td>
									                                <td style="white-space: nowrap">
																	<form action="{{ url('/floraplac/' . $value->id . '/edit') }}" method="POST" style="float: left;clear: left;">
																	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
																	  {{ method_field('GET') }}
																		 <button class="btn btn-sm btn-primary">Editar</button>
																	</form>
																	<form action="{{ url('/floraplac/' . $value->id . '/delete') }}" method="POST"  style="float: right;clear: right;">
																	    {{ method_field('DELETE') }}
																	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
																		 <button class="btn btn-sm btn-danger">Excluir</button>
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
			</div>
			
		</div>
	


@endsection