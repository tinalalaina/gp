<body>
    <h1>Modifier un Savon</h1>
   
    <form method="post" action="{{route('product2.update', ['product2' => $product2])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product2->name}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product2->qty}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product2->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product2->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
    
<br>
<a href="/dashboard">Home</a>
</body>
</html>