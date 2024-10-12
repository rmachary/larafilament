d
@include('layout.layouts')
@section('machary')



<div class="container p-4">
    <div class="row g-5">
        <div class="col-md-3">
            <a href="{{asset('pdf/newslatter_bethsaida.pdf')}}" target="_blank"><img src="{{asset('images/Bethsaida_Newsletter.png')}}" alt="Newsletter September 2024" width="100"></a>
        </div>
        <div class="col-md-9">

        <article class="blog-post">
          <h6 class="display-6 link-body-emphasis mb-1">Newsletter of September 2024</h6>
          <p class="blog-post-meta">September 1, 2024 by <a href="#">Machary</a></p>

          <p>Welcome to our new newsletter, Which higlite the success story of our orphanage secondary School. On this newsletter you will be able to see great news about stories and success story of the bethsaida orphange school projects</p>
          <hr>
        </article>
         </div>




        <div class="col-md-3">
            <a href="{{asset('pdf/Bethsaida orphage education Centre_Rais.pdf')}}" target="_blank"><img src="{{asset('images/Report20241.png')}}" alt="Newsletter September 2024" width="100"></a>
        </div>
        <div class="col-md-9">

        <article class="blog-post">
          <h6 class="display-6 link-body-emphasis mb-1">Report of fiancial Aid 2024 -Kiswahili</h6>
          <p class="blog-post-meta">September 1, 2024 by <a href="#">Machary</a></p>

          <p>Welcome to our new financial proposal. This document highlights key areas where we seek collaboration with the community, organizations, and other institutions to support our orphanage center's mission. Inside, you'll find detailed insights into our ongoing activities and the vital needs we aim to address together. We believe that through your partnership, we can create a lasting impact on the lives of the children we serve, and together, we can build a brighter future for them. We invite you to explore these opportunities and join us in making a difference.   <hr>
        </article>

        </div>


        <!----another news   ---->

        <div class="col-md-3">
            <a href="{{asset('pdf/childact.pdf')}}" target="_blank"><img src="{{asset('images/image.png')}}" alt="Newsletter September 2024" width="100"></a>
        </div>
        <div class="col-md-9">

        <article class="blog-post">
          <h6 class="display-6 link-body-emphasis mb-1"> The school is operate under  child home licence Regulation,2011  </h6>
          <p class="blog-post-meta">September 1, 2024 by <a href="#">Machary</a></p>

          <p>Bethsaida Secondary School operates under the umbrella of the Bethsaida Orphanage Education Centre, which is registered in accordance with the Child Act of 2011. This framework not only emphasizes our commitment to providing quality education but also ensures that we uphold the rights and welfare of the children in our care. By adhering to these regulations, we strive to create a safe and nurturing environment that supports the academic and personal growth of every student. Your support can help us continue this vital work and expand our reach to provide even more opportunities for the children in our community. </article>

        </div>



    </div>
</div>


@endsection

@include('layout.layour2')

