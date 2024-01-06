<body>
    <h1>Edit a Product9</h1>
   
    <form method="post" action="{{route('product9.update', ['product9' => $product9])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product9->name}}" />
        </div>
         <div>
            <label>FirstName</label>
            <input type="text" name="firstname" placeholder="FirstName" value="{{$product9->firstname}}" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product9->qty}}" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product9->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product9->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>