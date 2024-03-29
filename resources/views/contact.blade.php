@extends('layouts.app')

@section('content')
    
<!-- Breadcromb Wrapper Start -->
<div class="breadcromb-wrapper">
    <div class="breadcromb-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="breadcromb-left">
            <h3>Contactez nous</h3>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="breadcromb-right">
            <ul>
              <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
              <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
              <li>Contactez nous</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcromb Wrapper End --> 
  <!-- Inner Page Wrapper Start -->
  <div class="inner-page-wrapper contact-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="side-title">
            <h2>Contactez nous</h2>
           </div>
          <div class="contact-form">
            <form>
              <div class="field">
                <label>Nom</label>
                <input placeholder="" type="text">
              </div>
              <div class="field">
                <label>Email</label>
                <input placeholder="" type="email">
              </div>
              <div class="field">
                <label>Sujet</label>
                <input placeholder="" type="text">
              </div>
              <div class="field">
                <label>Message</label>
                <textarea></textarea>
              </div>
              <button class="btn btn-default unicod-btn-black" type="submit">Envoyer Message</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="google-map">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198710.35112897935!2d-98.51489117772236!3d38.904562823631146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471865832140" allowfullscreen=""></iframe> --}}
            <iframe src="https://maps.google.com/maps?q=sidi%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
          <div class="contact-infos">
            <div class="row">
              <div class="col-md-6">
                <div class="widget">
                  <h4 class="widget-title">Contact Info</h4>
                  <ul class="contact-info">
                    <li><i class="fa fa-phone"></i> 0541327288</li>
                    <li><i class="fa fa-envelope"></i> ha_zellat@esi.dz</li>
                    <li><i class="fa fa-home"></i>  </li>
                  </ul>
                </div>
                <!-- Widget --> 
              </div>
              {{-- <div class="col-md-6">
                <div class="widget">
                  <h4 class="widget-title">Social Profiles</h4>
                  <p>You Fallow us on Social Media.</p>
                  <div class="social-links"> <a title="" href="#"><i class="fa fa-facebook"></i></a> <a title="" href="#"><i class="fa fa-twitter"></i></a> <a title="" href="#"><i class="fa fa-google-plus"></i></a> <a title="" href="#"><i class="fa fa-vimeo"></i></a> <a title="" href="#"><i class="fa fa-linkedin"></i></a> </div>
                </div>
                <!-- Widget --> 
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner Page Wrapper End --> 
@endsection