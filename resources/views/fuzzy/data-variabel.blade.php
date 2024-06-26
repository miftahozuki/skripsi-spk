@extends('layouts.index') @section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title"><i class="bi bi-boxes me-3"></i>Data Variabel</h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#add">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Tambah
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                        data-bs-target="#add" aria-label="Create new report">
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
                    {{-- <div class="card-header bg-primary justify-content-center">
                        <h3 class="card-title text-white me-8">Daftar Data Variabel</h3>
                    </div> --}}
                    <div class="table-responsive">
                        <table id="tabel" class="table">
                            <thead>
                                <tr>
                                    <th class="text-white">NO</th>
                                    <th class="w-100 text-center text-white">
                                        NAMA VARIABEL
                                    </th>
                                    <th class="text-center text-white">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $item)
                                <tr>
                                    <td>{{$loop->index +1 }}</td>
                                    <td class="text-center">{{ $item->kriteria }}</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success"> Edit </a>
                                            <a href="{{ route('data-variabel.destroy', $item->id_kriteria) }}" class="btn btn-outline-danger" data-confirm-delete="true"> Hapus </a>
                                        </div>
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

<!-- modal -->
  <div class="modal" id="add" tabindex="-1">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Variabel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('data-variabel.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nama Variabel</label>
            <input type="text" class="form-control" name="kriteria"/>
          </div>
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
  

@endsection