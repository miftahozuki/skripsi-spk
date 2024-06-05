@extends('layouts.index') @section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title"><i class="bi bi-box-fill me-3"></i>Data Himpunan Fuzzy</h2>
            </div>
            <!-- Page title actions -->
            <!-- end -->
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        @foreach ($kriteria as $tabel)
            
        <div class="row row-cards mb-5">
            <div class="col-12">
                <div class="card">
                     <div class="card-header justify-content-between">
                        <h3 class="card-title text-primary"><i class="bi bi-table"></i> Fungsi Keanggotaan Variabel {{ $tabel->kriteria }}</h3>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#add{{ $tabel->id_kriteria }}">
                        <i class="bi bi-plus-lg"></i>
                        Tambah
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                        data-bs-target="#add{{ $tabel->id_kriteria }}" aria-label="Create new report">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                    </a>
                    </div>
                    <div class="table-responsive mx-4">
                        <table id="tabel" class="table">
                            <thead>
                                <tr>
                                    <th class="text-white">NO</th>
                                    <th class="w-50 text-center text-white">
                                        Nama Himpunan Fuzzy
                                    </th>
                                    <th class="w-25 text-center text-white">Jenis Kurva</th>
                                    <th class="text-center text-white">Domain</th>
                                    <th class="text-center text-white">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tabel->himpunan as $himpunan)
                                <tr>
                                    <td>{{ $loop->index  +1}}.</td>
                                    <td>{{ $himpunan->nama_himpunan }}</td>
                                    <td class="text-center">{{ $himpunan->jenis_kurva }}</td>
                                    <td class="text-center">[{{ implode(',', array_filter([$himpunan->nilai_a, $himpunan->nilai_b, $himpunan->nilai_c, $himpunan->nilai_d])) }}]</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $himpunan->id_himpunan }}"> Edit </a>
                                            <a href="#" class="btn btn-outline-danger"> Hapus </a>
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
        @endforeach

    </div>
</div>

@foreach($kriteria as $tabel)
<!-- modal -->
<div class="modal" id="add{{ $tabel->id_kriteria }}" tabindex="-1">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah {{ $tabel->kriteria }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('data-himpunan.store') }}" method="POST">
        @csrf
        <div class="modal-body">
            <input type="hidden" name="kriteria_id" value="{{ $tabel->id_kriteria }}">
          <div class="mb-3">
            <label class="form-label">Nama Himpunan Fuzzy</label>
            <input type="text" class="form-control" name="nama_himpunan" required/>
          </div>
          <div class="mb-3">
            <label class="form-label">Pilih Kurva</label>
            <select class="form-select kurva" name="jenis_kurva" aria-label="Default select example">
                <option>--Pilih Kurva--</option>
                <option>Bahu Kiri</option>
                <option>Trapesium</option>
                <option>Bahu Kanan</option>
              </select>
          </div>
          <div class="mb-3 d-none nilai_a">
            <label class="form-label">a</label>
            <input type="number" class="form-control" name="nilai_a" required/>
          </div>
          <div class="mb-3 d-none nilai_b">
            <label class="form-label">b</label>
            <input type="number" class="form-control" name="nilai_b" required/>
          </div>
          <div class="mb-3 d-none nilai_c">
            <label class="form-label">c</label>
            <input type="number" class="form-control" name="nilai_c"/>
          </div>
          <div class="mb-3 d-none nilai_d">
            <label class="form-label">d</label>
            <input type="number" class="form-control" name="nilai_d"/>
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


<!-- modal edit-->
@foreach ($tabel->himpunan as $himpunan)
<div class="modal" id="edit{{$himpunan->id_himpunan}}" tabindex="-1">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit {{ $tabel->kriteria }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('data-himpunan.update', $himpunan->id_himpunan) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">
            <input type="hidden" name="kriteria_id" value="{{ $tabel->id_kriteria }}">
          <div class="mb-3">
            <label class="form-label">Nama Himpunan Fuzzy</label>
            <input type="text" class="form-control" name="nama_himpunan" value="{{ $himpunan->nama_himpunan }}" required/>
          </div>
          <div class="mb-3">
            <label class="form-label">Pilih Kurva</label>
            <select class="form-select kurva" name="jenis_kurva" aria-label="Default select example">
                <option {{ $himpunan->jenis_kurva == 'Bahu Kiri' ? 'selected' : '' }}>Bahu Kiri</option>
                <option {{ $himpunan->jenis_kurva == 'Trapesium' ? 'selected' : '' }}>Trapesium</option>
                <option {{ $himpunan->jenis_kurva == 'Bahu Kanan' ? 'selected' : '' }}>Bahu Kanan</option>
              </select>
          </div>
          <div class="mb-3 nilai_a">
            <label class="form-label">a</label>
            <input type="number" class="form-control" name="nilai_a" value="{{ $himpunan->nilai_a }}" required/>
          </div>
          <div class="mb-3 nilai_b">
            <label class="form-label">b</label>
            <input type="number" class="form-control" name="nilai_b" value="{{ $himpunan->nilai_b }}" required/>
          </div>
          <div class="mb-3 {{$himpunan->nilai_c ? '' : 'd-none'}} nilai_c">
            <label class="form-label">c</label>
            <input type="number" class="form-control" value="{{ $himpunan->nilai_c }}" name="nilai_c"/>
          </div>
          <div class="mb-3 {{$himpunan->nilai_d ? '' : 'd-none'}} nilai_d">
            <label class="form-label">d</label>
            <input type="number" class="form-control" value="{{ $himpunan->nilai_d }}" name="nilai_d"/>
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
@endforeach
@endforeach

@endsection

@push('script')
<script>
    // Pastikan jQuery sudah dimuat sebelum skrip ini dijalankan
    $(document).ready(function() {
        let a = $(".nilai_a");
        let b = $(".nilai_b");
        let c = $(".nilai_c");
        let d = $(".nilai_d");

        $(".kurva").on("change", function() {
            console.log('halooooo');
        switch($(this).val()) {
            case "Bahu Kiri":
            case "Bahu Kanan":
                a.add(b).removeClass('d-none');
                c.add(d).addClass('d-none');
                break;
            case "Trapesium":
                a.add(b).add(c).add(d).removeClass('d-none');
                break;
            default:
                a.add(b).add(c).add(d).addClass('d-none');
                break;
        }

});


    });
  </script>
@endpush