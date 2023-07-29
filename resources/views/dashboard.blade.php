@extends('layouts.app')
@section('content')

<div class="right_col" role="main">
    <div class="">

      @if (Auth::user()->user_status==1)
      <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-graduation-cap text-info" aria-hidden="true"></i></i></div>
            @php
               $student = DB::table('students')->get();
            @endphp
            <div class="count  "><samp class="text-success">{{ count($student)}}</samp></div>
            <h3 style="color: green;">Total Students</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-user text-info" aria-hidden="true"></i></div>
            @php
               $teacher = DB::table('teachers')->get();
            @endphp
            <div class="count"><samp class="text-success">{{ count($teacher)}}</samp></div>
            <h3 style="color: green;">Total Teachers</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-book text-info" aria-hidden="true"></i></div>
            @php
               $subjects = DB::table('subjects')->get();
            @endphp
            <div class="count"><samp class="text-success">{{ count($subjects)}}</samp></div>
            <h3 style="color: green;">Total Books</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-users text-info" aria-hidden="true"></i></div>
            @php
               $users = DB::table('users')->get();
            @endphp
            <div class="count"><samp class="text-success">{{ count($users)}}</samp></div>
            <h3 style="color: green;">Total Users</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
      </div>
      @endif

      @if (Auth::user()->user_status==1)
      <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-building text-info" aria-hidden="true"></i></div>
            @php
               $departments = DB::table('departments')->get();
            @endphp
            <div class="count"><samp class="text-success">{{ count($departments)}}</samp></div>
            <h3 style="color: green;">Departments</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-registered text-info" aria-hidden="true"></i></i></div>
            @php
               $departments = DB::table('departments')->get();
            @endphp
            <div class="count">179</div>
            <h3 style="color: green;">New Register</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-building text-info" aria-hidden="true"></i></div>
            @php
               $classes = DB::table('classes')->get();
            @endphp
            <div class="count"><samp class="text-success">{{ count($classes)}}</samp></div>
            <h3 style="color: green;">Total Classes</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-book text-info" aria-hidden="true"></i></div>
            @php
            $book = DB::table('books')->get();
            @endphp
            <div class="count"><samp class="text-success">{{ count($book)}}</samp></div>
            <h3 style="color: green;">Total Cource</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
      </div>
      @endif

      <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-circle-o text-info" aria-hidden="true"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Students Attendance</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-circle-o text-info" aria-hidden="true"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Teachers Attendance</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-circle-o text-info" aria-hidden="true"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Libraria Attendance</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-circle-o text-info" aria-hidden="true"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Total Attendance</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
      </div>

      <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-university text-info" aria-hidden="true"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Total Payable</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o text-info"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Total Paid</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-check-square-o text-danger"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Total Due</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-sort-amount-desc text-info" aria-hidden="true"></i></div>
            <div class="count">179</div>
            <h3 style="color: green;">Extra TK</h3>
            <p>Lorem ipsum psdea itgum rixt.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Transaction Summary <small>Weekly progress</small></h2>
              <div class="filter">
                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="demo-container" style="height:280px">
                  <div id="chart_plot_02" class="demo-placeholder"></div>
                </div>
                <div class="tiles">
                  <div class="col-md-4 tile">
                    <span>Total Sessions</span>
                    <h2>231,809</h2>
                    <span class="sparkline11 graph" style="height: 160px;">
                         <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                    </span>
                  </div>
                  <div class="col-md-4 tile">
                    <span>Total Revenue</span>
                    <h2>$231,809</h2>
                    <span class="sparkline22 graph" style="height: 160px;">
                          <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                    </span>
                  </div>
                  <div class="col-md-4 tile">
                    <span>Total Sessions</span>
                    <h2>231,809</h2>
                    <span class="sparkline11 graph" style="height: 160px;">
                           <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                    </span>
                  </div>
                </div>

              </div>

              <div class="col-md-3 col-sm-12 col-xs-12">
                <div>
                  <div class="x_title">
                    <h2>Top Profiles</h2>
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
                  <ul class="list-unstyled top_profiles scroll-view">
                    <li class="media event">
                      <a class="pull-left border-aero profile_thumb">
                        <i class="fa fa-user aero"></i>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                      </div>
                    </li>
                    <li class="media event">
                      <a class="pull-left border-green profile_thumb">
                        <i class="fa fa-user green"></i>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                      </div>
                    </li>
                    <li class="media event">
                      <a class="pull-left border-blue profile_thumb">
                        <i class="fa fa-user blue"></i>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                      </div>
                    </li>
                    <li class="media event">
                      <a class="pull-left border-aero profile_thumb">
                        <i class="fa fa-user aero"></i>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                      </div>
                    </li>
                    <li class="media event">
                      <a class="pull-left border-green profile_thumb">
                        <i class="fa fa-user green"></i>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
