

//productf

@extends("layout")
@section('content')
use App\Http\Controllers\ProductController;
<h1>add a new product</h1>
{!! Form::open(['route' => ['product.update', $productf->product_id],'method' => 'PUT'])!!}
    <div class="form-group">
        {{Form::label('', 'product name', ['class' => 'awesome'])}}
        {{Form::text('Product_Name', $productf->Product_Name, ['class' => 'form-control', 'placeholder' => 'product name'])}}
    </div>
    <div class="form-group">
        {{Form::label('', 'product desc', ['class' => 'awesome'])}}
        {{Form::text('Product_Desc', $productf->Product_Desc, ['class' => 'form-control', 'placeholder' => 'product description'])}}
    </div>
    {{Form::submit('update product', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
