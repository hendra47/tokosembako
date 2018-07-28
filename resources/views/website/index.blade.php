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
                        <h2 style="color:white;font-weight:bold">Cari Ticket</h2>
                    </div>
                      <form method="post">
                          <div class="form-group col-xs-12 col-md-12">
                              <label for="name" class="control-label">Line Height</label>
                              <select class="form-control" name="id_kota">
                                                <option value=""></option>
                                            @foreach($data_kota as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                              </select>
                          </div>
                          <div class="form-group col-xs-12 col-md-12">
                              <label for="name" class="control-label">Tanggal</label>
                              <input type="date" value='' class="form-control">
                          </div>
                          <div class="form-group col-xs-12 col-md-12">
                              <label for="name" class="control-label">Line Height</label>
                              <select class="form-control" name="id_kota">
                                                <option value=""></option>
                                            @foreach($data_kota as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                              </select>
                          </div>
                          <div class="form-group col-xs-12 col-md-12" style="margin-top:30px;text-align:center">
                                  <input type="submit" class="btn btn-outline btn-xl btn-block" value="Pesan Sekarang">
                          </div>
                        </form>
                  </div>
              </div>  
            </div>
          </div>
          <div class="col-lg-5 my-auto">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="{{ asset('theme_web/img/bus.png') }}" class="img-fluid" alt="">
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



    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Mudah Diakses<br>Dimanapun anda berada.</h2>
          <a href="{{ url('website/login') }}" class="btn btn-outline btn-xl js-scroll-trigger">Login</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>Hubungi kami di </h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>



@endsection
