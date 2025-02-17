@extends('layout/aplikasi')

@section('css')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('in')
<div class="item-footer">
  <p><small>&copy; Copyright &copy;<script>
        document.write(new Date().getFullYear());
      </script> Made by Margareta Valencia</small></p>
</div>
@endsection

@section('konten')
<div class="item-work">
  <div class="item-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Rules</span>
        <h2 class="item-heading">Aturan Baca Buku</h2>
      </div>
    </div>
    <div class="blog-card">
      <div class="card-info">
        <p><b>1. Setiap Pengguna hanya diijinkan membaca 1 buah buku dalam 1 hari</b></p>
        <p><b>2. Pengguna dapat mendengarkan sample buku audio sepuasnya</b></p>
        <p><b>3. Semua buku atau buku audio tidak dapat didownload</b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="blog-entry">
          <a href="blog.html" class="blog-img"><img src="{{asset('img/book1.jpg')}}" class="img-responsive" alt="picture"></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="blog-entry">
          <a href="blog.html" class="blog-img"><img src="{{asset('img/book2.jpg')}}" class="img-responsive" alt="picture"></a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="blog-entry">
          <a href="blog.html" class="blog-img"><img src="{{asset('img/book3.jpg')}}" class="img-responsive" alt="picture"></a>
        </div>
      </div>
    </div>

    <div id="get-in-touch" class="item-bg-color">
      <div class="item-narrow-content">
        <div class="row">
          <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
            <h2>Get in Touch!</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
            <p class="item-lead">If you need something, you can contact here</p>
            <p><a href="contact.html" class="btn btn-primary btn-learn">Contact me!</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection