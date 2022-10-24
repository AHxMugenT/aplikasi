@extends('layouts.index')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
                @csrf
                <div class="image text-center">
                    <img class="mb-2 mt-4 rounded-circle" src="/img/am.jpeg" alt="" width="72" height="72">
                </div>
              <h1 class="h3 mb-3 fw-bold text-center">Registration Form</h1>
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    Please enter a password of at least 8 letters
                </div>
                @enderror
              </div>
              <a href="/register">
                  <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
              </a>
              <small class="d-block text-center mt-3">Already Registered?<a href="/login">Login</a></small>
            </form>
        </main>
    </div>
</div>

@endsection
