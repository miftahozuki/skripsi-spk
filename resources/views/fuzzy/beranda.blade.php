@extends('layouts.index')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              {{-- <div class="page-pretitle">
                Overview
              </div> --}}
              <h2 class="page-title">
                <i class="bi bi-house-fill me-3"></i> Dashboard
              </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
              <h2 class="page-title">Selamat datang, {{ Auth::user()->name }}!</h2>
              {{-- <div class="btn-list">
                <span class="d-none d-sm-inline">
                  <a href="#" class="btn">
                    New view
                  </a>
                </span>
                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                  data-bs-target="#modal-report">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                  Create new report
                </a>
                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                  data-bs-target="#modal-report" aria-label="Create new report">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                </a>
              </div> --}}
            </div>
            {{-- end --}}
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row row-deck row-cards">

            <div class="col-12">
              <div class="card card-md">
                <div class="card-stamp card-stamp-lg">
                  <div class="card-stamp-icon bg-primary">
                    <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path
                        d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                      <path d="M10 10l.01 0" />
                      <path d="M14 10l.01 0" />
                      <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                    </svg>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-10">
                      <h3 class="h1">Sistem Pendukung Keputusan Metode FUZZY TAHANI</h3>
                      <div class="markdown text-muted">
                        <p class="text-justify">Sitem Pendukung Keputusan (SPK) merupakan suatu sistem informasi spesifik yang ditujukan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur. </p> 
                        <p class="text-justify">Metode Fuzzy database model Tahani ini masih tetap menggunakan relasi standar, hanya saja model ini menggunakan teori himpunan fuzzy untuk mendapatkan informasi pada query-nya. Tahani mendeskripsikan suatu metode pemrosesan query fuzzy dengan didasarkan atas manipulasjustify
                        {{-- <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank"
                          rel="noopener">Download icons</a> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
   
            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-status-start bg-primary"></div>
                <div class="card-header justify-content-between">
                  <a href="{{ url('admin/data-variabel') }}" class="card-title text-muted h2 stretched-link">Data Variabel</a>
                  <i class="card-title h1 bi bi-boxes me-3 text-muted"></i>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-status-start bg-primary"></div>
                <div class="card-header justify-content-between">
                  <a href="{{ url('admin/data-himpunan') }}" class="card-title text-muted h2 stretched-link">Data Himpunan Fuzzy</a>
                  <i class="card-title h1 bi bi-alt me-3 text-muted"></i>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-status-start bg-primary"></div>
                <div class="card-header justify-content-between">
                  <a href="{{ url('admin/data-karyawan') }}" class="card-title text-muted h2 stretched-link">Data Alternatif</a>
                  <i class="card-title h1 bi bi-people-fill me-3 text-muted"></i>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-status-start bg-primary"></div>
                <div class="card-header justify-content-between">
                  <a href="{{ url('admin/data-penilaian') }}" class="card-title text-muted h2 stretched-link">Data Penilaian</a>
                  <i class="card-title h1 bi bi-pencil-square me-3 text-muted"></i>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-status-start bg-primary"></div>
                <div class="card-header justify-content-between">
                  <a href="{{ url('admin/data-perhitungan') }}" class="card-title text-muted h2 stretched-link">Data Perhitungan</a>
                  <i class="card-title h1 bi bi-calculator-fill me-3 text-muted"></i>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4">
              <div class="card">
                <div class="card-status-start bg-primary"></div>
                <div class="card-header justify-content-between">
                  <a href="{{ url('admin/data-hasil-akhir') }}" class="card-title text-muted h2 stretched-link">Data Hasil Akhir</a>
                  <i class="card-title h1 bi bi-graph-down me-3 text-muted"></i>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
@endsection