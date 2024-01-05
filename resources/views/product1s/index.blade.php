<body>
    <h1>Product1</h1>
    
    <div>
    
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($product1s as $product1 )
                <tr>
                    <td>{{$product1->id}}</td>
                    <td>{{$product1->name}}</td>
                    <td>{{$product1->qty}}</td>
                    <td>{{$product1->price}}</td>
                    <td>{{$product1->description}}</td>
                    <td>
                       <a href="{{route('product1.edit', ['product1' => $product1])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product1.destroy', ['product1' => $product1])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product1/create">creer un produit</a>
    </div>
</body>