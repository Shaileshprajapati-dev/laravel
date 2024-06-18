@include('inc/header')

<h4 class="text-center pt-5">Contact <span class="text-warning"> <u>Us </u></span></h4>
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <img src="img/map.png" style="height: 600px; width: 700px;"  alt="">
            <!--googrle start map-->
        <iframe sc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.894947206753!2d82.36452701502932!3d26.1675505834541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39907d3228ed6849%3A0x77e029f4cc61948!2sSmoking!5e0!3m2!1sen!2sin!4v1641640468737!5m2!1sen!2sin" width="200px" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!--google end map-->
        </div>
        
        <div class="col-6 pt-5">
        <form method="post" action="/send">
          @csrf
        <div class="row g-3">
            <hr>
            
  <div class="col">
    <input type="text" class="form-control" id="name" placeholder="Your Name...." aria-label="First name">
  </div>
  <div class="col">
    <input type="email" class="form-control" id="email" placeholder="Email Id..." aria-label="Last name">
  </div>
<br>
<div class="mb-3">
  <input type="Subject" class="form-control" id="subject" id="exampleFormControlInput1" placeholder="subject">
</div>
<div class="mb-3">
  <textarea class="form-control" id="massege" id="exampleFormControlTextarea1" placeholder="massege" rows="3"></textarea>
</div>
<button type="button" submit="submit" class="btn btn-warning" value="send">send</button>
<hr>
        </div>
        </form>
    </div>
</div>
@include('inc/footer')