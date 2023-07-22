
<div class="navbar nav_title" style="border: 0;">
    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{ asset('admin/build/images/img.jpg')}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>John Doe</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->

  <br />
 
 
 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li ><a href="{{ route('dashboard') }}" style="font-size: 21px;"><i class="fa fa-dashboard"></i>Dashboard</a></li>

        <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">About</a></li>
            <li><a href="form.html">Update Profile</a></li>
            <li><a href="form.html">Change Password</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-user"></i> Admin <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="form.html">Add Admin</a></li>
              <li><a href="form.html">Manage Admin</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-bank"></i> Account <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="form.html">Create account</a></li>
                <li><a href="form.html">Manage account</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-book"></i> Libraria <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="form.html">Add Books</a></li>
              <li><a href="form.html">Manage Books</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Teachers <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="form.html">Add Teacher</a></li>
              <li><a href="form.html">Manage Teachers</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-graduation-cap"></i> Students <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="form.html">Add Student</a></li>
              <li><a href="form.html">Manage Students</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Registration <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="form.html">Student Registration</a></li>
              <li><a href="form.html">Students Register</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Department <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('department.create') }}">Add Department</a></li>
              <li><a href="{{ route('department.index') }}">Manage Department</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> User Type <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="form.html">add User</a></li>
              <li><a href="{{ route('user_type.index') }}">Manage User</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Class <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ route('class.create') }}">Create Class</a></li>
            <li><a href="{{ route('class.index') }}">Manage Class</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Subject <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ route('subject.create') }}">Create Subject</a></li>
            <li><a href="{{ route('subject.index') }}">Manage Subject</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Exam <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">Create Exam</a></li>
            <li><a href="form.html">Manage Exam</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Quize <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">Create Quize</a></li>
            <li><a href="form.html">Manage Quize</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Attendance <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">Add Attendance</a></li>
            <li><a href="form.html">Manage Attendance</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-gear"></i> Setting <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">Notice</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> User Role <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="form.html">SEO</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
            <li><a href="form.html">Events</a></li>
          </ul>
        </li>

        

        

       

      </ul>
    </div>


    <div class="menu_section">
      <h3>Live On</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="e_commerce.html">E-commerce</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="project_detail.html">Project Detail</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="profile.html">Profile</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="page_403.html">403 Error</a></li>
            <li><a href="page_404.html">404 Error</a></li>
            <li><a href="page_500.html">500 Error</a></li>
            <li><a href="plain_page.html">Plain Page</a></li>
            <li><a href="login.html">Login Page</a></li>
            <li><a href="pricing_tables.html">Pricing Tables</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              <li><a href="#level1_1">Level One</a>
              <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="level2.html">Level Two</a>
                  </li>
                  <li><a href="#level2_1">Level Two</a>
                  </li>
                  <li><a href="#level2_2">Level Two</a>
                  </li>
                </ul>
              </li>
              <li><a href="#level1_2">Level One</a>
              </li>
          </ul>
        </li>                  
        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
      </ul>
    </div>

  </div>
  <!-- /sidebar menu -->