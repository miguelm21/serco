@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Noticias
@endsection

@section('contentheader_title')
    Noticias
@endsection

@section('main-content')
<div class="col-md-12" style="margin-top:20px;margin-bottom:10px;">
	<div class="col-md-3 noleftpadding">
		<a href class="btn btn-block btn-default" data-toggle="tooltip" title data-original-title="Actualizar" style="font-size: 14px">
			<i class="fa fa-refresh"></i>
		</a>
	</div>
	<div class="col-md-4 noleftpadding">
		<a href="{{ route('news.create') }}" class="btn btn-success" type="button" style="width:100%;">Agregar Noticia</a>
	</div>
</div>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<div class="col-md-9">
						<h3 class="box-title">Lista de Noticias</h3>
					</div>
				</div>
				<div id="tbl-main" class="box-body">
					<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Imagen</th>
								<th>Nombre</th>
								<th>Url</th>
								<th></th>
							</tr>
						</thead>
						@foreach($news as $new)
						<tbody>
							<tr>
								<td><img src="{{ $new->image }}" width="150px" height="150px"></td>
								<td>{!!$new->name!!}</td>
								<td>{!!$new->url!!}</td>
								<td align="center">
									{!!Form::open(['route'=>['news.destroy', $new], 'method'=>'DELETE'])!!}
									<div class="btn-group">
										<a href="{{ route('news.edit', $new->id) }}" class="btn btn-default" type="edit"><i class="fa fa-edit"></i>Editar</a>

										<button class="btn btn-danger" type="submit">
    									<i class="fa fa-remove"></i>Borrar</button>
									</div>
									{!!Form::close()!!}

								</td>
							</tr>
						</tbody>
						@endforeach
					</table>
					{!!$news->render()!!}
					</div>
				</div>
				<div class="box-footer clearfix">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
