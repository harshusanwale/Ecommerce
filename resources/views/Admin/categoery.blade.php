<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Category List</title>
      <!-- Bootstrap -->    
      <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Font Awesome -->    
      <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <!-- Custom Theme Style -->    
      <link href="{{ asset('build/css/custom.min.css')}}" rel="stylesheet">
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            @include('Admin.template.header')           
			<!-- top navigation -->        
            <div class="top_nav">
               <div class="nav_menu">
                  <nav>
                     <div class="nav toggle">                <a id="menu_toggle"><i class="fa fa-bars"></i></a>              </div>
                     <ul class="nav navbar-nav navbar-right">
                        <li class="">
                           <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">                
						   <img src="{{ asset('/images/img.jpg')}}" alt="">{{ Session::get('name')}}                 
						   <span class=" fa fa-angle-down"></span>                  </a>                  
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
                        <h3>Category List</small></h3>
                     </div>
                     <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                           <div class="input-group">         
						   <input type="text" class="form-control" placeholder="Search for...">           
						   <span class="input-group-btn">                 
						   <button class="btn btn-default" type="button">Search</button></span>            
						   </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                     @if(Session::has('success'))             
                     <div class="alert alert-success alert-block">       
     				 <button type="button" class="close" data-dismiss="alert">×</button>          
					 <strong>{{ Session::get('success')}}</strong>         
					 </div>
                     @endif              
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                           <div class="x_title">
                              <ul class="nav navbar-right panel_toolbox">
                                 <a href="{{route('add-category')}}" class="btn btn-default" style="background: #2A3F54;color:#FFFFFF"> Add New Category</a>                      
                                 <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>                      </li>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                           <div class="x_content">
                              <table id="datatable" class="table table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <th>Id#</th>
                                       
                                       <th>Category name</th>
                                       <th>Parent Category</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($getList as $list)                        
                                    <tr>
                                       <td>{{ $loop->index+1}}</td>
                                                                
                                       <td>{{ $list->name}}</td>
                                       @if($list->category_id)                          
                                       <td>{{$list->parent->name}}</td>
                                       @else                           
                                       <td>No parent category</td>
                                       @endif           
                                       <td><a href="{{route('edit-category',$list->id)}}"><i class="fa fa-edit"></i></a><a href="javascript::void(0)" class="delete_category" data-id="{{$list->id}}"><i class="fa fa-trash-o"></i></a>   </td>                        </td>
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
         <!-- /page content -->   
		 <!-- footer content -->      
		@include('Admin.template.footer')   
		<!-- /footer content -->      
      </div>
      </div>    
	  <!-- jQuery --> 
	  <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>   
	  <!-- Bootstrap -->    
	  <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>   
	  <!-- Custom Theme Scripts -->    
	  <script src="{{ asset('build/js/custom.min.js') }}"></script>  
   </body>
   <script>
   $(".delete_category").click(function(){
      if(confirm('Are you delete this category')){
         var id = $(this).data('id');
         $.ajax({
                url: '{{route("delete-category-post")}}',
                dataType: 'text',
                method: 'post',
                data: {
                 _token : "{{csrf_token()}}",
                 'id' : id
                },
                success: function( data ){
                  location.reload();
                },
               //  error: function( jqXhr, textStatus, errorThrown ){
               //      console.log( errorThrown );
               //  }
            });
      }
//   alert("The paragraph was clicked.");
   });
   </script>
</html>