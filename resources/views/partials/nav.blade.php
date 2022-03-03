
<link href="nav.css" rel="stylesheet">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/">Home</a>
  <a href="register">Cadastro</a>
  <a href="login">Login</a>

</div>

<span style="font-size:2em;cursor:pointer; margin: 2em; color: white;" onclick="openNav()">&#9776; menu</span>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>


