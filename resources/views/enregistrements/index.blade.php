

      <h2>Liste des produit1s</h2>
      <table>
          <thead>
              <tr>
                  <th>Nom</th>
              </tr>
          </thead>
          <tbody>
      @foreach($product1s as $product1 )
      <tr>
          <td>{{$product1->name}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>



    </div>


    <div class="col-6 col-md-4">


      <h2>Liste des produit2s</h2>
      <table>
          <thead>
              <tr>
                  <th>Nom</th>
              </tr>
          </thead>
          <tbody>
      @foreach($product2s as $product2 )
      <tr>
          <td>{{$product2->name}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>



    </div>
  </div>


  