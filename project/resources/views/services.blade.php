@extends('layout.master')

@section('styles')
@endsection

@section('main_content')
<div class="row intro text-light justify-content-evenly py-3 bg-opacity-10">
    <!DOCTYPE html>
    <html lang="en">
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
      <body>
        <section>
          <div style="color: black; text-align: center;" class="row">
            <h2 class="section-heading">Our Services</h2>
            <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
          </div>
          <div class="row">
            <div class="column">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fas fa-hammer"></i>
                </div>
                <h3>Service Heading</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                  consequatur necessitatibus eaque.
                </p>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fas fa-brush"></i>
                </div>
                <h3>Service Heading</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                  consequatur necessitatibus eaque.
                </p>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fas fa-wrench"></i>
                </div>
                <h3>Service Heading</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                  consequatur necessitatibus eaque.
                </p>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fas fa-truck-pickup"></i>
                </div>
                <h3>Service Heading</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                  consequatur necessitatibus eaque.
                </p>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fas fa-broom"></i>
                </div>
                <h3>Service Heading</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                  consequatur necessitatibus eaque.
                </p>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="icon-wrapper">
                  <i class="fas fa-plug"></i>
                </div>
                <h3>Service Heading</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                  consequatur necessitatibus eaque.
                </p>
              </div>
            </div>
          </div>
        </section>
      </body>
    </html>
</div>
@endsection
