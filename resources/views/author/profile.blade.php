@extends('layouts.author_app', [
  'namePage' => 'Dashboard',
  'class' => 'sidebar-mini',
  'activePage' => 'profile',
])

@section('content')
  <div style="min-height: 300px;" class="panel-header panel-header-sm p-5 text-white">
  <div class="p-3"></div>
  
  <div class="p-5"></div>
  </div>

  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title">My Profile</h5>
            <p class="category">Created using Montserrat Font Family</p>
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection