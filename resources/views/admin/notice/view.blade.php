@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Tables <small>All Books Information</small></h3>
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
                    <h2>Information <small></small></h2>
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
                        <div class="row top_tiles">
                          @foreach ($notice as $key=>$row)
                          <a href="">
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="tile-stats">
                                {{-- <div class="icon"><i class="fa fa-check-square-o"></i></div> --}}
                                <h3 style="color: green; margin-top:5px; padding:5px;">{{ $row->name }}</h3>
                                <p>Date : {{ $row->date }}</p>
                                <p>Details : {{ $row->details }}</p>
                              </div>
                            </div>
                          </a>
                          @endforeach
                            

                        </div>
                  </table>
                  <span style="padding-top: 20px;">
                    {!! $notice->withQueryString()->links('pagination::bootstrap-5') !!}
                 </span>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection