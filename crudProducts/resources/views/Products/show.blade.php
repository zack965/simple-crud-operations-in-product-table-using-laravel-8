@extends("layout")
@section('content')
<h1>hello it's details page</h1>
<h1> {{$productf->Product_Name}} </h1>
<h1> {{$productf->Product_Desc}} </h1>
<a href="/product">back to list</a>
<a href="/product/{{$productf->product_id }}/edit">edit </a>

@endsection
