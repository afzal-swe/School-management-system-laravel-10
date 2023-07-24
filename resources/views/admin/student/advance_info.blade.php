

@extends('layouts.app')
@section('content')

            <div class="right_col" role="main">
                <div class="">
                  <div class="page-title">
                    <div class="title_left">
                      <h3>Advance Student Information</h3>
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
                          <h2> Student Info</h2>
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

                          <form class="form-horizontal form-label-left" action="#" method="POST">
                            @csrf
                            

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="class" class="form-control col-md-7 col-xs-12 " name="class" >

                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_name" class="form-control col-md-7 col-xs-12 @error('stu_name') is-invalid @enderror" name="stu_name" placeholder="Full Name">

                                @error('stu_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone Number <span class="required text-danger">*</span></label>
  
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="stu_phone" class="form-control col-md-7 col-xs-12 @error('stu_phone') is-invalid @enderror" name="stu_phone" placeholder="01XXXXXXXXX">
  
                                  @error('stu_phone')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-mail <span class="required text-danger">*</span></label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="stu_email" class="form-control col-md-7 col-xs-12 @error('stu_email') is-invalid @enderror" name="stu_email" placeholder="example@gmail.com">

                                @error('stu_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Number <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_id" class="form-control col-md-7 col-xs-12 @error('stu_id') is-invalid @enderror" name="stu_id" placeholder="ID Number">

                                @error('stu_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date of Barth <span class="required text-danger">*</span></label>
  
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="date" id="stu_barth" class="form-control col-md-7 col-xs-12 @error('stu_barth') is-invalid @enderror" name="stu_barth" placeholder="Date of Barth">
  
                                  @error('stu_barth')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                            </div>
  


                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Father's Name <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_father" class="form-control col-md-7 col-xs-12 @error('stu_father') is-invalid @enderror" name="stu_father" placeholder="Father's Name">

                                @error('stu_father')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mother's Name <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_mother" class="form-control col-md-7 col-xs-12 @error('stu_mother') is-invalid @enderror" name="stu_mother" placeholder="Mother's Name">

                                @error('stu_mother')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_address" class="form-control col-md-7 col-xs-12 @error('stu_address') is-invalid @enderror" name="stu_address" placeholder="Address">

                                @error('stu_address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Zip Code <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="zip_code" class="form-control col-md-7 col-xs-12 @error('zip_code') is-invalid @enderror" name="zip_code" placeholder="Zip Code">

                                @error('zip_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Post Code <span class="required text-danger">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="post_code" class="form-control col-md-7 col-xs-12 @error('post_code') is-invalid @enderror" name="post_code" placeholder="Post Code">

                                @error('post_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>

                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profile Image </label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="stu_image" class="form-control col-md-7 col-xs-12" name="stu_image" >

                                
                              </div>
                            </div>
                      
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
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

    