<body>
    <h1>Cigarette</h1>
    
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
            @foreach($product3s as $product3 )
                <tr>
                    <td>{{$product3->name}}</td>
                    <td>{{$product3->qty}}</td>
                    <td>{{$product3->price}}</td>
                    <td>{{$product3->description}}</td>
                    <td>
                       <a href="{{route('product3.edit', ['product3' => $product3])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product3.destroy', ['product3' => $product3])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product3/create">creer un produit</a>
        <br>
        <a href="/dashboard">Home</a>
    </div>
</body>