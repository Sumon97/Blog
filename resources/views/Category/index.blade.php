@extends('layouts.admin')

@section('Law Diary', 'Change the way')


@section('content')


<div class="container-fluid py-4">
     



       <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>Category</h5>
              
              <button style="float: right; margin: -58px 0px 0px 0px;" type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new Category</button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <!-- start form from here -->
                        <form role="form text-left" method="Post" action="/Category" enctype="multipart/form-data">
                           @csrf
                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Category Name<span style="color:red;"> &#42; </span> </label>
                              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder=" Category name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Slug<span style="color:red;"> &#42; </span> </label>
                              <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="slug">
                            </div>
                          </div>
                        </div>
                       
                       
                   
                            <div class="text-center">
                              <button type="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
             @if(count($categories) > 0)
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Profession</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Education</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Listed</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                    </tr>
                  </thead>
                 @foreach($categories as $category)
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                              
                            <!--img src=""  class="avatar avatar-sm me-3" alt="user1"-->
                       

                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"> <a href=""> </a> {{$category->name}} </h6>
                            <p class="text-xs text-secondary mb-0"></p>
                            <p class="text-xs text-secondary mb-0"></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$category->slug}}</p>
                        <p class="text-xs text-secondary mb-0"></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                      </td>

                       <td class=" ">
                        <a href=""  class="btn btn-sm bg-gradient-success" >
                          View
                        </a>
                      </td>
                      <td class=" ">

                        <form method="post" action="">
                          @csrf 
                          {{method_field('DELETE')}}
                          <input type="submit" value="Delete" onclick="return confirm('Are you sure that you want to Delete this client for ever? If you delete this client then everything will be deleted related of this client')" class="btn btn-sm  bg-gradient-danger"  />
                      </td>
                    </tr>
                  </tbody>
                 @endforeach
                </table>
              @else
                <p style="margin: 0px 0px 0px 26px; color: #252f40; font-family:sans-serif;" > You have no Category name. Add a one and get started.</p>
              @endif
              </div>
            </div>
          </div>
        </div>
      </div>


      </div>

      
      </div>



@endsection