<h1>Biscuit</h1>
<form method="post" action="{{route('product5.store')}}">
    @csrf 
    @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" />
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <input type="submit" value="Save a New Product5" />
        </div>
    </form>
    <hr>
    <a href="/product5">lister les produits</a>