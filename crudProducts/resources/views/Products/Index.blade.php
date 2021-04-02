@extends("layout")
@section('content')
    <h1>hello from index page </h1>
    <button><a href="/product/create">add a new product</a></button>
    @if(count($products)>0)
        <table>
            <tr>
                <th>product name</th>
                <th>product description</th>
                <th>operayions</th>
            </tr>
            @foreach( $products as $product)
                <tr>
                    <td> {{$product->Product_Name}} </td>
                    <td> {{$product->Product_Desc}} </td>
                    <td>
                        <button><a href="/product/{{$product->product_id }}">details</a></button>
                        <button><a href="/product/{{$product->product_id }}/edit">edit</a></button>
                        <button><a href="{{route('product.destroy',['product'=>$product->product_id])}}">delete</a></button>

                    </td>
                </tr>
            @endforeach
        </table>



    @else
        <p>no products found</p>
    @endif
@endsection
