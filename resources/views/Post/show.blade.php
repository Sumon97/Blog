@extends('layouts.app')

@section('News', 'Change the way')

@section('content')

        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Flash news</span>
                <p class="mb-0">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s.
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger"><span id="spanDate"></span></span>
                <span class="text-danger">30°C,London</span>
              </div>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                      <div>
                        <h1 class="font-weight-600 mb-1">
                          {{$post->title}}
                        </h1>
                 

                        <p class="fs-13 text-muted mb-0">
                          <span class="mr-2">Published : {{$post->created_at->isoFormat('dddd D/M/Y h:m')}} </span>Updated : {{$post->updated_at->isoFormat('dddd D/M/Y h:m')}}
                        </p>

                        <p class="fs-13 text-muted mb-0">
                          <span class="mr-2">Posted by @if ($post->journalist_id != null)
                                                         {{$post->Journalist->name}}

                                                       @elseif ($post->editor_id != null)
                                                        {{$post->Editor->name}}

                                                       @elseif ($post->admin_id != null)
                                                        {{$post->Admin->name}}

                                                       @elseif ($post->publisher_id != null)
                                                        {{$post->Publisher->name}}
                                                        
                                                       @else

                                                        ITs undefine

                                                       @endif

                          </span>
                        </p>

                        <div class="rotate-img">
                          <img
                            src="{{asset('/storage/feature/' . $post->feature) }}"
                            alt="banner"
                            class="img-fluid mt-4 mb-4"
                          />
                        </div>
                        <p class="mb-4 fs-15">
                          He has led a remarkable campaign, defying the
                          traditional mainstream parties courtesy of his En
                          Marche! movement. For many, however, the campaign has
                          become less about backing Macron and instead about
                          voting against Le Pen, the National Front candidate.
                        </p>
                      </div>
                      <div>
                        <h1 class="font-weight-600 mb-1">
                          Boy arrives at Disappeared dig site
                        </h1>
                        <div class="rotate-img">
                          <img
                            src="../news/images/inner/inner_2.jpg"
                            alt="banner"
                            class="img-fluid mt-4 mb-4"
                          />
                        </div>
                        <p class="mb-4 fs-15">
                          He has led a remarkable campaign, defying the
                          traditional mainstream parties courtesy of his En
                          Marche! movement. For many, however, the campaign has
                          become less about backing Macron and instead about
                          voting against Le Pen, the National Front candidate.He
                          has led a remarkable campaign, defying the traditional
                          mainstream parties courtesy of his En Marche!
                          movement. For many, however, the campaign has become
                          less about backing Macron and instead about voting
                          against Le Pen, the National Front candidate.
                        </p>
                      </div>
                      <div>
                        <h1 class="font-weight-600 mb-1">
                          The Conclusion
                        </h1>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="rotate-img">
                              <img
                                src="../news/images/inner/inner_3.jpg"
                                alt="banner"
                                class="img-fluid mt-4 mb-4"
                              />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="rotate-img">
                              <img
                                src="../news/images/inner/inner_4.jpg"
                                alt="banner"
                                class="img-fluid mt-4 mb-4"
                              />
                            </div>
                          </div>
                        </div>

                        <p class="mb-4 fs-15">
                          Mauris mattis auctor cursus. Phasellus tellus tellus,
                          imperdiet ut imperdiet eu, iaculis a sem. Donec
                          vehicula luctus nunc in laoreet. Aliquam erat
                          volutpat. Suspendisse vulputate porttitor mentum.
                          Proin viverra orci a leo suscipit placerat. Sed
                          feugiat posuere semper. Cras vitae mi erat, Vestibulum
                          faucibus neque at lacus tristique eu ultrices ipsum
                          mollis.
                        </p>
                      </div>
                      <div class="d-lg-flex">
                        <span class="fs-16 font-weight-600 mr-2 mb-1"
                          >Tags</span
                        >
                        <span class="badge badge-outline-dark mr-2 mb-1"
                          >Trending</span
                        >
                        <span class="badge badge-outline-dark mr-2 mb-1"
                          >Trending</span
                        ><span class="badge badge-outline-dark mr-2 mb-1"
                          >Trending</span
                        ><span class="badge badge-outline-dark mr-2 mb-1"
                          >Trending</span
                        ><span class="badge badge-outline-dark mb-1"
                          >Trending</span
                        >
                      </div>
                      <div class="post-comment-section">
                        <h3 class="font-weight-600">Related Posts</h3>
                        <div class="row">
                          @foreach($relates as $relate)
                          <div class="col-sm-6">
                            <div class="post-author">
                              <div class="rotate-img">
                                <img
                                  src="{{asset('/storage/feature/'.$relate->feature)}}"
                                  alt="banner"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="post-author-content">
                                <h5 class="mb-1">
                                  {{$relate->title}}
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>

                        <!-- Author Details

                        <div class="testimonial">
                          <div
                            class="d-lg-flex justify-content-between align-items-center"
                          >
                            <div class="d-flex align-items-center mb-3">
                              <div class="rotate-img">
                                <img
                                  src="../news/images/faces/face1.jpg"
                                  alt="banner"
                                  class="img-fluid img-rounded mr-3"
                                />
                              </div>
                              <div>
                                <p class="fs-12 mb-1 line-height-xs">
                                  Of the Author
                                </p>
                                <p
                                  class="fs-16 font-weight-600 mb-0 line-height-xs"
                                >
                                  Nout Golstein
                                </p>
                              </div>
                            </div>
                            <ul class="social-media mb-3">
                              <li>
                                <a href="#">
                                  <i class="mdi mdi-facebook"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="mdi mdi-youtube"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="mdi mdi-twitter"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12">
                            Praesent facilisis vulputate venenatis. In facilisis
                            placerat arcu, in tempor neque aliquet quis. Integer
                            lacinia in ligula eu sodales. Proin non lorem
                            iaculis, dictum lorem quis, bibendum leo.
                          </p>
                        </div>
                        -->

                        <div>
                <form role="form text-left" method="Post" action="/Comment" enctype="multipart/form-data">
                           @csrf
                          <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Add a comment here</span> </label>
                                <textarea name="comment" class="form-control"  id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                             
                                <input type="show" name="post_id" class="form-control" value="{{$post->id}}"  id="exampleFormControlTextarea1">

                            </div>
                          </div>
                        </div>
                       
                            <div class="text-center">
                              <button type="submit" style="color:white;" class="btn bg-success">Submit</button>
                            </div>
                        </form>
                        </div>

                        <div class="comment-section">
                          <h5 class="font-weight-600">Comments</h5>
                          @foreach($comments as $comment)
                          <div class="comment-box">
                            <div class="d-flex align-items-center">
                              <div class="rotate-img">
                                <img
                                  src="../news/images/faces/face2.jpg"
                                  alt="banner"
                                  class="img-fluid img-rounded mr-3"
                                />
                              </div>
                              <div>
                                <p class="fs-12 mb-1 line-height-xs">
                                 {{$comment->created_at->isoFormat('D/M/Y')}}
                                </p>
                                <p
                                  class="fs-16 font-weight-600 mb-0 line-height-xs"
                                >
                                  {{$comment->User->name}}
                                </p>
                              </div>
                            </div>

                            <p class="fs-12 mt-3">
                           {{$comment->comment}}
                       
                            </p>

                        <!-- Button trigger modal -->

                                             
                          </div>
                          <!--
                           <div class="comment-box from">
                            <div class="d-flex align-items-center">
                              <div class="rotate-img">
                                <img
                                  src="../news/images/faces/face3.jpg"
                                  alt="banner"
                                  class="img-fluid img-rounded mr-3"
                                />
                              </div>
                              <div>
                                <p class="fs-12 mb-1 line-height-xs">
                                  24 Jul 2020
                                </p>
                                <p
                                  class="fs-16 font-weight-600 mb-0 line-height-xs"
                                >
                                  Mohsen Salehi
                                </p>
                              </div>
                            </div>

                            <p class="fs-12 mt-3">
                              Praesent facilisis vulputate venenatis. In
                              facilisis placerat arcu, in tempor neque aliquet
                              quis. Integer lacinia in ligula eu sodales. Proin
                              non lorem iaculis, dictum lorem quis, bibendum
                              leo.
                            </p>
                          </div>
                          -->
                          @endforeach
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <h2 class="mb-4 text-primary font-weight-600">
                        Latest news
                      </h2>
                      @foreach($news as $new)
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                  {{$new->title}}
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="{{asset('/storage/feature/'. $new->feature)}}"
                                    alt="banner"
                                    class="img-fluid"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach

                      <div class="trending">
                        <h2 class="mb-4 text-primary font-weight-600">
                          Trending
                        </h2>
                        @foreach($news as $new)
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="{{asset('/storage/feature/'.$new->feature)}}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            {{$new->title}}
                          </h3>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                        </div>
                        @endforeach
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:../partials/_footer.html -->
      
        <!-- partial -->
      </div>
    </div>









   
    




@endsection