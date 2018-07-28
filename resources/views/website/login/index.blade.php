@extends('/website/layouts.app')

@section('contentdata')
<header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <div class="panel panel-default">
                  <div class="panel-body col-lg-12">
                    <div class="form-group col-xs-12 col-md-12">
                        <h2 style="color:white;font-weight:bold">Login</h2>
                    @include('flash::message')
                    </div>

                        {!! Form::open(['action' => 'WebsiteController@klik_login']) !!}
                          <div class="form-group col-xs-12 col-md-12">
                              <label for="name" class="control-label">Username</label>
                              <input type="text" name="nama" value='' class="form-control">
                          </div>
                          <div class="form-group col-xs-12 col-md-12">
                              <label for="name" class="control-label">Password</label>
                              <input type="password" name="password" value='' class="form-control">
                          </div>
                          <div class="form-group col-xs-12 col-md-12" style="margin-top:30px;text-align:center">
                                  <input type="submit" class="btn btn-outline btn-xl btn-block" value="Login">
                                  <?php
                                  if (isset($input)) {
                                      print_r($input);
                                  }
                                
                                  ?>
                          </div>
                        
            {!! Form::close() !!}
                  </div>
              </div>  
            </div>
          </div>

          <div class="col-lg-5 my-auto">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="{{ asset('theme_web/img/login.png') }}" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </header>
@endsection
