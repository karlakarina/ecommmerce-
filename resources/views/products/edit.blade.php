@extends("layouts.app");

@section("content")
<div class="container white">
    <h1>Editar Productos</h1>
    @include('products.form',['product'=>$product,'url'=>'/products/'.$product->id,'method'=>'PATCH'])
</div>
@endsection 