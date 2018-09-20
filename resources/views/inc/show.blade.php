@include('inc.head')
@include('inc.navbar')
<a href="/hosts" class="btn btn-default btn-marg mb-4">Go back</a>
<div class="jumbotron pad-off">
    <h1 class="display-6 p-3">{{$host->provider}}</h1>
   
 </div>
 
<div class="container">

<h3><span class='edit-span'>Provider's url:</span>{{$host->provider_url}}</h3>
<h3><span class='edit-span'>Product:</span>{{$host->product}}</h3>
<h3><span class='edit-span'>Plan:</span> {{$host->plan}}</h3>
<h3><span class='edit-span'>Price:</span> {{$host->price}} $</h3>
<h6><span class='edit-span host-time'>Host created at:</span>{{$host->created_at}}</h6>
<h6><span class='edit-span host-time'>Host updated at:</span>{{$host->updated_at}}</h6>



<hr class="my-4 mb-1">

</div>
<a href="/hosts/{{$host->id}}/edit" class="btn btn-success btn-marg"> EDIT</a>

{!!Form::open(['action' => ['HostsController@destroy',$host->id], 'method' => 'POST', 'class' => 'float-right mr-3' ]) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{fORM::submit('Delete', ['class'=>  'btn btn-danger'])}}

{!!Form::close()!!}



@include('inc.legs')