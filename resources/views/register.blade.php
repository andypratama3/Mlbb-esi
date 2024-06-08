@extends('layouts.user')
@push('css_user')
<link rel="stylesheet" href="{{ asset('assets/css/register.css') }}" />
@endpush
@section('content')
<header>
    <div class="container">
      <h1>REGISTRATION</h1>
      <p>Isi Data Yang Sesuai!</p>
      <div class="row">
        <div class="col-8 left-container">
          <div class="row .row-tim">
            <div class="col-6">
              <div class="mb-3">
                <label for="team-name" class="form-label">Nama Tim</label>
                <input
                  type="text"
                  class="form-control"
                  id="team-name"
                  placeholder="Nama Tim"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="leader-contact" class="form-label"
                  >Kontak Ketua Tim</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="leader-contact"
                  placeholder="0812-3456-789"
                />
              </div>
            </div>
            <hr />
          </div>
          <div class="row .row-1">
            <div class="col-6">
              <div class="mb-3">
                <label for="player-1" class="form-label">Nama Pemain 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="player-1"
                  placeholder="Pemain 1"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="id-1" class="form-label"
                  >ID (Server) Pemain 1</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="id-1"
                  placeholder="123456789 (1234)"
                />
              </div>
            </div>
          </div>
          <div class="row .row-2">
            <div class="col-6">
              <div class="mb-3">
                <label for="player-2" class="form-label">Nama Pemain 2</label>
                <input
                  type="text"
                  class="form-control"
                  id="player-2"
                  placeholder="Pemain 2"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="id-2" class="form-label"
                  >ID (Server) Pemain 2</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="id-1"
                  placeholder="123456789 (1234)"
                />
              </div>
            </div>
          </div>
          <div class="row .row-3">
            <div class="col-6">
              <div class="mb-3">
                <label for="player-3" class="form-label">Nama Pemain 3</label>
                <input
                  type="text"
                  class="form-control"
                  id="player-3"
                  placeholder="Pemain 3"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="id-3" class="form-label"
                  >ID (Server) Pemain 3</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="id-1"
                  placeholder="123456789 (1234)"
                />
              </div>
            </div>
          </div>
          <div class="row .row-4">
            <div class="col-6">
              <div class="mb-3">
                <label for="player-4" class="form-label">Nama Pemain 4</label>
                <input
                  type="text"
                  class="form-control"
                  id="player-4"
                  placeholder="Pemain 4"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="id-1" class="form-label"
                  >ID (Server) Pemain 4</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="id-4"
                  placeholder="123456789 (1234)"
                />
              </div>
            </div>
          </div>
          <div class="row .row-5">
            <div class="col-6">
              <div class="mb-3">
                <label for="player-5" class="form-label">Nama Pemain 5</label>
                <input
                  type="text"
                  class="form-control"
                  id="player-5"
                  placeholder="Pemain 5"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="id-1" class="form-label"
                  >ID (Server) Pemain 5</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="id-1"
                  placeholder="123456789 (1234)"
                />
              </div>
            </div>
            <hr />
          </div>
          <div class="row .row-backup">
            <div class="col-6">
              <div class="mb-3">
                <label for="player-backup" class="form-label"
                  >Nama Pemain Cadangan</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="player-backup"
                  placeholder="Pemain Cadangan"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="id-1" class="form-label"
                  >ID (Server) Pemain Cadangan</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="id-cadangan"
                  placeholder="123456789 (1234)"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 right-container">
          <img src="{{ asset('assets/img/logo-event.png') }}" alt="" />
        </div>
      </div>
    </div>
</header>
@endsection
