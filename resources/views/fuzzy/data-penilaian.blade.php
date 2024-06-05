@extends('layouts.index') @section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title"><i class="bi bi-pencil-square me-3"></i>Data Penilaian</h2>
            </div>
            <!-- Page title actions -->
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
                        <h3 class="card-title text-primary me-3"><i class="bi bi-table me-3"></i>Daftar Data Penilaian</h3>
                    </div>
                    <div class="table-responsive mx-4 mt-3">
                        <table id="tabel" class="table table-vcenter tabel">
                          <thead>
                            <tr>
                                <th class="text-white">No.</th>
                              <th class="w-75 text-center text-white">Nama</th>
                              <th class="text-white text-center">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($karyawan as $item)
                            <tr>
                                <td class="text-center">{{ $loop->index +1}}.</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    @if ($item->kriteria->isEmpty())
                                    <div class="btn-list flex-nowrap justify-content-center">
                                      <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                      data-bs-target="#input-nilai{{ $item->id_karyawan }}"><i class="bi bi-plus-lg pe-2"></i> Input </a>
                                  </div>
                                  @else
                                  <div class="btn-list flex-nowrap justify-content-center">
                                    <a href="#" class="btn btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#edit-nilai{{ $item->id_karyawan }}"><i class="bi bi-pencil-square pe-2"></i> Edit </a>
                                </div>
                                    @endif
                                </td>
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

@foreach($karyawan as $row)
<!-- modal -->
<div class="modal" id="input-nilai{{ $row->id_karyawan }}" tabindex="-1">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Input Nilai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- <form action="{{ route('data-penilaian.store') }}" method="POST">
        @csrf --}}
        <div class="modal-body">
            @foreach ($kriteria as $item)
            <form action="{{ route('data-penilaian.store') }}" method="POST">
            @csrf
          <div class="mb-3">
            <label class="form-label">{{ $item->kriteria }}</label>
            <input type="hidden" name="karyawan_id" value="{{ $row->id_karyawan }}">
            <input type="text" class="form-control" name="kriteria[{{$item->id_kriteria}}]" required>
          </div>
          @endforeach
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">
            <i class="bi bi-floppy-fill me-2"></i>
            Simpan
        </button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <!-- modal -->
<div class="modal" id="edit-nilai{{ $row->id_karyawan }}" tabindex="-1">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Nilai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- <form action="{{ route('data-penilaian.store') }}" method="POST">
        @csrf --}}
        <div class="modal-body">
            @foreach ($row->kriteria as $item)
            <form action="{{ route('data-penilaian.store') }}" method="POST">
            @csrf
          <div class="mb-3">
            <label class="form-label">{{ $item->kriteria }}</label>
            <input type="hidden" name="karyawan_id" value="{{ $row->id_karyawan }}">
            <input type="text" class="form-control" name="kriteria[{{$item->id_kriteria}}]" value="{{ $item->pivot->nilai }}">
          </div>
          @endforeach
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">
            <i class="bi bi-floppy-fill me-2"></i>
            Simpan
        </button>
        </div>
    </form>
      </div>
    </div>
  </div>

  @endforeach
@endsection