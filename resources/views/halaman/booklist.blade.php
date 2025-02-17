@extends('layout/aplikasi')

@section('awal')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">List Book</h1>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item text-white active" aria-current="page">List Book</li>
          </ol>
      </nav>
  </div>
</div>
@endsection

@section('konten')

<div class="container-xxl py-5">
  <div class="container">
    <div class="tab-content">
      <div class="tab-pane fade show p-0 active">
          <div class="row g-4">
            @foreach ($lists as $pinjam)
            <div class="col-lg-6">
              <div class="d-flex align-items-center">
                <img class="flex-shrink-0 img-fluid rounded" src="/img/{{ $pinjam->buku->file_gambar }}" alt="" style="width: 80px;">
                <div class="w-100 d-flex flex-column text-start ps-4">
                  <h5 class="d-flex justify-content-between border-bottom pb-2">
                    <span>{{ $pinjam->buku->judul }}</span>
                    {{-- itung denda --}}
                    @php
                      $denda = (strtotime(date("Y-m-d")) - strtotime($pinjam->tgl_batas_kembali)) / 86400; 
                    @endphp
                    {{-- jika tidak ada tgl kembali maka muncul tombol kembalikan --}}
                    @if (!$pinjam->tgl_kembali)
                      <form action="{{ route('kembalikan', ['peminjaman'=>$pinjam->id,'denda'=>($denda>0 ? $denda : 0)])}}" method="post">
                        @csrf
                        <button type="submit" class="text-primary" style="all: unset;">Kembalikan</button>
                      </form>                      
                      @endif
                  </h5>
                  <small class="fst-italic">Tanggal Pinjam : {{ $pinjam->tgl_pinjam }}</small>
                  {{-- hitung denda jika kelewat tgl batas kembali --}}
                  @if (strtotime(date("Y-m-d")) > strtotime($pinjam->tgl_batas_kembali))
                    <small class="fst-italic text-danger">Tenggat Waktu : {{ $pinjam->tgl_batas_kembali }}</small>
                    <small class="fst-italic text-danger">Denda : Rp {{ $denda * 1000 }} </small>
                  @else
                    <small class="fst-italic">Tenggat Waktu : {{ $pinjam->tgl_batas_kembali }}</small>
                  @endif
                  {{-- jika ada tgl kembali maka ditambahkan tgl kembali --}}
                  @if ($pinjam->tgl_kembali)
                    <small class="fst-italic">Tanggal Kembali : {{ $pinjam->tgl_kembali }}</small>                      
                  @endif
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
  </div>
</div>
@endsection