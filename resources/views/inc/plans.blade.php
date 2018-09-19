
<div>
    <h2 class="h2">Exsisting plans</h2>
</div>

<table class="table">
    <thead>
      <tr>
        
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Provider</th>
        <th scope="col">Product</th>
        <th scope="col">Plan</th>
        <th scope="col">Normal Price</th>
        <th scope="col">Sale Price</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
        @if(count($hosts) > 0)
            @foreach($hosts as $host)
            <th>{{$host->id}}</th>
            <th>{{$host->provider}}</th>
            <th>{{$host->product}}</th>
            <th>{{$host->plan}}</th>
            @endforeach
        @else
            <p> No hosts found </p>
        @endif 
        
          </tr>
    </tbody>




</table>


  <h3> </h3>
    <ul>
      @foreach($prices as $price)
      <li> {{$price}} </li>
      @endforeach
     </ul>
        
      
  
        {{-- <ul>
        @foreach($prices as $price)
         <li> {{$price}} </li>
        @endforeach
        </ul> --}}

        {{-- @foreach($providers as $provider)
          {{$provider}} 
        @endforeach --}}

