
@include('layout.layouts')
@section('machary')



<div class="container p-4">
    <div class="row g-5">
        <div class="col-md-9">

        <article class="blog-post">
          <h6 class="display-6 link-body-emphasis mb-1">Newsletter of September 2024</h6>
          <p class="blog-post-meta">September 1, 2024 by <a href="#">Machary</a></p>

          <p>Welcome to our new newsletter, Which higlite the success story of our orphanage secondary School. On this newsletter you will be able to see great news about stories and success story of the bethsaida orphange school projects</p>
          <hr>
        </article>
    </div>

    <div class="col-md-3">
        <a href="{{asset('pdf/newslatter_bethsaida.pdf')}}" target="_blank"><img src="{{asset('images/Bethsaida_Newsletter.png')}}" alt="Newsletter September 2024" width="50%"></a>
    </div>


      </div>
    </div>

</div>

</body>
@endsection

@include('layout.layour2')

