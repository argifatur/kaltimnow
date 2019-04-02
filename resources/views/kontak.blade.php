@extends('layouts.template')
@section('content')

<div class="main-container container" id="main-container">

  <!-- Content -->
  <div class="row">

    <!-- post content -->

    <div class="col-lg-6 blog__content mb-30">
     <div class="saran">          
      <div class="row justify-content-md-center">
        <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">

          <h3 class="card-contact">Pesan Untuk Kami</h3>
          <hr>
          <!-- Contact Form -->
          <form id="contact-form" class="contact-form mt-30 mb-30" method="post" action="#">
            <div class="contact-name">
              <label for="name">Name <abbr title="required" class="required">*</abbr></label>
              <input name="name" id="name" type="text">
            </div>
            <div class="contact-email">
              <label for="email">Email <abbr title="required" class="required">*</abbr></label>
              <input name="email" id="email" type="email">
            </div>
            <div class="contact-subject">
              <label for="email">Subject</label>
              <input name="subject" id="subject" type="text">
            </div>
            <div class="contact-message">
              <label for="message">Message <abbr title="required" class="required">*</abbr></label>
              <textarea id="message" name="message" rows="7" required="required"></textarea>
            </div>

            <input type="submit" class="btn btn-lg btn-color btn-button" value="Kirim Pesan" id="submit-message">
            <div id="msg" class="message"></div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
  <div class="col-lg-6 blog__content mb-30">
    <div class="saran">          
      <div class="row justify-content-md-center">
        <div class="col-lg-12">

          <h3 class="card-contact">Hubungi Kami</h3>
          <hr>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.6675041736758!2d117.12951470844652!3d-0.4981801180831294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91a51f789245bad0!2sToko+Untung+Barokah!5e0!3m2!1sid!2sid!4v1552535813463" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          <br>  
          <!-- Contact Form -->
          <ul class="contact-info">
            <li><h4><span class="fas fa-map-marker-alt"></span> &nbsp; Alamat</h4><div class="text">Jl. Pangeran Antasari Gg. Ijabah No.88, RT.7, Tlk. Lerong Ulu, Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243</div></li>
            <br>  
            <li><h4><span class="fas fa-phone"></span> &nbsp; Hubungi</h4><div class="text">0853-5022-9494</div></li>
            <br>  
            <li><h4><span class="fab fa-whatsapp"></span> &nbsp; WhatsApp</h4><div class="text">0853-5022-9494</div></li>
            <br>  
            <li><h4><span class="fas fa-envelope"></span> &nbsp; Email</h4><div class="text">marketing@utamaweb.com</div></li>
          </ul>

        </div>
      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end content -->
</div> <!-- end main container -->
@endsection