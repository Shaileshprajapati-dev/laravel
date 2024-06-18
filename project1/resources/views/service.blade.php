@include('inc/header')
@section('content')
<h4 class="text-center pt-5">Service <span class="text-warning"><u>Pages</u> </span></h4>
<p class="bg-warning text-light">This card has supporting text below as a natural lead-in to additional content This is a wider card with supporting text below as a natural lead-in to additional .
This card has supporting text below as a natural lead-in to additional content This is a wider card with supporting text below as a natural lead-in to additional .
This card has supporting text below as a natural lead-in to additional content This is a wider card with supporting text below as a natural lead-in to additional .
This card has supporting text below as a natural lead-in to additional content This is a wider card with supporting text below as a natural lead-in to additional .
This card has supporting text below as a natural lead-in to additional content This is a wider card with supporting text below as a natural lead-in to additional .
</p>
<div class="container">
    <h3 class="text-center text-warning"> Welcome Register Pages</h3>
 <form class="row g-3" method="POST" action="/register">
 {{ csrf_field() }}
<div class="row g-3">
  <div class="col">
   First Name: <input type="text"  name="fname" id="fname" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
   Last Name: <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
<div class="row g-3">
  <div class="col">
   Father Name: <input type="text" name="fathername" id="fathername" class="form-control" placeholder="Father name" aria-label="First name">
  </div>
  <div class="col">
   Phone :<input type="text" name="phone" id="phone" class="form-control" placeholder="phone Number" aria-label="Last name">
  </div>
</div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" id="inputEmail4">
  </div><br/><br/>
  <div class="col-md-6">
    <label for="inputPassword4" name="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" name="address" id="address" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" id="city" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" name="state" id="state" class="form-select">
      <option selected>--select--</option>
      <option>Utter Pradesh</option>
      <option>Delhi</option>
      <option>Punjab</option>
      <option>Gujrat</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip"  class="form-label">Zip</label>
    <input type="text" name="pin" id="pin" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>
@include('inc/footer')
@endsection