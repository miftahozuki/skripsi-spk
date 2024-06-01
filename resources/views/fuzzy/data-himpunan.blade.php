@extends('layouts.index') @section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title"><i class="bi bi-box-fill me-3"></i></i>Data Himpunan Fuzzy</h2>
            </div>
            <!-- Page title actions -->
            <!-- end -->
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards mb-5">
            <div class="col-12">
                <div class="card">
                     <div class="card-header justify-content-between">
                        <h3 class="card-title text-primary"><i class="bi bi-table"></i> Fungsi Keanggotaan Variabel Masa Kerja</h3>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <i class="bi bi-plus-lg"></i>
                        Tambah
                    </a>
                    </div>
                    <div class="table-responsive mx-4">
                        <table class="table">
                            <tbody>
                                <tr class="bg-primary">
                                    <th class="text-white">NO</th>
                                    <th class="w-50 text-center text-white">
                                        Nama Himpunan Fuzzy
                                    </th>
                                    <th class="w-25 text-center text-white">Jenis Kurva</th>
                                    <th class="text-center text-white">Domain</th>
                                    <th class="text-center text-white">Aksi</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Kurang</td>
                                    <td class="text-center">Linier Turun</td>
                                    <td class="text-center">[50][70]</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success"> Edit </a>
                                            <a href="#" class="btn btn-outline-danger"> Hapus </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Cukup</td>
                                    <td class="text-center">Linier Turun</td>
                                    <td class="text-center">[50][70]</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success"> Edit </a>
                                            <a href="#" class="btn btn-outline-danger"> Hapus </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Baik</td>
                                    <td class="text-center">Linier Turun</td>
                                    <td class="text-center">[50][70]</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success"> Edit </a>
                                            <a href="#" class="btn btn-outline-danger"> Hapus </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                     <div class="card-header justify-content-between">
                        <h3 class="card-title text-primary"><i class="bi bi-table"></i> Fungsi Keanggotaan Variabel Masa Kerja</h3>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <i class="bi bi-plus-lg"></i>
                        Tambah
                    </a>
                    </div>
                    <div class="table-responsive mx-4">
                        <table class="table">
                            <tbody>
                                <tr class="bg-primary">
                                    <th class="text-white">NO</th>
                                    <th class="w-50 text-center text-white">
                                        Nama Himpunan Fuzzy
                                    </th>
                                    <th class="w-25 text-center text-white">Jenis Kurva</th>
                                    <th class="text-center text-white">Domain</th>
                                    <th class="text-center text-white">Aksi</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Kurang</td>
                                    <td class="text-center">Linier Turun</td>
                                    <td class="text-center">[50][70]</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success"> Edit </a>
                                            <a href="#" class="btn btn-outline-danger"> Hapus </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Cukup</td>
                                    <td class="text-center">Linier Turun</td>
                                    <td class="text-center">[50][70]</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success"> Edit </a>
                                            <a href="#" class="btn btn-outline-danger"> Hapus </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Baik</td>
                                    <td class="text-center">Linier Turun</td>
                                    <td class="text-center">[50][70]</td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn btn-outline-success"> Edit </a>
                                            <a href="#" class="btn btn-outline-danger"> Hapus </a>
                                        </div>
                                    </td>
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