@extends('layouts.app')
@section('content')

            <div class="right_col" role="main">
                <div class="">
                  <div class="page-title">
                    <div class="title_left">
                      <h3>Added Subject Form</h3>
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
                  <div class="clearfix"></div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2> Subject Added Form</h2>
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
                          <br />

                          <form class="form-horizontal form-label-left" action="{{ route('subject.update',$edit->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Class Name <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="class_id" id="" class="form-control col-md-7 col-xs-12 @error('class_id') is-invalid @enderror">
                                    <option value="" disabled selected>Choose Class</option>
                                    @foreach ($classes as $row)
                                        <option value="{{ $row->id }}" >{{ $row->class }}</option>
                                    @endforeach
                                </select>

                                @error('class_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department Name <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="department_id" id="" class="form-control col-md-7 col-xs-12 @error('department_id') is-invalid @enderror">
                                    <option value="" disabled selected>Choose Department</option>
                                    @foreach ($department as $row)
                                        <option value="{{ $row->id }}" >{{ $row->department }}</option>
                                    @endforeach
                                </select>

                                @error('department_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                              
                          
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Subject Name <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="subject" class="form-control col-md-7 col-xs-12" name="subject" value="{{ $edit->subject }}">
                              </div>
                            </div>
                      
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Update</button>
                              </div>
                            </div>
      
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
      
                  
@endsection