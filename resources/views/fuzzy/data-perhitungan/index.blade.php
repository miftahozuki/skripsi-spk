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
                            {{-- <form action="{{ route('data-perhitungan.store') }}" method="POST">
                                @csrf --}}
                                <div class="col-auto">
                                    <label class="my-2" for="">{{$item->kriteria }}</label>
                                    <select class="form-select pe-7 text-truncate" name="himpunan[]"
                                        aria-label="Default select example">
                                        @foreach($item->himpunan as $himpunan)
                                        <option value="{{$himpunan->id_himpunan }}"
                                            title="{{ $himpunan->nama_himpunan }}" {{ $loop->first ? 'selected' : ''
                                            }}>{{ substr($himpunan->nama_himpunan, 0, 50) }}</option>
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
                    {{-- </form> --}}
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