
<div>
    <h2 class="h2">Exsisting plans</h2>
</div>
@include('inc.messages')
<table class="table">
    <thead>
      <tr>
        
        {{-- <th scope="col">#</th> --}}
        <th scope="col">ID</th>
        <th scope="col">Provider</th>
        <th scope="col">Product</th>
        <th scope="col">Plan</th>
        <th scope="col">Normal Price</th>
        <th scope="col">Sale Price</th>
      </tr>
    </thead>
    <tbody>
        
            
        @if(count($hosts) > 0)
            @foreach($hosts as $host)
            <tr scope="row">
                <th>{{$host->id}}</th>
                <th> <a href="/hosts/{{$host->id}}">{{$host->provider}} </a></th>
                <th>{{$host->product}}</th>
                <th>{{$host->plan}}</th>
            </tr>
            @endforeach
        @else
            <p> No hosts found </p>
        @endif 
        
        
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

