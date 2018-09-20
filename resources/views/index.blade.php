@include('inc.head')
   
        @include('inc.navbar') {{-- navbaras--}}
        
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">HOSTER!</h1>
                <p class="lead">This is a simple app, where You can find best prices for Your web hosting. <br> Simple click on provider to Edit or Delete the Host. Or press "Create Host" in the top of the right, to Create a new Host.</p>
                <hr class="my-4 mb-1">
             </div>
             @include('inc.plans') {{-- EXSISTING PLANS--}}
        </div> {{-- END CONTAINER--}}

@include('inc.legs') {{-- html galas--}}
        