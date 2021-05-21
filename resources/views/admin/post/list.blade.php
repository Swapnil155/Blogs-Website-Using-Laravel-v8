@extends('admin.layout.layout')

@section('page_title', 'Post Lising')

@section('container')

<div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Post <small><a href="/admin/post/add" >Add Post</a> <span style="color:red;">{{session('msg')}}<span></small></h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>title</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th colspan="2" >Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                          @foreach ($result as $list)
                                            <tr>
                                              <td>{{ $list->id }}</td>
                                              <td>{{ $list->title }}</td>
                                              <td><img src="{{ asset('storage/post/'.$list->image) }}" width="100px"></td>
                                              <td>{{ $list->post_date }}</td>
                                              <td>
                                              @if ( $list->status == 1 )
                                                <a href="{{url('/admin/post/deactive/'.$list->id)}}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Deactive the Post" style="color: #fff !important">Deactive</a>
                                                @else
                                                <a href="{{url('/admin/post/active/'.$list->id)}}"class="btn btn-primary " style="color: #fff !important" data-toggle="tooltip" data-placement="bottom" title="Active the Post">Active</a>
                                              @endif
                                              </td>
                                              <td>
                                                <a href="{{url('/admin/post/edit/'.$list->id)}}"class="btn btn-primary " style="color: #fff !important">Edit</a>
                                                <a href="{{url('/admin/post/delete/'.$list->id)}}" class="btn btn-danger " style="color: #fff !important">Delete</a>
                                              </td>
                                            </tr>
                                          @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
@endsection