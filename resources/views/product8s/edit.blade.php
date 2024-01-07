<body>
    <h1>Edit a Product8</h1>
   
    <form method="post" action="{{route('product8.update', ['product8' => $product8])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product8->name}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product8->qty}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product8->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product8->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
    <br>
        <a href="/dashboard">Home</a>
</body>
</html>