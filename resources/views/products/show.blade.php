@extends('layout.app')
@section('content')
<div class="conteiner text-center">
	<div  class="card product text-left">

		@if(Auth::check() && $product->user_id==Auth::user()->id)

		<div class="absolute actions"></div>

		<a href="{{url('/products/'.$product->id.'/edit')}}">
						Editar
					</a>
					@include('products.delete',['product'=>$product])
		</div>
		@endif

		<h1>{{$product->title}}</h1>
		<div class="row">
			<div class="col-sm-6 col-xs-12"></div>
			<div class="col-sm-6 col-xs-12"></div
			<p>
			<strong>Descripción</strong>
			</p>
			<p>
				{{$product->description}}
			</p>
			<p>
				<a class="btn-success"> Agregar al carrito</a>
			</p>
		</div>
		</div>
	</div>
	</div>
	@endsection