
<div>
    <h2 class="h2">Exsisting plans</h2>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Provider</th>
        <th> 
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Product
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
        </th>
        <th scope="col">Plan</th>
        <th scope="col">Price</th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>{{$oldPrice}}</td>
        <td>{{$salePrice}}</td>
        <td>@mdo</td>
      </tr>
      <tr>
        @foreach($prices as $price)
          <td> {{$price}} </td>
        @endforeach
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>