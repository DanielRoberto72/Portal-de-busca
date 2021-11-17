<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>C3PO SURF- v.1.1</title>
    <link rel="sortcut icon" href="img/icone.png"/>
    <link rel="stylesheet" href="style.css">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
/* Google Fonts Import Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background: #11101d;
  z-index: 100;
  transition: all 0.5s ease;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #0000FF;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #0000FF;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #1d1b31;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details{
  background: none;
}
.sidebar.close .profile-details{
  width: 78px;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 52px;
  width: 52px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 12px;
}
.home-section{
  position: relative;
  background: #FFFFFF;
  height: 15vh;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content{
  height: 60px;
  display: flex;
  align-items: center;
}
.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}
@media (max-width: 420px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
}
th{
  background-color: #0000FF;
}
#div1{
  background-color: #0000FF;
  color:  #fff;
}

</style>
<body>
<div class="sidebar close">
    <div class="logo-details">
        <i><img src="img/logo1-C3POv2.1.png" alt="logo c3po" style ="height: 40px; width: 70px"></i>
        <span class="logo_name"></span>
    </div>

    <ul class="nav-links">
    <li>
        <a href="index.php">
          <i class='bx bx-home-alt'></i>
          <span class="link_name">Home</span>
        </a>
    </li>
    <li>
        <a href="cadastro.php">
          <i class='bx bxs-data' ></i>
          <span class="link_name">Criar ticket</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="cadastro.php">Criar ticket</a></li>
        </ul>
    </li>
        <li>
        <a href="consultar_ticket.php">
          <i class='bx bxs-folder-minus'></i>
          <span class="link_name">Consultar ticket</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="consultar_ticket.php">Consultar ticket</a></li>
        </ul>
      </ul>
    </li>   
</ul>
</div>

<section class="home-section">
    <a><img src="img/Logo.png" alt="logo surf" style ="height: 80px;"align="right"></a>
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });
    </script>
    </div>
    <hr>


<section class="section">
  <div class="columns is-four-fifths">
    <div class="container is-fullhd">
        <div class="notification is-white">
 
    <div class="resultadoForm">
      <h5 class="title">
        Realizar busca
        <div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
      
      <span class="icon is-small">
        <i class="fa fa-info" aria-hidden="true"></i>
      </span>
    </button>
  </div>
    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
        <div class="dropdown-content">
        <div class="dropdown-item">
            <p>Necessário inserir ao menos o OTRS, TICKET Fornecedor, data ou selecionar uma das opções para a busca.</p>
        </div>
        </div>
    </div>
</div>  
<br>
</h5>

<!-- inicio do form-->      
  <form name="formBusca" id="formBusca" action="" method="POST">
       
    <div class="columns">
            <div class="column">
              <label for="OTRS" class="label">OTRS</label>
              <div class="control has-icons-left">
                <input style="border-color: #0000ff; width: 200px;"maxlength="18" placeholder="" type="text" class="input" name="OTRS" id="OTRS">
                <span class="icon is-small is-left">
                 <i class="fa fa-tablet"></i>
                </span>
              </div>
            </div>

            <div class="column">
              <label for="tkt-fornecedor" class="label">Ticket fornecedor</label>
              <div class="control has-icons-left">
                <input style="border-color: #0000ff;" maxlength="" placeholder="" type="text" class="input" name="tkt-fornecedor" id="tkt-fornecedor">
                <span class="icon is-small is-left">
                 <i class="fa fa-tablet"></i>
                </span>
              </div>
            </div>

            <div class="column">
              <label for="DATA" class="label">Data</label>
              <div class="control has-icons-left">
                <input style="border-color: #0000ff;" maxlength="10" placeholder="AAAA/MM/DD" type="date" value="01/10/2021"class="input" name="DATA">
                <span class="icon is-small is-left">
                 <i class="fa fa-microchip"></i>
                </span>
              </div>
            </div>

            <div class="column">
              <label for="STATUS" class="label">Status</label>
              <div class="control has-icons-left">
           <select name="select_status" style="width: 150px; height:35px; border-radius: 5px; border-color: #0000ff;">
          <option>Selecione</option>
          <option> Selecionar os status </option>
       </select>
        </div>
    </div>

            
    <div class="column">
        <label for="busca" class="label"></label><br>
        <input type="submit" id="div1" class="button">
    </div>

  <div class="tile is-parent">
    <article class="">
      
    </article>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </div>
</form>
<!-- fim do form--> 

    <script src="lib/zepto.min.js"></script>
    <script src="lib/javascript.min.js"></script>
    </div>
<br>

<!-- inicio dos retornos de dados-->
<div class="notification is-gray">
    <h5 class="title">
    Resultado da busca
    <div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
      
      <span class="icon is-small">
        <i class="fa fa-info" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
    <div class="dropdown-content">
      <div class="dropdown-item">
        <p>Os resultados da pesquisa são mostrados abaixo</p>
      </div>
    </div>
  </div>
</div>



  </h5>


<br>
<!-- inicio do retorno de filtro-->

<!-- fim do retorno de filtro-->
<!--tabela-->

  <table id="Table_result"  class="table is-fullwidth">

 <!-- cabeçalho da tabela de retorno da pesquisa-->
<thead class="Notification is">
    <tr class="is-selected">

      <th style="  font-size:  13px"title="OTRS">OTRS</th>
      <th style="  font-size:  13px"title="Fornecedor">Fornecedor</th>
      <th style="  font-size:  13px"title="tkt-fornecedor">Ticket fornecedor</th>
      <th style="  font-size:  13px"title="criricidade">Criticidade</th>
      <th style="  font-size:  13px"title="categoria">Categoria</th>
      <th style="  font-size:  13px"title="solução">Solução</th>
      <th style="  font-size:  13px"title="solução">Status</th>
      <th style="  font-size:  13px"title="Data abertura">Data abertura</th>
      <th style="  font-size:  13px"title="Data fechamento">Data fechamento</th>
      <th style="  font-size:  13px"title="ação">Ação</th>
      
    </tr>
</thead>
<!-- Fim do cabeçalho da tabela de retorno da pesquisa-->

<tbody>
<!-- Querys de retorno da pesquisa-->


<!-- tabela de retorno da pesquisa-->
<tr>
     <td style="  font-size:  13px">20211111111111</td>
     <td style="  font-size:  13px">Fornecedor demonstração</td>
     <td style="  font-size:  13px">123456</td>
     <td style="  font-size:  13px">Média</td>
     <td style="  font-size:  13px">Categoria demonstração</td>
     <td style="  font-size:  13px">Sem solução</td>
     <td style="  font-size:  13px">Aberto</td>
     <td style="  font-size:  13px">2021-17-11 09:08:00</td>
     <td style="  font-size:  13px">Sem fechamento</td>

    <td>
        <button style="background: #fff; color:#0000ff; border-color: #0000ff; border-radius: 3px"><a  href='editar_ticket.php?id_ticket=$id_ticket'>alterar</a><br></button>
        <button style="background: #0000ff; color:#fff; border-radius: 3px"><a  href='solucionar_ticket.php?id_ticket=$id_ticket'>solucionar</a></button>
    </td>
</tr>

</tbody>
</table>
</div>
<!-- Fim da tabela de retorno da pesquisa-->

<!-- paginação da tabela de retorno da pesquisa-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
    $('#Table_result').DataTable({
      "language": {
            "lengthMenu": "Resultados _MENU_ registros por página",
            "zeroRecords": "Nada encontrado para a busca",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "infoFiltered": "(Filtrado de _MAX_ registros totais)"
        }
    });
} );
</script>
<!-- Fim da paginação da tabela de retorno da pesquisa-->

</div>
</div>
</div>
</section>

<div class="card">
  <div class="content has-text-centered">
    <p>
    C3PO SURF- v.1.1. 
    </p>
  </div>
</div>
  
</body>
</html>