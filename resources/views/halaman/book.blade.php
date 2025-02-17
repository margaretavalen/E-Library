@extends('layout/aplikasi')

@section('awal')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Book</h1>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Book</li>
          </ol>
      </nav>
  </div>
</div>
@endsection

@section('konten')
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Books Directory</h5>
        <h1 class="mb-5">All of Books</h1>
    </div>
    <div class="text-center wow fadeInUp product-filters" data-wow-delay="0.1s">
        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5" style="list-style-type: none;">
            <li class="nav-item active" data-filter="*">
                <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="">
                    <i class="bx bx-folder fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">All</small>
                        <h6 class="mt-n1 mb-0">Genre</h6>
                    </div>
                </a>
            </li>
            <li class="nav-item" data-filter=".genre_1">
                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3" data-bs-toggle="pill" href="">
                    <i class="bx bx-landscape fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Genre</small>
                        <h6 class="mt-n1 mb-0">Fantasi</h6>
                    </div>
                </a>
            </li>
            <li class="nav-item" data-filter=".genre_2">
                <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="">
                    <i class="bx bx-ghost fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Genre</small>
                        <h6 class="mt-n1 mb-0">Horror</h6>
                    </div>
                </a>
            </li>
            <li class="nav-item" data-filter=".genre_3">
                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="">
                    <i class="bx bx-run fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Genre</small>
                        <h6 class="mt-n1 mb-0">Action</h6>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-pane fade show p-0 active">
        <div class="row row-bottom-padded-md fade show product-lists">
            @foreach ($databuku as $item)
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
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $(".product-filters li").on('click', function () {
            // alert('ji');
            $(".product-filters li").removeClass("active");
            $(this).addClass("active");
        
            var selector = $(this).attr('data-filter');
        
            $(".product-lists").isotope({
                filter: selector,
            });
        });

        $(".product-lists").isotope();
    });
</script>
@endsection