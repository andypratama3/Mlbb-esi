@extends('layouts.user')
@section('content')
<header class="header">
    <div class="top-left-rect1"></div>
    <div class="top-left-rect2"></div>
    <div class="hero"></div>
    {{-- <!-- <img src="{{ asset('assets/img/orange-orb.png') }}" alt="" class="orange-orb" /> --> --}}
    <img src="{{ asset('assets/img/blue-orb.gif') }}" alt="" class="blue-orb" />
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="left-content">
            <p class="date">XX - XX Agustus 2024</p>
            <img
              src="{{ asset('assets/img/logo-samarindasquare.png') }}"
              alt=""
              class="logo-samarindasquare"
            />
            <a href="{{ route('registrasi.index') }}" class="register mt-5">Register Now</a>
          </div>
        </div>
        <div class="col-6">
          <div class="right-content">
            <img src="{{ asset('assets/img/logo-event.png') }}" alt="" class="logo-event" />
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container-sponsor">
    <div class="sponsor">
      <img src="{{ asset('assets/img/logo-esi.png') }}" alt="" class="logo-esi" />
      <img src="{{ asset('assets/img/logo-piemlabs.png') }}" alt="" class="logo-piemlabs" />
      <img
        src="{{ asset('assets/img/logo-telkomsel.png') }}"
        alt=""
        class="logo-telkomsel"
      />
      <img
        src="{{ asset('assets/img/logo-samarindasquare.png') }}"
        alt=""
        class="logo-samarindasquare"
      />
    </div>
  </div>
  <main>
    <section class="streaming-section">
      <div class="container">
        <div class="row">
          <div class="col-6 img-streaming">
            <img src="{{ asset('assets/img/streaming-img.png') }}" alt="" class="w-75" />
          </div>
          <div class="col-5 text-streaming">
            <p class="p-streaming">Live Streaming</p>
            <h2>WATCH UNLIMITED LIVE STREAMING.</h2>
            <p>
              Gamic is the best way to explore the world of gaming. With a
              new, fully interactive website.
            </p>
            <a href="#">WATCH NOW!</a>
          </div>
        </div>
      </div>
    </section>
    <section class="about-section" id="about">
      <h2>about</h2>
      <div class="container text-center d-flex justify-content-center px-0">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="image">
              <a href="#">
                <img src="{{ asset('assets/img/jadwal-lomba-img.png') }}" alt="" />
              </a>
            </div>
            <p class="my-3">Jadwal Lomba</p>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="image">
              <a href="#">
                <img src="{{ asset('assets/img/cara-daftar-img.png') }}" alt="" />
              </a>
            </div>
            <p class="my-3">Cara Daftar Lomba</p>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="image">
              <a href="#">
                <img src="{{ asset('assets/img/coming-soon-img.png') }}" alt="" />
              </a>
            </div>
            <p class="my-3">Coming Soon</p>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
