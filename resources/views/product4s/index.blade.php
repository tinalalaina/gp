<body>
    <h1>Huille</h1>
    
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
            @foreach($product4s as $product4 )
                <tr>
                    <td>{{$product4->id}}</td>
                    <td>{{$product4->name}}</td>
                    <td>{{$product4->qty}}</td>
                    <td>{{$product4->price}}</td>
                    <td>{{$product4->description}}</td>
                    <td>
                       <a href="{{route('product4.edit', ['product4' => $product4])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product4.destroy', ['product4' => $product4])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product4/create">creer un produit</a> <br>
        <br>
        <a href="/dashboard">Home</a>
    </div>
</body>