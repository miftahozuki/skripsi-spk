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
                    <a href="{{ route('data-hasil-akhir.cetak') }}" class="btn btn-primary d-none d-sm-inline-block" target="_blank">
                        <i class="bi bi-printer-fill me-2"></i>
                        Cetak Data
                    </a>
                    <a href="{{ route('data-hasil-akhir.cetak') }}" class="btn btn-primary d-sm-none btn-icon" target="_blank" aria-label="Create new report">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg>
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
                              @foreach($kriteria as $item)
                              <th class="text-white text-center">{{ $item->kriteria }} <br>
                                {{$item->himpunan->whereIn('id_himpunan', $result_id)->first()->nama_himpunan ?? '-'}}
                            </th>
                              @endforeach
                              <th class="text-white text-center">Fire Strength</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($karyawans as $karyawan)
                            <tr>
                                <td class="text-center">{{ $loop->index +1}}.</td>
                                <td>{{ $karyawan->nama }}</td>
                                @foreach ($kriteria as $item)
                                <td class="text-center">
                                    @if($karyawan->himpunan->where('kriteria_id', $item->id_kriteria)->first())
                                        {{ $karyawan->himpunan->where('kriteria_id',
                                        $item->id_kriteria)->first()->pivot->nilai }}
                                        @else
                                        -
                                    @endif
                                </td>
                                @endforeach
                                <td class="text-center">{{ number_format($karyawan->himpunan->sum('pivot.nilai') / ($karyawan->himpunan->count()?: 1), 2)?? '0.00' }}</td>
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