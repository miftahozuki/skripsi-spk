@extends('layouts.index') @section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title"><i class="bi bi-graph-down me-3"></i>Data Hasil Akhir</h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <i class="bi bi-printer-fill me-2"></i>
                        Cetak Data
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                        data-bs-target="#modal-report" aria-label="Create new report">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-primary me-3"><i class="bi bi-table me-3"></i>Data Hasil Akhir</h3>
                    </div>
                    <div class="table-responsive mx-4 mt-3">
                        <table id="tabel" class="table table-vcenter">
                          <thead>
                            <tr>
                                <th class="text-white">No.</th>
                              <th class="text-center text-white">Nama</th>
                              <th class="text-white text-center">Masa Kerja</th>
                              <th class="text-white text-center">Pendidikan</th>
                              <th class="text-white text-center">Posisi</th>
                              <th class="text-white text-center">Beban Kerja</th>
                              <th class="text-white text-center">Kehadiran</th>
                              <th class="text-white text-center">Fire Strength</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach(range(1, 5) as $index)
                            <tr>
                                <td class="text-center">{{ $index }}.</td>
                                <td>Karyawan {{ $index }}</td>
                                <td class="text-center">0</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0,34</td>
                            </tr>
                        @endforeach                        
                          </tbody>
                        </table>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>

@endsection