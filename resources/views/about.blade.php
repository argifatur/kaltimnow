 @extends('layouts.template')
 @section('content')
 <div class="main-container container" id="main-container">

  <!-- Content -->
  <div class="row">

    <!-- post content -->
    <div class="col-lg-12 blog__content mb-30">          
      <div class="row">
        <div class="col-md-12 mb-30">
          <h2>Kaltim Now ?</h2>
          <hr>
          <p class="lead mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eveniet architecto, dolorum cumque, tenetur nisi. Minus amet ullam ipsum accusamus voluptatem libero reiciendis quod adipisci perspiciatis tenetur, consectetur pariatur accusantium.</p>

          <p class="lead mb-20">ab sit similique unde eum quia incidunt. Suscipit sint aperiam laudantium provident temporibus distinctio inventore sit vero minus, aliquam nesciunt tempore dicta quo quos magni delectus quae aspernatur nihil deserunt voluptatum optio! Ducimus nobis soluta expedita quae, deserunt perspiciatis neque aliquid praesentium voluptas! Aliquid nobis tenetur iste possimus praesentium nisi, quasi sunt deleniti error repudiandae soluta molestias sed amet officia consectetur, voluptas eum eveniet obcaecati, nesciunt.</p>             
        </div>
        <div class="col-md-6">
          <img data-src="{{ asset('public/img/asus.jpg') }}" src="{{ asset('public/img/asus.jpg') }}" class="lazyload" alt="">             
        </div>
      </div>

         <!--  <div class="row mt-60">
            <div class="col-md-6">
              <img data-src="img/blog/about_img_2.jpg" src="img/empty.png" class="lazyload" alt="">             
            </div>
            <div class="col-md-6 mb-30">
              <h2>The Big Outreach</h2>
              <p class="lead mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eveniet architecto, dolorum cumque, tenetur nisi. Minus amet ullam ipsum accusamus voluptatem libero reiciendis quod adipisci perspiciatis tenetur, consectetur pariatur accusantium.</p>

              <p>ab sit similique unde eum quia incidunt. Suscipit sint aperiam laudantium provident temporibus distinctio inventore sit vero minus, aliquam nesciunt tempore dicta quo quos magni delectus quae aspernatur nihil deserunt voluptatum optio! Ducimus nobis soluta expedita quae, deserunt perspiciatis neque aliquid praesentium voluptas! Aliquid nobis tenetur iste possimus praesentium nisi, quasi sunt deleniti error repudiandae soluta molestias sed amet officia consectetur, voluptas eum eveniet obcaecati, nesciunt.</p>             
            </div>            
          </div> -->

        </div> <!-- end col -->

      </div> <!-- end content -->
    </div> <!-- end main container -->
    @endsection