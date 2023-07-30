@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Tables <small>All Classes</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Class <small>Information</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table table-bordered">
                    <thead>

                        <tr>
                            <th>SL</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $key=>$row)
                            <tr>
                                <th >{{ ++$key }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->user_name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    @if ( $row->user_status==3 )
                                        {{ "Student" }}
                                    @elseif($row->user_status==2)
                                        {{ "Teacher" }}
                                    @elseif($row->user_status==1)
                                        {{ "Admin / Supper-Admin" }}
                                    @endif
                                </td>

                                <td>
                                  <a href="{{ route('user.edit',$row->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fa fa-edit"></i></a>
                                  <a href="{{ route('user.destroy',$row->id) }}" id="delete" class="btn btn-danger sm" title="Delete Data"><i class="fa fa-trash"></i></a>
                                    
                                </td>
                            </tr>
                        @endforeach
               
                    </tbody>
                    </table>
                    <span style="padding-top: 20px;">
                      {!! $user->withQueryString()->links('pagination::bootstrap-5') !!}
                   </span>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection