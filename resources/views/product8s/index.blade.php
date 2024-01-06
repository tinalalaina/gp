<body>
    <h1>Product8</h1>
    
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
            @foreach($product8s as $product8 )
                <tr>
                    <td>{{$product8->id}}</td>
                    <td>{{$product8->name}}</td>
                    <td>{{$product8->qty}}</td>
                    <td>{{$product8->price}}</td>
                    <td>{{$product8->description}}</td>
                    <td>
                       <a href="{{route('product8.edit', ['product8' => $product8])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product8.destroy', ['product8' => $product8])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product8/create">creer un produit</a>
    </div>
</body>