@extends('pages.app')
@section('title', 'Home')
@section('navbar')



<!-- Custom styles for this template -->
<link href="welcome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  @section('content')
  @include('partials/nav')

{{--   <div class="logo">
    <img src="img/logo.jpg" id="logo" />
  </div> --}}

  
    <h2 class="neonText">Company</h2> 

    <p style="color:white">We have over a decade of experience in the creative industry, producing exciting experiences for brands that are as smart, as they are effective. Lorem ipsum curabitur tortor blandit at libero, rutrum elementum massa duis etiam, dictum volutpat pulvinar lorem feugiat. mollis himenaeos tempor sit et non habitant nam eget diam ac, fusce eros elit urna congue auctor rhoncus nam interdum ut, conubia orci viverra ac urna nibh venenatis morbi facilisis. nisi tempor augue senectus commodo fusce porta, quam nisi mi convallis mauris auctor etiam, hendrerit pharetra velit metus justo. in risus eu sodales malesuada hac felis lacus mi gravida risus, ac condimentum nostra nunc ac aliquet bibendum vel est fusce, nisi sociosqu aliquam ac fringilla ut sollicitudin et ut. 
    </p>    
    @include('partials/footer')

  @endsection

