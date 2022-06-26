@extends('layouts.admin')

@section('Law Diary', 'Change the way')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

@section('content')


<div class="container-fluid py-4">
     
     <h1>Post A News</h1>

       <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5></h5>

                      <!-- start form from here -->
                        <form role="form text-left" method="Post" action="/Post" enctype="multipart/form-data">
                           @csrf
                          <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Title<span style="color:red;"> &#42; </span> </label>
                                <textarea name="title" class="form-control" id='title' id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                          </div>
                           <div class="col-md-12">
                            <div class="form-group">
                              <label>Description<span style="color:red;"> &#42;</span></label>
                              <textarea name="detail" id='post' class="form-control"  id="exampleFormControlTextarea1" rows="8"></textarea>
                            </div>
                          </div>
                        </div>
                       
                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                               

                  <select class="form-control select2-multi" name="tags[]" multiple="multiple">
          @foreach($tags as $tag)
            <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
          @endforeach

        </select>           
                                   
      
 
                                  
                             
                            </div>
                          </div>
                           <div class="col-md-6">
                            <div class="form-group">
                              <label>Category</label>
                              <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                     @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                        </div>

                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Feature Photo</label>
                               <input type="file"  name="feature" class="form-control" id="exampleFormControlInput1">
                            </div>
                          </div>
                        </div>
                       
                   
                            <div class="text-center">
                              <button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Submit</button>
                            </div>
                        </form>
   

            </div>
          
          </div>
        </div>
      </div>


      </div>

      
      </div>

      <script>
        ClassicEditor
        .create( document.querySelector( '#post' ) )
        .catch( error => {
        console.error( error );
        } );
	</script>



@endsection








