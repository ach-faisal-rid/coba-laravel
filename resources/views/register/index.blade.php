@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">form-registration</h1>
                <form action="/register" method="post">
                    @csrf
                    <img class="mb-4" src="/img/bootstrap-logo.svg" alt="" width="72" height="57">

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="burhan" required value="{{old('nama')}}">
                        <label for="name">name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" required value="{{old('username')}}">
                        <label for="username">username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{old('email')}}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control
                         @error('password') is-invalid @enderror rounded-bottom" name="password" id="password" placeholder="password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                    <small class="d-block text-center mt-3">already register? <a href="/login">login now!</a></small>
                    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
                </form>

            </main>
        </div>
    </div>

@endsection
