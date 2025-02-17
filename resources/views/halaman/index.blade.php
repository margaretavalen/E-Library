@extends('layout/aplikasi')

@section('awal')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container my-5 py-5">
      <div class="row align-items-center g-5">
          <div class="col-lg-6 text-center text-lg-start">
              <h1 class="display-3 text-white animated slideInLeft">Read Our<br>Special Book</h1>
              <p class="text-white animated slideInLeft mb-4 pb-2">Elibrary dilengkapi dengan berbagai buku dan buku audio yang dapat dibaca kapan saja dimana saja.</p>
              <a href="{{ route('book') }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Baca Buku</a>
          </div>
          <div class="col-lg-6 text-center text-lg-end overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/Critical-Eleven.jpg') }}" alt="">
          </div>
      </div>
  </div>
</div>
@endsection

@section('konten')
<div class="container-xxl py-5">
  <div class="container">
      <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item rounded pt-3">
                  <div class="p-4">
                      <i class="bx bx-book text-primary mb-4 text-size"></i>
                      <h5>Best Books</h5>
                      <p>Berbagai macam buku dari berbagai genre dapat ditemukan disini</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item rounded pt-3">
                  <div class="p-4">
                      <i class="bx bx-music text-primary mb-4 text-size"></i>
                      <h5>Quality Audio Book</h5>
                      <p>Berbagai macam buku audio dilengkapi dengan kualitas suara yang bagus</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item rounded pt-3">
                  <div class="p-4">
                      <i class="bx bxs-user text-primary mb-4 text-size"></i>
                      <h5>Blog Author</h5>
                      <p>Blog tentang kisah maupun pengalaman author dari berbagai buku yang ada</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item rounded pt-3">
                  <div class="p-4">
                      <i class="bx bx-headphone text-primary mb-4 text-size"></i>
                      <h5>24/7 Service</h5>
                      <p>Buku dan buku audio dapat diakses dimana saja dan kapan saja</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

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
              <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('about') }}">Read More</a>
          </div>
      </div>
  </div>
</div>

<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="section-title ff-secondary text-center text-primary fw-normal">Books Directory</h5>
      <h1 class="mb-5">Most Popular Book</h1>
    </div>
    <div class="tab-pane fade show p-0 active">
      <div class="row row-bottom-padded-md fade show product-lists">
        @foreach ($data as $item)
        <div class="col-md-3 animate-box genre_{{ $item->kategori_id }}" data-animate-effect="fadeInLeft">
          <div class="d-flex align-items-center">
            <div class = "project">
              <img src="/img/{{$item->file_gambar}}" alt="">
              <div class="desc">
                  <div class="con">
                      <h3>{{$item->judul}}</h3>
                      <h4><b>By {{$item->pengarang}}</b></h4>
                      <p class="icon">{{$item->sinopsis}}</p>
                      <form action="{{ route('pinjam', $item->id)}}" method="post">
                      @csrf
                      <button type="submit" class="text-primary" style="all: unset;">Pinjam</button>
                      </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
      <div class="text-center">
          <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
          <h1 class="mb-5">Our Readers Say</h1>
      </div>
      <div class="owl-carousel testimonial-carousel">
          <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>Dengan adanya Elibrary ini jadi tidak harus mengunjungi perpustakaan untuk membaca.</p>
              <div class="d-flex align-items-center">
                  <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testi1.png') }}" style="width: 50px; height: 50px;">
                  <div class="ps-3">
                      <h5 class="mb-1">Lala Lisa</h5>
                      <small>Reader</small>
                  </div>
              </div>
          </div>
          <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>Adanya aplikasi Elibrary ini membantu saya dalam mencari informasi mengenai dunia.</p>
              <div class="d-flex align-items-center">
                  <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testi2.png') }}" style="width: 50px; height: 50px;">
                  <div class="ps-3">
                      <h5 class="mb-1">Jenny</h5>
                      <small>Reader</small>
                  </div>
              </div>
          </div>
          <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>Websitenya cukup menarik dan mudah untuk dipahami dan nyaman ketika membaca buku.</p>
              <div class="d-flex align-items-center">
                  <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testi3.png') }}" style="width: 50px; height: 50px;">
                  <div class="ps-3">
                      <h5 class="mb-1">Rose</h5>
                      <small>Reader</small>
                  </div>
              </div>
          </div>
          <div class="testimonial-item bg-transparent border rounded p-4">
              <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
              <p>Sangat membantu dalam hal mengisi waktu luang dengan membaca banyak buku disini.</p>
              <div class="d-flex align-items-center">
                  <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testi4.png') }}" style="width: 50px; height: 50px;">
                  <div class="ps-3">
                      <h5 class="mb-1">Jisoo</h5>
                      <small>Reader</small>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- <aside id="item-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url({{ asset('img/4.jpg') }});">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
              <div class="slider-text-inner">
                <div class="desc">
                  <h1>All about books</h1>
                  <h2>Berbagai macam buku dapat ditemukan disini</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url({{ asset('img/3.jpg') }});">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
              <div class="slider-text-inner">
                <div class="desc">
                  <h1>Borrow everything you need</h1>
                  <h2>Dapat meminjam buku apapun yang ingin dibaca</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url({{ asset('img/9.jpg') }});">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
              <div class="slider-text-inner">
                <div class="desc">
                  <h1>The Digital Library</h1>
                  <h2>Dapat diakses dimana saja dan kapan saja</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</aside>

<div class="item-about">
  <div class="item-narrow-content">
    <div class="row">
      <div class="col-md-6">
        <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{ asset('img/8.jpg') }});">
        </div>
      </div>
      <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="about-desc">
          <span class="heading-meta">Welcome</span>
          <h2 class="item-heading">What we are</h2>
          <p>E-Library merupakan aplikasi berbasis web yang memberikan layanan perpustakaan digital untuk memudahkan Anda meminjam buku secara online.</p>
          <p>Perpustakaan digital ini diharapkan menjadi referensi dalam bidang pendidikan dan kebudayaan dengan menyediakan akses informasi dan pengetahuan yang lengkap dalam bentuk koleksi digital.</p>
        </div>
        <div class="row padding">
          <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
            <a href="#" class="steps active">
              <p class="icon"><span><i class="icon-check"></i></span></p>
              <h3>We are <br>trusted</h3>
            </a>
          </div>
          <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
            <a href="#" class="steps">
              <p class="icon"><span><i class="icon-check"></i></span></p>
              <h3>Honest <br>Dependable</h3>
            </a>
          </div>
          <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
            <a href="#" class="steps">
              <p class="icon"><span><i class="icon-check"></i></span></p>
              <h3>Always <br>Improving</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="item-services">
  <div class="item-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Search</span>
        <h2 class="item-heading">You can search book here</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tabelbuku">
          <div class="card">
            <div class="card-body">
              <form method="GET">
                <input type="text" name="search_title" id="search_title" placeholder="Cari Buku" class="form-control" value="" onkeyup="forIndex()">
              </form>
              <br>
              <div id="hasil">
                <table class="table table-striped">
                  <tr>
                    <th>Gambar</th>
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Sinopsis</th>
                  </tr>
                  @foreach ($data as $buku)
                    <tr>
                      <td><a href="/halaman/book"><img src="/img/{{ $buku->file_gambar }}" width="100"></a></td>
                      <td>{{ $buku->isbn }}</td>
                      <td>{{ $buku->judul }}</td>
                      <td>{{ $buku->pengarang }}</td>
                      <td>{{ $buku->penerbit }}</td>
                      <td>{{ $buku->sinopsis }}</td>
                    </tr>
                  @endforeach
                </table>
                {{ $data->withQueryString()->links('pagination::bootstrap-4') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="item-work">
  <div class="item-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Recommendation</span>
        <h2 class="item-heading animate-box">Our recommendation for you</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project" style="background-image: url({{ asset('img/sherlock-holmes.jpg')}});">
          <div class="desc">
            <div class="con">
              <h3><a href="/halaman/book">Sherlock Holmes</a></h3>
              <span>By Sir Arthur Conan</span>
              <p class="icon">Sherlock Holmes adalah orang yang sangat pintar yang memakai fakta-fakta kecil untuk menyelesaikan misteri-misteri besar.</p>
              <a href="/halaman/book">More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project" style="background-image: url({{ asset('img/Critical-Eleven.jpg') }});">
          <div class="desc">
            <div class="con">
              <h3><a href="/halaman/book">Critical Eleven</a></h3>
              <span>By Ika Natassa</span>
              <p class="icon">Istilah critical eleven, sebelas menit paling kritis di dalam pesawat—tiga menit setelah take off dan delapan menit sebelum landing.</p>
              <a href="/halaman/book">More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project" style="background-image: url({{ asset('img/jingga_dan_senja.jpg') }});">
          <div class="desc">
            <div class="con">
              <h3><a href="/halaman/book">Jingga dan Senja</a></h3>
              <span>By Esti Kinasih</span>
              <p class="icon">Jingga dan Senja diterbitkan pertama kali pada tahun 2010, menceritakan kehidupan remaja SMA bernama Tari dan Ari.</p>
              <a href="/halaman/book">More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
        <div class="project" style="background-image: url({{ asset('img/The_Song_of_Achilles.jpg') }});">
          <div class="desc">
            <div class="con">
              <h3><a href="/halaman/book">The Song of Archilles</a></h3>
              <span>By Madeline Miller</span>
              <p class="icon">Patroclus, seorang pangeran muda yang kikuk, diasingkan ke istana Raja Peleus dan putranya yang sempurna, Achilles.</p>
              <a href="/halaman/book">More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="item-counter" class="item-counters" style="background-image: url({{ asset('img/13.png') }});"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="item-narrow-content">
    <div class="row">
      <p class="item-counter-label">“Whenever you read a good book, somewhere in the world a door opens to allow in more light.”</p>
    </div>
  </div>
</div>

<div class="item-blog">
  <div class="item-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <span class="heading-meta">Read</span>
        <h2 class="item-heading">About Writer</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="blog-entry">
          <a href="blog.html#blog1" class="blog-img"><img src="{{ asset('img/percyjackson.jpg') }}" class="img-responsive" alt="picture"></a>
          <div class="desc">
            <span><small>May 06, 2023 </small> | <small> Fantasy </small> </span>
            <h3><a href="blog.html#blog1">Rick Riordan Penulis Novel Percy Jackson and The Olympians</a></h3>
            <p>Rick memang penulis yang dekat dengan anak-anak. Suatu hari dia pun memutuskan menulis untuk anak-anak...</p>
            <a href="blog.html#blog1">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="blog-entry">
          <a href="blog.html#blog2" class="blog-img"><img src="{{ asset('img/sherlockholmes.jpeg') }}" class="img-responsive" alt="picture"></a>
          <div class="desc">
            <span><small>May 07, 2023 </small> | <small> Action </small></span>
            <h3><a href="blog.html#blog2">Arthur Conan Doyle, sosok penulis dibalik novel Sherlock Holmes</a></h3>
            <p>Saat kekurangan uang inilah, ia pun berinisiatif untuk menulis sebuah cerita yang lebih baik daripada cerita-cerita yang pernah ia buat sebelumnya...</p>
            <a href="blog.html#blog2">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection

