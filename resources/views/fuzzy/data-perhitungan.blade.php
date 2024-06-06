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
                        <h3 class="card-title text-primary"><i class="bi bi-table me-2"></i> Hitung berdasarkan Query</h3>
                    </div>
                    <div class="container">
                        <div class="justify-content-center row g-3 mb-5">
                            @foreach ($kriteria as $item)
                            <div class="col-auto">
                                <label class="my-2" for="">{{$item->kriteria }}</label>
                                <select class="form-select pe-7 text-truncate" aria-label="Default select example">
                                    @foreach($item->himpunan as $himpunan)
                                    <option title="{{ $himpunan->nama_himpunan }}" {{ $loop->first ? 'selected' : '' }}>{{ substr($himpunan->nama_himpunan, 0, 50) }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            @endforeach                          
                        </div>
                    </div>
                    <div class="hr-text">
                        <button class="btn btn-primary text-white text-center"><i class="bi bi-search mx-2"></i>Hitung</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cards">
            <div class="col-12">
                
                <div class="card">
                     <div class="card-header justify-content-between">
                        <h3 class="card-title text-primary"><i class="bi bi-table me-2"></i> Derajat Keanggotaan Variabel Masa Kerja</h3>
                    </div>
                    <div class="table-responsive mx-4">
                        <table id="tabel" class="table">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-white align-middle">NO</th>
                                    <th rowspan="2" class="w-50 text-center text-white align-middle">
                                        Nama Alternatif
                                    </th>
                                    <th rowspan="2" class="w-25 text-center text-white align-middle">Masa Kerja</th>
                                    <th colspan="3" class="text-center text-white">Derajat Keanggotaan</th>
                                </tr>
                                <tr>
                                    <th class="text-white">Kurang</th>
                                    <th class="text-white">Cukup</th>
                                    <th class="text-white">Baik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Kurang</td>
                                    <td class="text-center">80</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">1</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Cukup</td>
                                    <td class="text-center">80</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">0</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Baik</td>
                                    <td class="text-center">80</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection