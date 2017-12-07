@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row margin_top_dash_info">       
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="panel dash">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-user fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="dash-qtde">{{ $num_pacientes }}</div>
								</div>
							</div>
						</div>
						<a href="{{ route('pacientes.index') }}">
							<div class="panel-footer">
								<span class="pull-left">Pacientes cadastrados</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="panel dash">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-stethoscope fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="dash-qtde">{{ $num_medicos }}</div>
								</div>
							</div>
						</div>
						<a href="{{ route('medicos.index') }}">
							<div class="panel-footer">
								<span class="pull-left">Medicos cadastrados</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="panel dash">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-calendar fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="dash-qtde">{{ $consultas_hoje }}</div>
								</div>
							</div>
						</div>
						<a href="{{ route('agendamentos.index') }}">
							<div class="panel-footer">
								<span class="pull-left">Consultas de hoje</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>		
		</div>

    </div>
</div>

@endsection
