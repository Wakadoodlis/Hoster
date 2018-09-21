
@include('inc.head')
@include('inc.navbar')

<div class="jumbotron pad-off">
    <h1 class="display-5">Add a new host plan!</h1>
    <hr class="my-2 mb-1">
    <p class="lead pb-1">Fill all neccessary fields to create a new plan.</p> 
 </div>


 <div class="container">
    <div class="row">
        <div class="col-md-7">
    @include('inc.messages')
 {{-- CREATE NEW HOST FORMA --}}
            {!! Form::open(['action'=>'HostsController@store', 'method'=>'POST']) !!}
 {{-- provider url inputas --}}
                <div class="form-group">
                    {{Form::label('provider_url', 'Provider_url')}}
                    {{Form::text('provider_url', '', ['class' => 'form-control labels', 'placeholder' =>'https://...'])}}
                </div>
                 {{-- product url inputas --}}
                <div class="form-group">
                    {{Form::label('product', 'Product')}}
                    {{Form::select('product', ['Web Host' => 'Web Host','VPS' => 'VPS Hosting', 'Website builder' => 'Website Builder', 'Cloud Hosting' => 'Cloud Hosting', 'Domain Checker' => 'Domain Checker'], 'Web Host')}}
                </div>
                 {{-- plan inputas --}}
                <div class="form-group">
                    {{Form::label('plan', 'Plan name')}}
                    {{Form::text('plan', '', ['class' => 'form-control labels', 'placeholder' =>'Plan...'])}}
                    </div>
 {{-- provider  inputas --}}
                <div class="form-group">
                    {{Form::label('provider', 'Provider')}}
                    {{Form::text('provider', '', ['class' => 'form-control labels', 'placeholder' =>'Provider...'])}}
                </div>
 {{-- price url inputas --}}
                {{-- <div class="form-group">
                    {{Form::label('price', 'Price')}}
                    {{Form::text('price', '', ['class' => 'form-control labels', 'placeholder' =>'Price...'])}}
                </div> --}}
            {{-- MYGTUKAS --}}
                {{Form::submit('Add Host plan',['class'=>'btn btn-primary'])}}

            {!! Form::close() !!}
        </div>
        <div class="col-md-4">
            <section class="add-section float-right">
                <h4>How to use this tool</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi vero suscipit repellat laboriosam? Debitis fugiat aperiam officiis inventore explicabo nesciunt at non pariatur sapiente? Quo vero repellat alias harum officia!
                </p>
            </section>
        </div>
    </div>   
 </div>  {{-- END CONTAINER--}}









@include('inc.legs')
