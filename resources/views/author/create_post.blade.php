@extends('layouts.author_app', [
  'namePage' => 'Dashboard',
  'class' => 'sidebar-mini',
  'activePage' => 'create_post',
])

@section('content')
  <div style="min-height: 300px;" class="panel-header panel-header-sm p-5 text-white">
  <div class="p-3"></div>
  
  <div class="p-5"></div>
  </div>

  <div class="content">
    <div class="row">
      <div class="col-md-12">
      <div id="app">
          <editor-component></editor-component>
        </div>

        <div class="card">
          <div class="card-header">
            <h5 class="title">Create Post</h5>
            <p class="category">Created using Montserrat Font Family</p>
          </div>
          <div class="card-body">

          <form action="">

                                <div class="form-group">
                                    <input class="form-control" name="title" type="text" placeholder="Title of Post">
                                </div>

                                

                               

                                <div class="form-group">
                                    <input class="form-control" name="featured_image" type="text" placeholder="Image url">
                                </div>

                              <h3>Select Category</h3>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Politics
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Politics
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Politics
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Politics
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>

                                <div class="form-group">
                                  <button class="btn btn-primary btn-sm">submit</button>
                                </div>




                            </form>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>

  

  <script src="{{mix('js/app.js')}}"></script>

@endsection