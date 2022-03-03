@extends('pages.app')
@section('title', 'Home')
@section('navbar')



<!-- Custom styles for this template -->
<link href="login.css" rel="stylesheet">
  </head>
  
  
  <div class="back_btn" title="Voltar">
  <a class="a" href="/" class=" round">&#8249;</a>
  </div>

  @section('content')
{{--   @include('partials/nav')
 --}}        

            <form>
                <p>Faça seu login</p>
                <label form="name">E-mail<input type="email" id="email"/></label>
                <label form="password">Senha<input type="password" id="password"/></label>
                <button>ENTRAR</button>
                <a href="#">Esqueci minha senha</a>
                <a href="#">Ainda não sou cliente</a>             
            </form>

    
    @endsection
