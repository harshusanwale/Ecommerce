<!DOCTYPE html>

<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Create Merchant</title>



    <!-- Bootstrap -->

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->

    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- iCheck -->

    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatables -->

    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">

    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">

    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->

    <link href="build/css/custom.min.css" rel="stylesheet">

  </head>



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        @include('Admin.template.header')



        <!-- top navigation -->

         <div class="top_nav">

          <div class="nav_menu">

            <nav>

              <div class="nav toggle">

                <a id="menu_toggle"><i class="fa fa-bars"></i></a>

              </div>



              <ul class="nav navbar-nav navbar-right">

                <li class="">

                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                    <img src="{{ asset('images/img.jpg')}}" alt="">{{ Session::get('name')}}

                    <span class=" fa fa-angle-down"></span>

                  </a>

                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="{{ route('chagepassword') }}">Manage Account</a></li>                  

                    <li><a href="{{ route('Userlogout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>

                  </ul>

                </li>

                

              </ul>

            </nav>

          </div>

        </div>

        <!-- /top navigation -->



        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Add Merchant</h3>

              </div>



              <!-- <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  <div class="input-group">

                    <input type="text" class="form-control" placeholder="Search for...">

                    <span class="input-group-btn">

                      <button class="btn btn-default" type="button">Go!</button>

                    </span>

                  </div>

                </div>

              </div> -->

            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                      </li>

                      

                      <li><a class="close-link"><i class="fa fa-close"></i></a>

                      </li>

                    </ul>

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <br />

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" 
                    method="POST" action="{{ route('add-merchant.post')}}" enctype="multipart/form-data">

                     @csrf

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="user_name" name="user_name"  class="form-control col-md-7 col-xs-12">

                          @if($errors->has('user_name'))



                        <span class="text-danger">{{ $errors->first('user_name')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="name" name="name"  class="form-control col-md-7 col-xs-12">

                          @if($errors->has('name'))



                        <span class="text-danger">{{ $errors->first('name')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="last_name"  class="form-control col-md-7 col-xs-12">

                          @if($errors->has('last_name'))



                        <span class="text-danger">{{ $errors->first('last_name')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="user_mob">

                          @if($errors->has('user_mob'))



                        <span class="text-danger">{{ $errors->first('user_mob')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="email-name" class="form-control col-md-7 col-xs-12" type="email" name="email">

                          @if($errors->has('email'))



                        <span class="text-danger">{{ $errors->first('email')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Full Company Name</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="comapany_name" class="form-control col-md-7 col-xs-12" type="text" name="comapany_name">

                          @if($errors->has('comapany_name'))



                        <span class="text-danger">{{ $errors->first('comapany_name')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mailing Address</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="mail_add" class="form-control col-md-7 col-xs-12" type="text" name="mail_add">

                          @if($errors->has('mail_add'))



                        <span class="text-danger">{{ $errors->first('mail_add')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">City</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="city" class="form-control col-md-7 col-xs-12" type="text" name="city">

                          @if($errors->has('city'))



                        <span class="text-danger">{{ $errors->first('city')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">State</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="state" class="form-control col-md-7 col-xs-12" type="text" name="state">

                          @if($errors->has('state'))



                        <span class="text-danger">{{ $errors->first('state')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Post Code</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="post_code" class="form-control col-md-7 col-xs-12" type="text" number="number" name="post_code">

                          @if($errors->has('post_code'))



                        <span class="text-danger">{{ $errors->first('post_code')}}</span>



                        @endif

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">User Status</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <select name="user_status" id="user_status"  class="form-control">



                              <option value="1" >Active</option>



                              <option value="0" >Inactive</option>



                            </select>

                            @if($errors->has('user_status'))



                            <span class="text-danger">{{ $errors->first('user_status')}}</span>



                           @endif

                        </div>

                      </div>



                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="password" class="form-control col-md-7 col-xs-12" type="password" name="password"> 

                          @if($errors->has('password'))



                        <span class="text-danger">{{ $errors->first('password')}}</span>



                        @endif 

                        </div>

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="confirmpassword" class="form-control col-md-7 col-xs-12" type="password" name="confirmpassword"> 

                           @if($errors->has('confirmpassword'))



                        <span class="text-danger">{{ $errors->first('confirmpassword')}}</span>



                        @endif 

                        </div>

                       

                      </div>

                      <div class="form-group">

                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Profile</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="file" class="form-control col-md-7 col-xs-12" type="file" name="image"  accept="image/png, image/gif, image/jpeg"> 

                           @if($errors->has('image'))



                        <span class="text-danger">{{ $errors->first('image')}}</span>



                        @endif 

                        </div>

                       

                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input id="birthday" name="Dob" class="date-picker form-control col-md-7 col-xs-12"  type="date">

                           @if($errors->has('Dob'))



                        <span class="text-danger">{{ $errors->first('Dob')}}</span>



                        @endif

                        </div>

                       

                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          

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

        <!-- /page content -->



        <!-- footer content -->

        @include('Admin.template.footer')

        <!-- /footer content -->

      </div>

    </div>



    <!-- jQuery -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->

    <script src="vendors/fastclick/lib/fastclick.js"></script>

    <!-- NProgress -->

    <script src="vendors/nprogress/nprogress.js"></script>

    <!-- iCheck -->

    <script src="vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>

    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>

    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>

    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>

    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>

    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>

    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>

    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <script src="vendors/jszip/dist/jszip.min.js"></script>

    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>

    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>



    <!-- Custom Theme Scripts -->

    <script src="build/js/custom.min.js"></script>



  </body>

</html>