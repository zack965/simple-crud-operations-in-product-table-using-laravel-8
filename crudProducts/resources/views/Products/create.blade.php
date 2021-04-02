@extends("layout")
@section('content')

<h1>add a new product</h1>
{!! Form::open(array('route'=>'product.store'))!!}
    <div class="form-group">
        {{Form::label('', 'product name', ['class' => 'awesome'])}}
        {{Form::text('Product_Name', '', ['class' => 'form-control', 'placeholder' => 'product name'])}}
    </div>
    <div class="form-group">
        {{Form::label('', 'product desc', ['class' => 'awesome'])}}
        {{Form::text('Product_Desc', '', ['class' => 'form-control', 'placeholder' => 'product description'])}}
    </div>
    {{Form::submit('create product', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
