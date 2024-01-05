<body>
    <h1>Pate</h1>
    
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
            @foreach($product7s as $Product7 )
                <tr>
                    <td>{{$Product7->name}}</td>
                    <td>{{$Product7->qty}}</td>
                    <td>{{$Product7->price}}</td>
                    <td>{{$Product7->description}}</td>
                    <td>
                       <a href="{{route('Product7.edit', ['Product7' => $Product7])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('Product7.destroy', ['Product7' => $Product7])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <hr>
        <a href="/Product7/create">creer un produit</a><br>
        <a href="/dashboard">retour</a>
    </div>
</body>