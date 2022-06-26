@extends('layouts.app')

@section('News', 'Change the way')

@section('content')


        <!-- partial -->
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
                    <div class="col-sm-12">
                      <h1 class="font-weight-600 mb-4">
                        {{$category->name}}
                      </h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                    

                      @foreach($news as $new)
                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="{{asset('/storage/feature/' . $new->feature) }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                           <a style="color:black;" href="/Post/{{$new->id}}">{{$new->title}}</a>
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                          </p>
                          <p class="fs-15">
                            Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a
                            type specimen book.
                          </p>
                        </div>
                      </div>

                      @endforeach

                    </div>

                    <div class="col-lg-4">
                      <h2 class="mb-4 text-primary font-weight-600">
                        Latest news
                      </h2>
                      @foreach($posts as $post)
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-8">
                                <h5 class="font-weight-600 mb-1">
                                  {{$post->title}}
                                </h5>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Photo </span>10 Minutes ago
                                </p>
                              </div>
                              <div class="col-sm-4">
                                <div class="rotate-img">
                                  <img
                                    src="{{asset('/storage/feature/' . $post->feature) }}"
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
                        @foreach($posts as $post)
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="{{asset('/storage/feature/' . $post->feature) }}"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                            {{$post->title}}
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
               <script type="text/javascript">
           var months = ['January','February','March','April','May','June','July',
'August','September','October','November','December'];       
var tomorrow = new Date();
tomorrow.setTime(tomorrow.getTime() + (1000*3600*24));       
document.getElementById("spanDate").innerHTML = months[tomorrow.getMonth()] + " " + tomorrow.getDate()+ ", " + tomorrow.getFullYear();
    </script>
@endsection