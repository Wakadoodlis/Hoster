@include('inc.head')
   
        @include('inc.navbar') {{-- navbaras--}}
        
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">HOSTER!</h1>
                <p class="lead">This is a simple app, where You can find best web hosting plans, that suits your needs. <br><strong> Simple click on the "provider" to Edit or Delete the plan. Or press "Add a host plan" in the top of the right corner, to Add a new one. </strong></p>
                <hr class="my-4 mb-1">
             </div>
             @include('inc.plans') {{-- EXSISTING PLANS--}}
        </div> {{-- END CONTAINER--}}

@include('inc.legs') {{-- html galas--}}
        