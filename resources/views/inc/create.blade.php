@include('inc.head')
@include('inc.navbar')

<div class="jumbotron pad-off">
    <h1 class="display-4">Create a new HOST!</h1>
    <hr class="my-4 mb-1">
    <p class="lead pb-1">Fill all neccessary fields to create a new host.</p> 
 </div>

 <div class="container">
    @include('inc.messages')

    {!! Form::open(['action'=>'HostsController@store', 'method'=>'POST']) !!}
      <div class="form-group">
          {{Form::label('provider', 'Provider')}}
          {{Form::text('provider', '', ['class' => 'form-control', 'placeholder' =>'Provider...'])}}
      </div>
      <div class="form-group">
          {{Form::label('product', 'Product')}}
          {{Form::select('product', ['W' => 'Web Host','V' => 'VPS Hosting', 'B' => 'Website Builder', 'C' => 'Cloud Hosting', 'D' => 'Domain Checher'], 'W')}}
      </div>
      <div class="form-group">
          {{Form::label('plan', 'Plan')}}
          {{Form::text('plan', '', ['class' => 'form-control', 'placeholder' =>'Plan...'])}}
      </div>
      <div class="form-group">
          {{Form::label('price', 'Price')}}
          {{Form::text('price', '', ['class' => 'form-control', 'placeholder' =>'Price...'])}}
      </div>
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}


 </div>











@include('inc.legs')
