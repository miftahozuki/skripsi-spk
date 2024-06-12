@extends('layouts.guest')
@section('content')

@if (session()->has('loginFail'))    
<div class="alert alert-important alert-danger alert-dismissible" role="alert">
  <div class="d-flex">
    <div>
      <!-- SVG icon from http://tabler-icons.io/i/alert-circle -->
      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-alert-circle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>
    </div>
    <div class="mx-auto">
      {{session('loginFail')}}
    </div>
  </div>
  <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
</div>
@endif

<div class="card card-md">
    <div class="card-body">
      <h2 class="h2 text-center mb-4">Masuk</h2>
      <form action="/login" method="POST" autocomplete="off" novalidate>
        @csrf
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="admin" autocomplete="off" value="{{ old('username') }}">
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-2">
          <label class="form-label">
            Kata Sandi
          </label>
          <div class="input-group input-group-flat">
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="*****"  autocomplete="off">
            <span class="input-group-text">
              <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
              </a>
            </span>
            @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          </div>
        </div>
        <div class="mb-2">
          <label class="form-check">
            <input type="checkbox" class="form-check-input"/>
            <span class="form-check-label">Remember me on this device</span>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Go</button>
        </div>
      </form>
    </div>
    <div class="hr-text">Jam</div>
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <button class="btn clock">12 : 10 : 10</button>
        </div>
    </div>
  </div>

  @endsection