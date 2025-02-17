@extends('layout/aplikasi')

@section('awal')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Audio Book</h1>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">Audiobook</li>
          </ol>
      </nav>
  </div>
</div>
@endsection

@section('konten')
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="section-title ff-secondary text-center text-primary fw-normal">Audio Book</h5>
      <h1 class="mb-5">Most Popular Audio Book</h1>
    </div>
    <div class="item-work">
      <div class="item-narrow-content">
        @foreach ($bukuaudio as $audio)
        <div class="card-container">
          <div class="card u-clearfix">
            <div class="row">
              <div class="card-body">
                <h2 class="card-title">{{ $audio->judul }}</h2>
                <span class="card-author subtle">{{ $audio->penulis }}</span>
                <span class="card-description subtle">{{ $audio->sinopsis }}</span>
                {{-- <button class="card-read" src="/sound/{{ $audio->sample }}">Play</button> --}}
                <audio controls controlsList="nodownload">
                  <source src="/sound/{{ $audio->sample }}" type="audio/mpeg">
              </audio>
              </div>
              <img src="/img/{{ $audio->gambar }}" alt="" class="card-media" />
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection