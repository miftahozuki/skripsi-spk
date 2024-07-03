@extends('layouts.index') @section('content')
<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <h2 class="page-title"><i class="bi bi-person-bounding-box me-3"></i>Profil Saya</h2>
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
          <div class="container">
            <div class="justify-content-center row g-3 mb-5">

              <div class="col d-flex flex-column">
                <div class="card-body">

                  <div class="row align-items-center">
                    <div class="col-auto"><span class="avatar avatar-xl me-4"
                        style="background-image: url({{ asset('assets/img/user.svg') }})"></span>
                    </div>
                    <div class="col-auto"><a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                      data-bs-target="#avatar">
                      <i class="bi bi-camera me-2"></i> Ganti avatar
                      </a></div>
                  </div>
                  <div class="row g-3 mt-2">
                    <div class="col-md">
                      <div class="form-label"><i class="bi bi-card-list me-2"></i>Nama</div>
                      <input type="text" class="form-control" value="Miftahus">
                    </div>
                    <div class="col-md">
                      <div class="form-label"><i class="bi bi-at me-1"></i>Username</div>
                      <input type="text" class="form-control" value="admin">
                    </div>
                  </div>

                  <div class="row g-3 mt-2">
                    <div class="col-md">
                      <div class="form-label"><i class="bi bi-envelope-at-fill me-2"></i>Email</div>
                      <input type="text" class="form-control" value="miftahozuki@gmail.com">
                    </div>
                    <div class="d-grid col-md">
                      <div class="form-label"><i class="bi bi-key me-2"></i>Password</div>
                      <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                      data-bs-target="#pw">Ganti</button>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-transparent mt-auto">
                  <div class="btn-list justify-content-end">
                    <a href="#" class="btn btn-primary">
                      <i class="bi bi-floppy-fill me-2"></i> Ubah
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- modal password-->
<div class="modal" id="pw" tabindex="-1">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ganti Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST">
      @csrf
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Password Lama</label>
          <input type="password" class="form-control" name="pw" placeholder="********"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Password Baru</label>
          <input type="password" class="form-control" name="pw" placeholder="********"/>
        </div>
        <div class="mb-2">
          <label class="form-label">Verifikasi Password</label>
          <input type="password" class="form-control" name="pw" placeholder="********"/>
        </div>
      </div>
      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-floppy-fill me-2"></i>
          Ubah
      </button>
      </div>
  </form>
    </div>
  </div>
</div>

<!-- modal avatar-->
<div class="modal" id="avatar" tabindex="-1">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ganti Avatar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST">
      @csrf
      <div class="modal-body">
        <div>
          <input class="form-control" type="file" id="formFile">
        </div>
      </div>
      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-upload me-2"></i>
          Unggah
      </button>
      </div>
  </form>
    </div>
  </div>
</div>
@endsection