@extends('layout.master')

@section('styles')
@endsection

@section('main_content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Services Section</title>
    <!-- Font Awesome CDN-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
<div class="row contact py-3 justify-content-evenly">
<h4 class="text-center">Contact <b class="text-warning"> Us</b></h4>
<div class="col-sm-4 frm bg-dark bg-opacity-25 p-4">
<!---input group-->
<form method="post">
Name
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
Email
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-male"></i></span>
  <input type="text" class="form-control" placeholder="Enter the email " aria-label="Username" aria-describedby="basic-addon1">
</div>
Password
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
  <input type="text" class="form-control" placeholder="Enter the password" aria-label="Username" aria-describedby="basic-addon1">
</div>
Message
<div class="input-group">
  <span class="input-group-text"><i class="fa fa-envelope"></i>With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div><br/>
<input type="submit" value="Save" class="btn btn-success"/>
</form>
<!---end input group-->

</div>
<div class="col-sm-6 gmap">


 <!--google start map-->
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.894947206753!2d82.36452701502932!3d26.1675505834541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39907d3228ed6849%3A0x77e029f4cc61948!2sSmoking!5e0!3m2!1sen!2sin!4v1641640468737!5m2!1sen!2sin" width="900px" height="530" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 <!--google end map-->
</div>
</div>
@endsection
