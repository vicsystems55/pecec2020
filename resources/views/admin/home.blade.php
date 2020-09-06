@extends('layouts.admin_app', [
  'namePage' => 'Dashboard',
  'class' => 'sidebar-mini',
  'activePage' => 'home',
])

@section('content')
  <div style="min-height: 300px;" class="panel-header panel-header-sm p-5 text-white">
  <div class="p-3"></div>
  <h1>Admin</h1>
  <div class="p-5"></div>
  </div>

  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Now Ui Table Heading</h5>
            <p class="category">Created using Montserrat Font Family</p>
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection