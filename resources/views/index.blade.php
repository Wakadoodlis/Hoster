@include('inc.head')
   
        @include('inc.navbar') {{-- navbaras--}}
        
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">HOSTER!</h1>
                <p class="lead">This is a simple app, where You can find best prices for Your web hosting.</p>
                <hr class="my-4 mb-1">
             </div>
             @include('inc.plans') {{-- EXSISTING PLANS--}}
        </div> {{-- END CONTAINER--}}

@include('inc.legs') {{-- html galas--}}
        