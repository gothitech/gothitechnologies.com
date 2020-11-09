@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <section class="col-sm-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3> Add Service
                 <a class="btn btn-success float-right btn-sm" href="{{ route('services.view')}}"><i class="fa fa-list"></i> Service List</a>
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
              	<form method="post" action="{{ route('services.store')}}" id="myForm" enctype="multipart/form-data">
              		@csrf
              		<div class="form-row">
              			<div class="form-group col-md-12">
              				<label for="short_title"> Short Title</label>
              				<input type="text" name="short_title" class="form-control" id="short_title">
              			</div>
              			<div class="form-group col-md-12">
              				<label for="long_title"> Long Title</label>
              				
              				<textarea type="text" name="long_title" class="form-control" id="long_title" rows="5" ></textarea>
              			</div>

              		
              		
              			
              			<div class="form-group col-md-6">
              				<input type="submit" value="Submit" class="btn btn-primary">
              			</div>

              		</div>

              	</form>

              </div>
            </div>
           
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
               </div>
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

</div>

 <script type="text/javascript">
$(document).ready(function () {
  $('#myForm').validate({
    rules: {
    	 usertype: {
        required: true,
      },
    	name: {
        required: true,
      },

    
      email: {
        required: true,
        email: true,
      },

      password: {
        required: true,
        minlength: 5
      },
      password2: {
        required: true,
        equalTo: '#password'
    },

    messages: {

    	 usertype: {
        required: "Please Select a Roll",
        
      },

    	name: {
        required: "Please enter a Name",
        
      },
     
      email: {
        required: "Please enter a email address",
        
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
     password2: {
        required: "Please provide a Confirm password",
        equalTo: "Your password must be at least 5 characters long"
      },
      
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection