@include('inc/header')

<h4 class="text-center pt-5">About<span class="text-warning"><u>  Us </u></span></h4>
<p class="bg-warning text-light">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
empor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
por erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
<div class="card-group">
  <div class="card">
    <img src="img/a3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">Welcome About Pages</h5>
      <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
      This is a wider card with supporting text below as a natural lead-in to additional 
      </p>
      <button type="button" class="btn btn-secondary" onclick="location.href='{{url('completed')}}'">Secondary</button>
      <button type="button" class="btn btn-warning mx-4" <a onclick="location.href='{{url('completed')}}'"> Success </a></button>
    </div>
  </div>
  <div class="card">
    <img src="img/a6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">Welcome About Pages</h5>
      <p class="card-text text-center">This card has supporting text below as a natural lead-in to additional content
      This is a wider card with supporting text below as a natural lead-in to additional .</p>
      <button type="button" class="btn btn-secondary" onclick="location.href='{{url('completed')}}'">Secondary</button>
      <button type="button" class="btn btn-warning mx-4" onclick="location.href='{{url('completed')}}'">Success</button>
    </div>
  </div>
  <div class="card">
    <img src="img/a5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-center">Welcome About Pages</h5>
      <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content.
      This is a wider card with supporting text below as a natural lead-in to additional  This card has even longer content than the first to show that equal height action.</p>
      <button type="button" class="btn btn-secondary"  onclick="location.href='{{url('completed')}}'">Secondary</button>
      <button type="button" onclick="open('helll')" onclick="window.location.href='{{url('completed')}}'"  class="btn btn-warning mx-4">Success</button>
    </div>
  </div>
</div>
<script>
function open(){

  window('hello')
}
</script>
@include('inc/footer')
