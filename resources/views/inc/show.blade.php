@include('inc.head')
@include('inc.navbar')
{{-- GO BACK MYGTUKAS --}}
<a href="/hosts" class="btn btn-default btn-marg mb-4">Go back</a>
{{-- PROVIDERS TITLE --}}
<div class="jumbotron pad-off">
    <h1 class="display-6 p-3">{{$host->provider}}</h1>   
</div>
 
<div class="container">
    <div class="row">
        <div class="col-md-7">
            {{-- HOSTS EDITINIMAS  --}}
            <h3><span class='edit-span'>Provider's url:</span>{{$host->provider_url}}</h3>
            <h3><span class='edit-span'>Product:</span>{{$host->product}}</h3>
            <h3><span class='edit-span'>Plan:</span> {{$host->plan}}</h3>
            {{-- KOL NEBUS TIKROS PRICE IKELTOS I DB --}}
            {{-- <h3><span class='edit-span'>Price:</span> {{$host->price}} $</h3> --}}
            <h6><span class='edit-span host-time'>Host created at:</span>{{$host->created_at}}</h6>
            <h6><span class='edit-span host-time'>Host updated at:</span>{{$host->updated_at}}</h6>

            <hr class="my-4 mb-1">
        </div>

        <div class="col-md-4">
           <h5>Dear users,</h5>
            <p>At this moment, "price" canot be edited. We apologise for this inconvenience. </p>
            <p><em>Price edeting is coming soon!</em></p>
        </div>
    </div> {{-- END main row--}}
</div> {{-- END CONTAINER--}}

{{-- EDIT  MYGTUKAS --}}
<a href="/hosts/{{$host->id}}/edit" class="btn btn-success btn-marg"> EDIT</a>

{{--  DELETE FORMA/MYGTUKAS --}}
{!!Form::open(['action' => ['HostsController@destroy',$host->id], 'method' => 'POST', 'class' => 'float-right mr-3' ]) !!}

{{Form::hidden('_method', 'DELETE')}}
{{fORM::submit('Delete', ['class'=>  'btn btn-danger mb-3'])}}


{!!Form::close()!!}



@include('inc.legs')