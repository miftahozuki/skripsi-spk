<header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
          aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/img/logo.png') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list">
              <div class="btn clock">12 : 10 : 00</div>
            </div>
          </div>
          <div class="d-none d-md-flex">
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
              </svg>
            </a>
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
              </svg>
            </a>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                  <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                </svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Terkini</h3>
                  </div>
                  <div class="list-group list-group-flush list-group-hoverable">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Weather</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Nothing to see Lorem ipsum dolor sit amet.
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
              aria-label="Open user menu">
              <div><span class="avatar avatar-sm me-2"
                style="background-image: url('{{ Auth::user()->img ? Auth::user()->img : asset('assets/img/user.svg') }}')"></span>
            </div>
              <div class="d-none d-xl-block ps-2">
                <div>{{ Auth::user()->name }}</div>
                <div class="mt-1 small text-muted">{{ Auth::user()->username }}</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="{{ url('admin/profile') }}" class="dropdown-item">Settings</a>
              <a href="" class="dropdown-item" data-bs-toggle="modal"
              data-bs-target="#exit" >Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
          <div class="container-xl">
            <ul class="navbar-nav">
              <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Beranda
                  </span>
                </a>
              </li>
              <li class="nav-item {{ Route::is('data-variabel.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('data-variabel.index') }}">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="bi bi-boxes"></i>
                  </span>
                  <span class="nav-link-title">
                    Data Variabel
                  </span>
                </a>
              </li>
              <li class="nav-item {{ Route::is('data-himpunan.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('data-himpunan.index') }}">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="bi bi-alt"></i>
                  </span>
                  <span class="nav-link-title">
                    Data Himpunan Fuzzy
                  </span>
                </a>
              </li>
              <li class="nav-item {{ Route::is('data-karyawan.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('data-karyawan.index') }}">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="bi bi-people-fill"></i>
                  </span>
                  <span class="nav-link-title">
                    Data Alternatif
                  </span>
                </a>
              </li>
              <li class="nav-item {{ Route::is('data-penilaian.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('data-penilaian.index') }}">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="bi bi-pencil-square"></i>
                  </span>
                  <span class="nav-link-title">
                    Data Penilaian
                  </span>
                </a>
              </li>
              <li class="nav-item {{ Route::is('data-perhitungan.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ Route('data-perhitungan.index') }}">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="bi bi-calculator-fill"></i>
                  </span>
                  <span class="nav-link-title">
                    Data Perhitungan
                  </span>
                </a>
              </li>
              <li class="nav-item {{ Route::is('data-hasil-akhir') ? 'active' : '' }}">
                <a class="nav-link" href="{{ Route('data-hasil-akhir') }}">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block">
                    <i class="bi bi-graph-down"></i>
                  </span>
                  <span class="nav-link-title">
                    Data Hasil Akhir
                  </span>
                </a>
              </li>
            </ul>
            <!-- end nav -->
          </div>
        </div>
      </div>

<!-- modal -->
<div class="modal" id="exit" tabindex="-1">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="bi bi-exclamation-triangle-fill text-danger h1 me-3"></i> Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <span>Anda yakin ingin keluar?</span>
        </div>
      </div>
      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger"> <span class="me-2">Keluar</span>
        </form>
        <svg xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
      </button>
      </div>
    </div>
  </div>
</div>

    </header>