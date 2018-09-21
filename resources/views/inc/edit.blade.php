@include('inc.head')
@include('inc.navbar')
<div class="jumbotron pad-off">
    <h1 class="display-6 p-3">Edit hosts</h1>
   
 </div>

<div class="container">
    @include('inc.messages')
{{-- EDIT FORMA --}}
    {!! Form::open(['action'=>['HostsController@update', $host->id], 'method'=>'POST']) !!}
    {{-- PROVIDER IMPUTAS--}}
      <div class="form-group">
          {{Form::label('provider', 'Provider')}}
          {{Form::text('provider', $host->provider, ['class' => 'form-control', 'placeholder' =>'Provider...'])}}
      </div>
      {{-- PROVIDER URL IMPUTAS--}}
      <div class="form-group">
            {{Form::label('provider_url', 'Provider_url')}}
            {{Form::text('provider_url', $host->provider_url, ['class' => 'form-control', 'placeholder' =>'https://...'])}}
        </div>
        {{-- PRODUCT IMPUTAS--}}
      <div class="form-group">
          {{Form::label('product', 'Product')}}
          {{Form::select('product', ['Web Host' => 'Web Host','VPS' => 'VPS Hosting', 'Website builder' => 'Website Builder', 'Cloud Hosting' => 'Cloud Hosting', 'Domain Checker' => 'Domain Checker'], 'Web Host')}}
      </div>
      {{-- PLAN IMPUTAS--}}
      <div class="form-group">
          {{Form::label('plan', 'Plan')}}
          {{Form::text('plan', $host->plan, ['class' => 'form-control', 'placeholder' =>'Plan...'])}}
      </div>
      {{-- PRICE IMPUTAS--}}
      {{-- <div class="form-group">
          {{Form::label('price', 'Price')}}
          {{Form::text('price', $host->price, ['class' => 'form-control', 'placeholder' =>'Price...'])}}
      </div> --}}

      {{Form::hidden('_method','PUT')}}  {{-- KAD BUTU GALIMA UPDEITINTI- hidden forma su PUT--}}
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

  {!! Form::close() !!}


 </div> {{-- END CONTAINER--}}







@include('inc.legs')