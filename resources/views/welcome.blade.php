@extends('layouts.app', [
    'namePage' => 'Welcome',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'welcome',
    'backgroundImage' => asset('assets') . "/img/bg14.jpg",
])

@section('content')

  <div  class="content">
    <div class="container">
      <div class="col-md-12 ml-auto mr-auto">
          <div class="header  py-10 py-lg-2 pt-lg-12">
              <div class="container">
                  <div class="header-body text-center mb-7">
                      <div class="row justify-content-center">
                          <div class="col-lg-9 col-md-9">
                              <h1 class="text-dark font-weight-bold">DIVE DEEPER ON TOPICS THAT MATTER TO YOU.</h1>
                              <p class="h2 text-dark">
                              Select what you're into. We'll help you find great things to read
                              </p>
                              <p class="text-lead text-light mt-3 mb-0">
                                  @include('alerts.migrations_check')
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 ml-auto mr-auto">
      </div>
    </div>

    <div class="card mx-auto">
      <h1 class="text-center">Categories</h1>

    </div>
  </div>

 
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
