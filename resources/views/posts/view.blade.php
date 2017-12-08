@extends('wel')



@section('content')
<br><br><br><br><br><br><br>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @if(session('response'))
              <div class="alert alert-success">{{session('response')}}</div>
          @endif
          <div class="panel panel-default">

            <div class="panel panel-default text-center">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                   <div class="col-md-4">
                    <ul class="list-group">
                        @if(count($categories) > 0)
                        @foreach($categories->all() as $category)
                            <li class="list-group-item"><a href='{{ url("category/{$category
                              ->id}") }}'>{{$category->category}}</a></li>
                        @endforeach
                      @else
                      <p>No Category Found!!</p>

                      @endif
                      </ul>
                  </div>



                    <div class="col-md-8">
                      @if(count($posts) > 0)
                        @foreach($posts->all() as $post)
                          <center><h3>{{$post->post_title}}</h3>
                          <img width="200" height="200" src="{{ $post->post_image }}" alt="">
                          <p>{{ $post->post_body}} </p>
                           </center>
                           <ul class="nav nav-pills">
                          <li role="presentation">
                              <a href='{{url("/like/{$post->id}")}}' class="btn btn-info btn-sm">
                                  <span class="glyphicon glyphicon-thumbs-up">LIKE({{$likeCtr}})</span>
                              </a>

                            </li>
                              <li role="presentation">

                              <a href='{{url("/dislike/{$post->id}")}}' class="btn btn-info btn-sm">
                                  <span class="glyphicon glyphicon-thumbs-down">DISLIKE({{$dislikeCtr}})</span>
                              </a>

                            </li>
                          <!--    <li role="presentation">

                              <a  class="btn btn-info btn-sm">
                                <span class="glyphicon glyphicon-comment"></span> Comment
                              </a>

                            </li> -->
                          </ul>
                        </div>




                        @endforeach
                      @else
                        <p>No Post Available</p>
                      @endif
                        <br><br><br><br><br>
                      <form method="POST" action='{{ url("/comment/{$post->id}") }}'>
                        {{csrf_field()}}
                          <div class="form-group">
                            <textarea id="comment" rows="6" class="form-control" name="comment"
                            required autofocus></textarea>
                          </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block">
                                  POST COMMENT </button>
                              </div>
                              <h3>Comments</h3>
                              @if(count($comments) > 0)
                                @foreach($comments->all() as $comment)
                                  <p>{{ $comment->comment }} </p>
                                  <p>Posted by: {{ $comment->name }} </p>
                                </hr>
                                @endforeach
                              @else
                                <p>No Post Available</p>
                              @endif

                        </form>

                      </div>
                    </div>

                </div>

              </div>
               </div>

               @endsection
