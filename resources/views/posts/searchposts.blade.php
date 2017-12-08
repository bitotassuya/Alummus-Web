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
                <H1><div class="panel-heading">
                  <div class="row">
                    <div class="col-md-4">Blog Board</div>
                    <div class="col-md-8">
                      <form method="POST" action='{{ url("/search") }}'>
                        {{ csrf_field() }}
                          <div class="input-group">
                              <input type="text" name="search" class="form-control"
                                placeholder="Search for...">
                                <span class="input-group-btn">
                                  <button type="submit" class="btn btn-default">
                                      Go!
                                  </button>
                                </span>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div></H1>



                <div class="panel-body">
                   <div class="col-md-4">
                    <!-- รูปที่สแดง -->
                    @if(!empty($profile))
                        <img src="{{ $profile->profile_pic }}"
                       class="avatar" alt="">

                    @else
                        <img src="{{ url('images/avatar.png') }}"
                       class="avatar" alt="">

                    @endif
                    <!-- ชื่อที่แสดง -->

                     @if(!empty($profile))
                      <p class="lead">{{ $profile->name }}<p>


                    @else
                      <p></p>

                    @endif
                    <!-- รุ่น -->

                     @if(!empty($profile))
                      <p class="lead">{{ $profile->generation }}<p>


                    @else
                   <p></p>

                    @endif




                   </div>
                   <div class="col-md-8">
                      @if(count($posts) > 0)
                        @foreach($posts->all() as $post)
                          <center><h3>{{$post->post_title}}</h3>
                          <img width="200" height="200" src="{{ $post->post_image }}" alt="">



                          <p>{{ $post->post_body, 0, 150 }} </p>
                           </center>


                     <ul class="nav nav-pills">
                            <li role="presentation">
                              <a href='{{url("/view/{$post->id}")}}'class="btn btn-info btn-sm">
                                <span class="	glyphicon glyphicon-search"></span> VIEW
                              </a>

                            </li>
                              <li role="presentation">
                                <a href='{{url("/edit/{$post->id}")}}'class="btn btn-info btn-sm">
                                  <span class="glyphicon glyphicon-edit"></span> Edit
                                </a>


                            </li>
                              <li role="presentation">
                                <a href='{{url("/delete/{$post->id}")}}'class="btn btn-info btn-sm">
                                  <span class="glyphicon glyphicon-trash"></span> DELETE
                                </a>

                            </li>
                          </ul>

                          <cite style="float:right;">Posted on:{{date('M j,Y H:i',
                            strtotime($post->updated_at))}}</cite>
                          <hr/>
                        @endforeach
                      @else
                        <p>No Post Available</p>
                      @endif
                </div>
            </div>
          </div>
      </div>
</div>

@endsection
