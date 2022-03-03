@extends('pages.app')
@section('title', 'Cadastro')



<!-- Custom styles for this template -->
<link href="register.css" rel="stylesheet">
  </head>
  
  
  <div class="back_btn" title="Voltar">
  <a class="a" href="/" class=" round">&#8249;</a>
  </div>

  @section('content')
{{--   @include('partials/nav')
 --}}        

            <form>
                <p>Faça seu cadastro</p>
                <label form="name">Nome<input type="text" id="name"/></label>
                <label form="email">E-mail<input type="email" id="email"/></label>
                <label form="password">Senha<input type="password" id="password"/></label>
                <button>CADASTRAR</button>
               
                <a href="login">Já possuo uma conta? Acesse aqui</a>             
            </form>

    
    @endsection
