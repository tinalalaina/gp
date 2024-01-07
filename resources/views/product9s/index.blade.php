<body>
    <h1>Product9</h1>
    
    <div>
    
        <table border="1">
            <tr>
                <th>Name</th>
                 <th>FirstName</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($product9s as $product9 )
                <tr>
                    <td>{{$product9->name}}</td>
                    <td>{{$product9->firstname}}</td>
                    <td>{{$product9->qty}}</td>
                    <td>{{$product9->price}}</td>
                    <td>{{$product9->description}}</td>
                    <td>
                       <a href="{{route('product9.edit', ['product9' => $product9])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product9.destroy', ['product9' => $product9])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/product9/create">creer un produit</a><br>
        <a href="/dashboard">retour</a>
    </div>
</body>