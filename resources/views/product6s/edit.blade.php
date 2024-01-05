<body>
    <h1>Edit a Product6</h1>
   
    <form method="post" action="{{route('product6.update', ['product6' => $product6])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product6->name}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product6->qty}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product6->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product6->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>