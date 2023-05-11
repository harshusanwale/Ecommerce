<!DOCTYPE html>

<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">



  <title>Create Category</title>



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

              <h3>Add Category</h3>

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

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('add-category-post')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">

                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>

                      </label>

                      <div class="col-md-6 col-sm-6 col-xs-12">

                        <input type="text" id="user_name" name="name" class="form-control col-md-7 col-xs-12">

                        @if($errors->has('name'))



                        <span class="text-danger">{{ $errors->first('name')}}</span>



                        @endif

                      </div>

                    </div>

                    <div class="form-group">

                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Subcategory</label>

                      <div class="col-md-6 col-sm-6 col-xs-12">

                        <select name="parent_id" id="parent_id" class="form-control">
                          <option value="">NO subcategory</option>
                          @foreach($list as $data)
                          <option value="{{$data->id}}">{{$data->name}}</option>

                          @endforeach

                        </select>

                        @if($errors->has('parent_id'))



                        <span class="text-danger">{{ $errors->first('parent_id')}}</span>



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