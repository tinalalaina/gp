<body>
    <h1>Edit a Product1</h1>
   
    <form method="post" action="{{route('product1.update', ['product1' => $product1])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product1->name}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product1->qty}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product1->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product1->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>