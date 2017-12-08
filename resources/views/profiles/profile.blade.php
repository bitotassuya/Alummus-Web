@extends('wel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>


                <div class="panel-body">
                    <!--ตรงส่วนลิงค์คือส่วนที่เราจะส่งไปซึ่งต้องระบุให้ตรงกับ web.app -->
                      <form class="form-horizontal" method="POST" action="{{ url('/addProfile') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!--name-->

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">ชื่อ</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--generation-->
                        <div class="form-group{{ $errors->has('generation') ? ' has-error' : '' }}">
                            <label for="generation" class="col-md-4 control-label">รุ่น</label>

                            <div class="col-md-6">
                                <input id="generation" type="input" class="form-control" name ="generation" required>


                                @if ($errors->has('generation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('generation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--Destination-->

                        <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                            <label for="destination" class="col-md-4 control-label">ตำแหน่งงาน</label>

                            <div class="col-md-6">
                                <input id="destination" type="input" class="form-control" name="destination" required>

                                @if ($errors->has('destination'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- e-mail-->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="input" class="form-control" name="email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--facebook-->
                        <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                            <label for="facebook" class="col-md-4 control-label">Facebook</label>

                            <div class="col-md-6">
                                <input id="facebook" type="input" class="form-control" name="facebook" required>

                                @if ($errors->has('facebook'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--Picture-->

                         <div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
                            <label for="profile_pic" class="col-md-4 control-label">Profile Picture</label>

                            <div class="col-md-6">
                                <input id="profile_pic" type="file" class="form-control" name="profile_pic" required>

                                @if ($errors->has('profile_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg ">
                                    Add Profile
                                </button>


                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
