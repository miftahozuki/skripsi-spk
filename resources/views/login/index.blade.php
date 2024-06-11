@extends('layouts.guest')
@section('content')

<div class="card card-md">
    <div class="card-body">
      <h2 class="h2 text-center mb-4">Masuk</h2>
      <form action="./" method="get" autocomplete="off" novalidate>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="email" class="form-control" placeholder="admin" autocomplete="off">
        </div>
        <div class="mb-2">
          <label class="form-label">
            Kata Sandi
          </label>
          <div class="input-group input-group-flat">
            <input type="password" class="form-control"  placeholder="*****"  autocomplete="off">
            <span class="input-group-text">
              <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
              </a>
            </span>
          </div>
        </div>
        <div class="mb-2">
          <label class="form-check">
            <input type="checkbox" class="form-check-input"/>
            <span class="form-check-label">Remember me on this device</span>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Go !</button>
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