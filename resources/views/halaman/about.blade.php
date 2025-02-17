@extends('layout/aplikasi')

@section('awal')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">About</li>
          </ol>
      </nav>
  </div>
</div>
@endsection

@section('konten')
<div class="container-xxl py-5">
  <div class="container">
      <div class="row g-5 align-items-center">
          <div class="col-lg-6">
              <div class="row g-3">
                  <div class="col-6 text-start">
                      <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('img/1.jpg') }}">
                  </div>
                  <div class="col-6 text-start">
                      <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/2.jpg') }}" style="margin-top: 25%;">
                  </div>
                  <div class="col-6 text-end">
                      <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/3.jpg') }}">
                  </div>
                  <div class="col-6 text-end">
                      <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('img/6.jpg') }}">
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
              <h1 class="mb-4">Welcome to E-Library</h1>
              <p class="mb-4">E-Library merupakan aplikasi berbasis web yang memberikan layanan perpustakaan digital untuk
                memudahkan Anda meminjam buku secara online.</p>
              <p class="mb-4">Perpustakaan digital ini diharapkan menjadi referensi dalam bidang pendidikan dan kebudayaan dengan
                menyediakan akses informasi dan pengetahuan yang lengkap dalam bentuk koleksi digital.</p>
              <div class="row g-4 mb-4">
                  <div class="col-sm-6">
                      <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                          <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">1</h1>
                          <div class="ps-4">
                              <p class="mb-0">Trusted</p>
                              <h6 class="text-uppercase mb-0">Website</h6>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                          <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">2</h1>
                          <div class="ps-4">
                              <p class="mb-0">Honest</p>
                              <h6 class="text-uppercase mb-0">Dependable</h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Rules</h5>
            <h1 class="mb-5">E-Library Rules</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-sm-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <h5>1</h5>
                        <p>Setiap user diberi waktu peminjaman hanya satu minggu dan harus mengembalikan buku sesuai tanggal pengembalian yang ditetapkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <h5>2</h5>
                        <p>Apabila pengembalian melebihi tanggal yang ditetapkan, maka dikategorikan TERLAMBAT, dan akan dikenakan denda 1000/hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <h5>3</h5>
                        <p>Setiap user dapat mengakses dan dapat mendengarkan buku audio secara GRATIS tanpa ada denda dan batasan penggunaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection