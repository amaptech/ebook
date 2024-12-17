<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
          <h2>Recent Blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        @foreach ($blog as $b )
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
            <div class="text text-center">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('{{url('blogimg' , $b->image)}}');">
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                  <div>
                      <span class="day">{{$b->created_at. date("d")}}</span>
                      <span class="mos">{{$b->created_at. date("m")}}</span>
                      <span class="yr">{{$b->created_at. date("year")}}</span>
                  </div>
              </div>
              <h3 class="heading mb-3"><a href="#">{{$b->blogtitle}}</a></h3>
              <p>{{$b->blogdescription}}</p>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </section>
