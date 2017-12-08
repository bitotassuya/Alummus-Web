@extends('wel')
<style type="text/css">
    .avatar{
        border-radius:  100%;
        max-width:  100px;
    }
</style>
@section('content')
<br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="panel panel-default text-center">
                <H3><div class="panel-heading">
                  <div class="row">
                    <div class="col-md-4">Blog Board</div>
                    <div class="col-md-8">
                      <form method="POST" action= "#demo">
                        {{ csrf_field() }}
                          <div class="input-group">
                              <input type="text" name="search" class="form-control"
                                placeholder="ค้นหา ...">
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-default">
                                      Go!
                                  </button>
                                </span>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div></H3>
                      <!-- present Alumin-->
                    <h3><span class="label label-default">ทำเนียบรุ่น12</span></h3>


                        <br>  <br>  <br>  <br>
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="text-center"><strong>นางสาวชฎาธาร บัวอิน</strong></p><br>
                            <a href="#demo" data-toggle="collapse">
                              <img src="images/thebest.png" alt="Random Name" width="150" height="150">
                            </a>
                            <div id="demo" class="collapse">
                              <p></p>
                              <p>ตำแหน่งโปรแกรมเมอร์ ธนาคารกรุงเทพ</p>
                              <p>เกรียตินิยมอันดับ 2</p>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <p class="text-center"><strong>นางสาวกิ่งกาญจน์ สร้อยสกุลณี</strong></p><br>
                            <a href="#demo2" data-toggle="collapse">
                              <img src="images/best2.png" alt="Random Name" width="150" height="150">
                            </a>
                            <div id="demo2" class="collapse">
                              <p>ตำแหน่งโปรแกรมเมอร์ </p>
                              <p>ธนาคารกรุงเทพ จำกัดมหาชน</p>

                            </div>
                          </div>
                          <div class="col-sm-3">
                            <p class="text-center"><strong>นาย ธราเทพ หนูเหมือน </strong></p><br>
                            <a href="#demo3" data-toggle="collapse">
                              <img src="images/thebest2.png"  alt="Random Name"width="150" height="150">
                            </a>
                            <div id="demo3" class="collapse">
                              <p>ตำแหน่ง Full Stack Developer</p>
                              <p>บริษัท Pi R Square จำกัด</p>

                            </div>
                          </div>
                          <div class="col-sm-3">
                            <p class="text-center"><strong>นาย ธราเทพ หนูเหมือน </strong></p><br>
                            <a href="#demo4" data-toggle="collapse">
                              <img src="images/thebest2.png"  alt="Random Name"width="150" height="150">
                            </a>
                            <div id="demo4" class="collapse">
                              <p>ตำแหน่ง Full Stack Developer</p>
                              <p>บริษัท Pi R Square จำกัด</p>

                            </div>
                          </div>
                          <div class="col-sm-3">
                            <p class="text-center"><strong>นาย ธราเทพ หนูเหมือน </strong></p><br>
                            <a href="#demo5" data-toggle="collapse">
                              <img src="images/thebest2.png"  alt="Random Name"width="150" height="150">
                            </a>
                            <div id="demo5" class="collapse">
                              <p>ตำแหน่ง Full Stack Developer</p>
                              <p>บริษัท Pi R Square จำกัด</p>

                            </div>
                          </div>
                          <div class="col-sm-3">
                            <p class="text-center"><strong>นาย ธราเทพ หนูเหมือน </strong></p><br>
                            <a href="#demo6" data-toggle="collapse">
                              <img src="images/thebest2.png"  alt="Random Name"width="150" height="150">
                            </a>
                            <div id="demo6" class="collapse">
                              <p>ตำแหน่ง Full Stack Developer</p>
                              <p>บริษัท Pi R Square จำกัด</p>

                            </div>
                          </div>
                          <div class="col-sm-3">
                            <p class="text-center"><strong>นาย ธราเทพ หนูเหมือน </strong></p><br>
                            <a href="#demo7" data-toggle="collapse">
                              <img src="images/thebest2.png"  alt="Random Name"width="150" height="150">
                            </a>
                            <div id="demo7" class="collapse">
                              <p>ตำแหน่ง Full Stack Developer</p>
                              <p>บริษัท Pi R Square จำกัด</p>

                            </div>
                          </div>

                          <div class="col-sm-3">
                            <p class="text-center"><strong>นาย ธราเทพ หนูเหมือน </strong></p><br>
                            <a href="#demo8" data-toggle="collapse">
                              <img src="images/thebest2.png"  alt="Random Name"width="150" height="150">
                            </a>
                            <div id="demo8" class="collapse">
                              <p>ตำแหน่ง Full Stack Developer</p>
                              <p>บริษัท Pi R Square จำกัด</p>

                            </div>
                          </div>


                        </div>
                      </div>




        </div>
    </div>
</div>

@endsection
