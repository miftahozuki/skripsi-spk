@extends('layouts.index') @section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title"><i class="bi bi-calculator-fill me-3"></i> Data Perhitungan</h2>
            </div>
            <!-- Page title actions -->
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards mb-6">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-primary"><i class="bi bi-table me-2"></i> Hitung berdasarkan Query
                        </h3>
                    </div>
                    <div class="container">
                        <div class="justify-content-center row g-3 mb-5">
                            @foreach ($kriteria as $item)
                            <div class="col-auto">
                                <label class="my-2" for="">{{$item->kriteria }}</label>
                                <select class="form-select pe-7 text-truncate" name="himpunan[]"
                                    aria-label="Default select example">
                                    @foreach($item->himpunan as $himpunan)
                                    <option value="{{$himpunan->id_himpunan }}" title="{{ $himpunan->nama_himpunan }}"
                                        {{ in_array($himpunan->id_himpunan, $id) ? 'selected' : '' }}>{{
                                        substr($himpunan->nama_himpunan, 0, 50) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="hr-text">
                        <button type="button" id="hitung" class="btn btn-primary text-white text-center"><i
                                class="bi bi-search mx-2"></i>Hitung</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cards mb-6">
            <div class="col-12">

                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3 class="card-title text-primary"><i class="bi bi-table me-2"></i> Matriks Keputusan (X)</h3>
                    </div>
                    <div class="table-responsive mx-4 mt-3">
                        <table id="tabel" class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-white">No.</th>
                                    <th class="text-center text-white">Nama</th>
                                    @foreach($kriteria as $item)
                                    <th class="text-white text-center">{{ $item->kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($karyawans as $karyawan)
                                <tr>
                                    <td class="text-center">{{ $loop->index +1}}.</td>
                                    <td>{{ $karyawan->nama }}</td>
                                    @foreach ($kriteria as $item)
                                    <td class="text-center">{{ $karyawan->kriteria->
                                        find($item->id_kriteria)->pivot->nilai ?? '-' }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($kriteria as $item)
        <div class="row row-cards mb-6 d-none">
            <div class="col-12">

                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3 class="card-title text-primary"><i class="bi bi-table me-2"></i> Derajat Keanggotaan
                            Variabel {{$item->kriteria }}</h3>
                    </div>
                    <div class="table-responsive mx-4">
                        <table id="tabel" class="table">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-white align-middle">NO</th>
                                    <th rowspan="2" class="w-50 text-center text-white align-middle">
                                        Nama Alternatif
                                    </th>
                                    <th rowspan="2" class="w-25 text-center text-white align-middle">{{ $item->kriteria
                                        }}</th>
                                    <th colspan="{{$item->himpunan->count()  }}" class="text-center text-white">Derajat
                                        Keanggotaan</th>
                                </tr>

                                <tr>
                                    @foreach ($item->himpunan as $himpunan)

                                    <th class="text-white text-center">{{ $himpunan->nama_himpunan }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawans as $row)
                                <tr>
                                    <td>{{$loop->index +1 }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td class="text-center">
                                        @if($row->kriteria->where('id_kriteria', $item->id_kriteria)->isNotEmpty())
                                        {{ $row->kriteria->where('id_kriteria',
                                        $item->id_kriteria)->first()->pivot->nilai }}
                                        @else
                                        -
                                        @endif
                                    </td>

                                    <!-- ini -->
                                    @foreach ($item->himpunan as $himpunan)
                                    <td {{-- @if($row->kriteria->where('id_kriteria', $item->id_kriteria)->isNotEmpty())
                                        @php
                                        $kurva = new App\Http\Controllers\fuzzy\KurvaController($himpunan->id_himpunan);
                                        $nilai = $kurva->Segitiga($row->kriteria->where('id_kriteria',
                                        $item->id_kriteria)->first()->pivot->nilai);
                                        echo $nilai;
                                        @endphp
                                        @else
                                        -
                                        @endif --}}


                                        class="text-center">[{{ implode(',', array_filter([$himpunan->nilai_a,
                                        $himpunan->nilai_b,
                                        $himpunan->nilai_c, $himpunan->nilai_d], fn($nilai) => $nilai !== null || $nilai
                                        === 0)) }}]

                                        @endforeach
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

        <div class="row row-cards mb-6">
            <div class="col-12">

                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3 class="card-title text-primary"><i class="bi bi-table me-2"></i> Fuzzyfikasi Query</h3>
                    </div>
                    <div class="table-responsive mx-4 mt-3">
                        <table id="tabel" class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-white">No.</th>
                                    <th class="text-center text-white">Nama</th>
                                    @foreach($kriteria as $item)
                                    <th class="text-white text-center">{{ $item->kriteria }} <br>
                                        {{ $item->himpunan->whereIn('id_himpunan', $id)->first()->nama_himpunan ?? '-'
                                        }}
                                    </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($karyawans as $karyawan)
                                <tr>
                                    <td class="text-center">{{ $loop->index +1}}.</td>

                                    <td>{{$karyawan->nama}}</td>
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

@push('script')
<script>
    $("#hitung").on("click", function () {
        let himpunanArray = [];
        $('[name="himpunan[]"]').each(function () {
            let nilai = $(this).val();
            himpunanArray.push(nilai);
        });

        let himpunanString = himpunanArray.join("-");
        let url = "{{ route('data-perhitungan.show', ':himpunanString') }}";
        url = url.replace(':himpunanString', himpunanString);


        Swal.fire({
            title: 'Sabar Ngaps',
            html: 'calculating data...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
                setTimeout(() => {
                    Swal.close();
                }, 1000);
            },
            willClose: () => {
                window.location.href = url;
            }
        });
    });

</script>
@endpush