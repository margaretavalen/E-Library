@extends('layout/aplikasi')

@section('awal')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
          </ol>
      </nav>
  </div>
</div>
@endsection

@section('konten')
<div class="container-xxl py-5">
  <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
          <h1 class="mb-5">Contact For Any Query</h1>
      </div>
      <div class="row g-4">
          <div class="col-12">
              <div class="row gy-4">
                  <div class="col-md-4">
                      <h5 class="section-title ff-secondary fw-normal text-start text-primary">Alamat</h5>
                      <p><i class="bx bx-map-alt text-primary me-2"></i>Blackpink Street, Suite 17 Semarang</p>
                  </div>
                  <div class="col-md-4">
                      <h5 class="section-title ff-secondary fw-normal text-start text-primary">Email</h5>
                      <p><i class="fa fa-envelope-open text-primary me-2"></i>elibrary@gmail.com</p>
                  </div>
                  <div class="col-md-4">
                      <h5 class="section-title ff-secondary fw-normal text-start text-primary">Telepon</h5>
                      <p><i class="bx bxs-phone text-primary me-2"></i>+62 8123 4567 890</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
              <img class="position-relative rounded w-100 h-100"
                  src="{{ asset('img/7.jpg')}}"
                  frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                  tabindex="0">
          </div>
          <div class="col-md-6">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                  <form>
                      <div class="row g-3">
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input type="text" class="form-control" id="name" placeholder="Your Name">
                                  <label for="name">Your Name</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input type="email" class="form-control" id="email" placeholder="Your Email">
                                  <label for="email">Your Email</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-floating">
                                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                                  <label for="subject">Subject</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-floating">
                                  <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                  <label for="message">Message</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection