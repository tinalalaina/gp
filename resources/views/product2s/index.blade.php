<body>
    <h1>Savon</h1>
    
    <div>
    
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($product2s as $product2 )
                <tr>
                    
                    <td>{{$product2->name}}</td>
                    <td>{{$product2->qty}}</td>
                    <td>{{$product2->price}}</td>
                    <td>{{$product2->description}}</td>
                    <td>
                       <a href="{{route('product2.edit', ['product2' => $product2])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product2.destroy', ['product2' => $product2])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product2/create">creer un produit</a>
        <br>
        <a href="/dashboard">Home</a>
    </div>
</body>