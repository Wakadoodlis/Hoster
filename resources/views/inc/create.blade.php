
@include('inc.head')
@include('inc.navbar')

<div class="jumbotron pad-off">
    <h1 class="display-5">Create a new HOST!</h1>
    <hr class="my-2 mb-1">
    <p class="lead pb-1">Fill all neccessary fields to create a new host.</p> 
 </div>

 {{-- CREATE NEW HOST FORMA --}}
 <div class="container">
    @include('inc.messages')

    {!! Form::open(['action'=>'HostsController@store', 'method'=>'POST']) !!}
      <div class="form-group">
          {{Form::label('provider', 'Provider')}}
          {{Form::text('provider', '', ['class' => 'form-control', 'placeholder' =>'Provider...'])}}
      </div>
      <div class="form-group">
            {{Form::label('provider_url', 'Provider_url')}}
            {{Form::text('provider_url', '', ['class' => 'form-control', 'placeholder' =>'https://...'])}}
        </div>
      <div class="form-group">
          {{Form::label('product', 'Product')}}
          {{Form::select('product', ['Web Host' => 'Web Host','VPS' => 'VPS Hosting', 'Website builder' => 'Website Builder', 'Cloud Hosting' => 'Cloud Hosting', 'Domain Checker' => 'Domain Checker'], 'Web Host')}}
      </div>
      <div class="form-group">
          {{Form::label('plan', 'Plan')}}
          {{Form::text('plan', '', ['class' => 'form-control', 'placeholder' =>'Plan...'])}}
      </div>
      <div class="form-group">
          {{Form::label('price', 'Price')}}
          {{Form::text('price', '', ['class' => 'form-control', 'placeholder' =>'Price...'])}}
      </div>
      {{-- MYGTUKAS --}}
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}


 </div>  {{-- END CONTAINER--}}









@include('inc.legs')
