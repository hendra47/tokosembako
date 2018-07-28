@extends('/website/layouts.app')

@section('contentdata')
    <section class="cta">
      <div class="cta-content">
        <div class="container">
        <div class="panel-body col-lg-6" style="margin-top:-13%">
                    <div class="form-group col-xs-12 col-md-12">
                        <h3 style="color:white;font-weight:bold">Register</h3>
                         @include('flash::message')
                    </div>
            {!! Form::open(['action' => 'WebsiteController@tambah']) !!}
              <div class="form-group col-xs-12 col-md-12">
                    <label style="color:white" class="control-label">Username</label>
                    <input type="text" name="nama" value='' class="form-control">
              </div>
              <div class="form-group col-xs-12 col-md-12">
                    <label style="color:white" class="control-label">Password</label>
                    <input type="password" name="password" value='' class="form-control">
              </div>
              <div class="form-group col-xs-12 col-md-12">
                    <label style="color:white" class="control-label">No Ktp</label>
                    <input type="number" name="no_ktp" value='' class="form-control">
              </div>
              <div class="form-group col-xs-12 col-md-12">
                    <label style="color:white" class="control-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" value='' class="form-control">
              </div>
              <div class="form-group col-xs-12 col-md-12">
                    <label style="color:white" class="control-label">Alamat</label>
                    <input type="text" name="alamat" value='' class="form-control">
              </div>
              <div class="form-group col-xs-12 col-md-12">
                    <label style="color:white" class="control-label">Jenis Kelamin</label>
                      <div class="radio">
                        <label><input type="radio" name="jk" value="P"><span style="color:white"> Laki-Laki</span></label>
                        <label style="margin-left:12px"><input type="radio" name="jk" value="W"><span style="color:white"> Perempuan</span></label>
                      </div>
              </div>
              <div class="form-group col-xs-12 col-md-12" style="margin-top:30px;text-align:center">
                                  <input type="submit" class="btn btn-outline btn-xl btn-block" value="Register">
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>
@endsection
