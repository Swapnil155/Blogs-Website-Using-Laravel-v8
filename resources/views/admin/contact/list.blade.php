@extends('admin.layout.layout')

@section('page_title', 'Contact Lising')

@section('container')
<div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Contacts <span style="color:red;">{{session('msg')}}<span></small></h2>

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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Message</th>
                                            <th>Added on</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                          @foreach ($result as $list)
                                            <tr>
                                              <td>{{ $list->id }}</td>
                                              <td>{{ $list->name }}</td>
                                              <td>{{ $list->email }}</td>
                                              <td>{{ $list->mobile }}</td>
                                              <td>{{ $list->message }}</td>
                                              <td>{{ $list->added_on }}</td>
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