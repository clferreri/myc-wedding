@extends('Back.Layout.layout_blank')


@section('contenido')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Iniciar sesión</h4>
                  <p class="mb-0">Ingresa tu email y contraseña para iniciar sesión.</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                      @if ($errors->any())
                        <div>
                          <p style="color: #fb6340; font-size:13px;"><em>{{$errors->first()}}</em></p>
                        </div>
                      @endif
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" name="password">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Recordarme</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar sesión </button>
                        </div>
                    </form>
                </div>

              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('{{asset('Back/img/login.jpg')}}');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Juntos, es como si hubiéramos tomado Felix Felicis"</h4>
                {{-- <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection