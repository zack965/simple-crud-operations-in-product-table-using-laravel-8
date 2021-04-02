@extends("layout")
@section('content')
<h1>hello it's delete page</h1>
<h1> {{$productf->Product_Name}} </h1>
<h1> {{$productf->Product_Desc}} </h1>
<a href="/product">back too list</a>

{!! Form::open(['route' => ['product.destroy', $productf->product_id],'method' => 'DELETE'])!!}

    {{Form::submit('delete product', ['class'=>'btn btn-danger'])}}
{!! Form::close() !!}

@endsection
