<body>
    <h1>Couche</h1>
    
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
            @foreach($product6s as $product6 )
                <tr>
                    <td>{{$product6->name}}</td>
                    <td>{{$product6->qty}}</td>
                    <td>{{$product6->price}}</td>
                    <td>{{$product6->description}}</td>
                    <td>
                       <a href="{{route('product6.edit', ['product6' => $product6])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product6.destroy', ['product6' => $product6])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product6/create">creer un produit</a>
    </div><br>
    <a href="/dashboard">retour</a>
</body>