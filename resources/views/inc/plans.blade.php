{{-- EXSISTING PLANS ATVAIZDAVIMAS--}}
<div class="mb-4">
    <h2 class="h2">Exsisting plans</h2>
</div>
@include('inc.messages') {{-- FORM VALIDACIJOS ZINUTES--}}
<div class="row">
    <div class="col-md-7">
        <table class="table">
            <thead>
                 <tr> 
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">ID</th>
                    <th scope="col">Provider</th>
                    <th scope="col">Product</th>
                    <th scope="col">Plan</th>
                    {{-- <th scope="col">Price</th> --}}
                    {{-- <th scope="col">Sale Price</th> --}}
                </tr>
            </thead>
             <tbody>
                 {{-- HOSTS ATVAIZDAVIMAS IS DB--}}   
                @if(count($hosts) > 0) {{-- TIKRINIMAS JEI DB NEBUS HOSTU--}} 
                    @foreach($hosts as $host)
                        <tr scope="row">
                            <th>{{$host->id}}</th>
                            <th> <a href="/hosts/{{$host->id}}">{{$host->provider}} </a></th>
                            <th>{{$host->product}}</th>
                            <th>{{$host->plan}}</th>
                            {{-- <th>{{$host->price}} $ </th> --}}
                        </tr>
                    @endforeach
                @else
                        <p> No hosts found </p>
                @endif 
              </tbody>
            </table>
        </div>
{{-- VISOS KAINOS IS https://hosting.review/best-web-hosting/ --}}
    <div class="col-md-4">
            <hr class="price-hrT">
            <h2 class="prices-title"> Prices per month:</h2>
                <div class="plan-price">
                    @foreach($prices as $price)
                    <h5>normal price | sale price</h5>
                    <p> {{$price}} <p>
                    @endforeach
                    </div>
    </div>
</div>     {{-- END ROW DIV --}}    
      
    {{-- <ul class="">
        @foreach($strFromArr as $provider)
        <p> Provider: {{$provider}} <p>
        @endforeach
    </ul> --}}

        {{-- @foreach($providers as $provider)
          {{$provider}} 
        @endforeach --}}

