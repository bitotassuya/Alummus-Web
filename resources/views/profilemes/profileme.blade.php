@extends('wel')
<style type="text/css">
    .avatar{
        border-radius:  100%;
        max-width:  350px;
    }
</style>
@section('content')
<div class="container-fluid">

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

            <div class="panel panel-default">
                  <div class="panel-heading">Profile Me </div>

                <div class="panel-body">
                   <div class="col-md-8 col-md-offset-2">
                    <!-- รูปที่สแดง -->
                    <center>@if(!empty($profile))

                    <img src="{{ $profile->profile_pic }}"
                       class="avatar" alt="">
                        <br><br>
                         <a href="{{url('/profile')}}" class="btn btn-info btn-lg">
                           <span class="glyphicon glyphicon-edit"></span> Edit Profile
                         </a></center>
                      <br><br>
                      <hr/>

                  @else
                        <img src="{{ url('images/avatar.png') }}"
                       class="avatar" alt="">

                    @endif
                    <!-- ชื่อที่แสดง -->

                     @if(!empty($profile))


                     <p>ชื่อ</p>

                      <p  class="lead">{{ $profile->name }}<p>


                    @else
                      <p></p>


                    @endif
                    <!-- รุ่น -->
                    <p>รุ่น</p>
                     @if(!empty($profile))
                      <p class="lead">{{ $profile->generation }}<p>


                    @else
                   <p></p>

                    @endif
                      <!-- รุ่น -->
                      <p>ตำแหน่งงาน</p>
                     @if(!empty($profile))
                      <p class="lead">{{ $profile->destination }}<p>


                    @else
                   <p></p>

                    @endif
                    <!-- email -->
                    <p>E-mail ติดต่อ</p>

                    @if(!empty($profile))
                    <p class="lead">{{ $profile->email }}<p>
                      <a href="https://mail.google.com" class="btn btn-outline-dark btn-lg">
                                <span class="glyphicon glyphicon-envelope"></span> E-mail
                              </a>


                  @else
                 <p></p>

                  @endif

                  <!-- facebook -->
                  <p>Facebook ติดต่อ</p>
                 @if(!empty($profile))
                  <p class="lead">{{ $profile->facebook }}<p>
                    <a href="{{ $profile->facebook }}" class="btn btn-facebook btn-outline-dark btn-lg">
                              <span class="glyphicon glyphicon-globe"></span> FACEBOOK
                            </a>


                @else
               <p></p>

                @endif
              </div>

                   <div class="col-md-8"></div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
