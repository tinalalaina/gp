<body>
    <h1>Product5</h1>
    
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
            @foreach($product5s as $product5 )
                <tr>
                    <td>{{$product5->id}}</td>
                    <td>{{$product5->name}}</td>
                    <td>{{$product5->qty}}</td>
                    <td>{{$product5->price}}</td>
                    <td>{{$product5->description}}</td>
                    <td>
                       <a href="{{route('product5.edit', ['product5' => $product5])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product5.destroy', ['product5' => $product5])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product5/create">creer un produit</a>
    </div>
</body>