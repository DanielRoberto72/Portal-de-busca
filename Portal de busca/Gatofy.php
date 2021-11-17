<!-- Código baseado em código OpenSource do CodingLab-->
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>C3PO SURF- v.1.1</title>
    <link rel="sortcut icon" href="img/icone.png"/>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
     /* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: #000000;
  transition: all 0.5s ease;
}
.sidebar.active{
  width: 60px;
}
.sidebar .logo-details{
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 28px;
  font-weight: 500;
  color: #fff;
  min-width: 60px;
  text-align: center
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
.sidebar .nav-links{
  margin-top: 10px;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li a.active{
  background: #0000ff;
}
.sidebar .nav-links li a:hover{
  background: #0000ff;
}
.sidebar .nav-links li i{
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}
.sidebar .nav-links .log_out{
  position: absolute;
  bottom: 0;
  width: 100%;
}
.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section{
  width: calc(100% - 60px);
  left: 60px;
}
.home-section nav{
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
  left: 60px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}
nav .sidebar-button i{
  font-size: 35px;
  margin-right: 10px;
}
.home-section nav .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
nav .search-box input{
  height: 100%;
  width: 100%;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 15px;
}
nav .search-box .bx-search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: #2697FF;
  right: 5px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 4px;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section .home-content{
  position: relative;
  padding-top: 104px;
}
.home-content .overview-boxes{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  display: flex;
  align-items: center;
  justify-content: center;
  width: calc(100% / 4 - 15px);
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 20px;
  font-weight: 500;
}
.home-content .box .number{
  display: inline-block;
  font-size: 15px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
}
.home-content .box .indicator i{
  height: 20px;
  width: 20px;
  background: #8FDACB;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down{
  background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 12px;
}
.home-content .box .cart{
  display: inline-block;
  font-size: 10px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
   color: #2BD47D;
   background: #C0F2D8;
 }
.home-content .box .cart.three{
   color: #ffc233;
   background: #ffe8b3;
 }
.home-content .box .cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 10px;
  font-weight: 500;
}
.home-content .sales-boxes{
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales{
  width: 65%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sales-boxes .box .title{
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic{
  font-size: 20px;
  font-weight: 500;
}
.sales-boxes .sales-details li{
  list-style: none;
  margin: 8px 0;
}
.sales-boxes .sales-details li a{
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.sales-boxes .box .button{
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.sales-boxes .box .button a{
  color: #fff;
  background: #0A2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover{
  background:  #0d3073;
}

/* Right box */
.home-content .sales-boxes .top-sales{
  width: 35%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px 0 0;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.sales-boxes .top-sales li{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}
.sales-boxes .top-sales li a img{
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 12px;
  margin-right: 10px;
  background: #333;
}
.sales-boxes .top-sales li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sales-boxes .top-sales li .product,
.price{
  font-size: 17px;
  font-weight: 400;
  color: #333;
}
/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar{
    width: 60px;
  }
  .sidebar.active{
    width: 220px;
  }
  .home-section{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section{
    /* width: calc(100% - 220px); */
    overflow: hidden;
    left: 220px;
  }
  .home-section nav{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section nav{
    width: calc(100% - 220px);
    left: 220px;
  }
}
@media (max-width: 1150px) {
  .home-content .sales-boxes{
    flex-direction: column;
  }
  .home-content .sales-boxes .box{
    width: 100%;
    overflow-x: scroll;
    margin-bottom: 30px;
  }
  .home-content .sales-boxes .top-sales{
    margin: 0;
  }
}
@media (max-width: 1000px) {
  .overview-boxes .box{
    width: calc(100% / 2 - 15px);
    margin-bottom: 15px;
  }
}
@media (max-width: 700px) {
  nav .sidebar-button .dashboard,
  nav .profile-details .admin_name,
  nav .profile-details i{
    display: none;
  }
  .home-section nav .profile-details{
    height: 50px;
    min-width: 40px;
  }
  .home-content .sales-boxes .sales-details{
    width: 560px;
  }
}
@media (max-width: 550px) {
  .overview-boxes .box{
    width: 100%;
    margin-bottom: 15px;
  }
  .sidebar.active ~ .home-section nav .profile-details{
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
</style>

<body>
  <div class="sidebar">
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
        <a href="Provisionamento.php">
          <i class='bx bxs-data' ></i>
          <span class="link_name">Consultar Provisionamento</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Provisionamento.php">Consultar Provisionamento</a></li>
        </ul>
      </li>
      <li>
        <a href="FNR.php">
          <i class='bx bxs-folder-minus'></i>
          <span class="link_name">Consultar FNR</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="FNR.php">Consultar FNR</a></li>
        </ul>
      </li>
       <li>
        <a href="Gatofy.php">
          <i class='bx bx-wifi'></i>
          <span class="link_name">Gatofy</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Gatofy.php">Gatofy</a></li>
        </ul>
      </li>
      <li>
        <a href="powerbi.php">
          <i class='bx bxs-folder-minus'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="powerbi.php">Dashboard</a></li>
        </ul>
      </li>
      </ul>
  </div>
  <section class="home-section">
  <a><img src="img/Logo.png" alt="logo surf" style ="height: 80px;"align="right"></a>

    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"></span>
      </div>
    </nav>

<div class="home-content">
      <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
                sidebarBtn.onclick = function() {
                sidebar.classList.toggle("active");
                    if(sidebar.classList.contains("active")){
                        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
                    }else
                    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                    }

 </script>
    <section class="section">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <p>Necessário inserir ao menos o ICCID ou o IMEI para a busca.<br> Caso escolha a pesquisa por CPF, pode aparecer mais de um modem</p>
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
              <label for="ICCID" class="label">ICCID*</label>
              <div class="control has-icons-left">
                <input maxlength="" placeholder="" type="text" class="input" name="ICCID" id="ICCID">
                <span class="icon is-small is-left">
                 <i class="fa fa-tablet"></i>
                </span>
              </div>
            </div>
            
            <div class="column">
              <label for="IMSI" class="label">IMSI</label>
              <div class="control has-icons-left">
                <input maxlength="16" placeholder="72417" type="text" class="input" name="IMSI">
                <span class="icon is-small is-left">
                 <i class="fa fa-phone"></i>
                </span>
              </div>
            </div>

            <div class="column">
              <label for="CPF" class="label">CPF</label>
              <div class="control has-icons-left">
                <input maxlength="" placeholder="" type="text" class="input" name="CPF">
                <span class="icon is-small is-left">
                 <i class="fa fa-file"></i>
                </span>
              </div>
            </div>

            <div class="column">
              <label for="busca" class="label"></label><br>
                <input id="div1" type="submit" class="button">
            </div>

</div>
</form>

<script src="lib/zepto.min.js"></script>
<script src="lib/javascript.min.js"></script>
</div>
</div>
</div>
</div>
</section>

<!-- caixas de texto para retorno das informações principais-->
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">N° KIT</div>
            <div class="number">1</div>
            <div class="indicator">
            </div>
          </div>
          <i class=''><img src="img/wifiL.png"></i>
        </div>
   <div class="box">
          <div class="right-side"> 
            <div class="box-topic">ICCID</div>
            <div class="number">8888888888888</div>
            <div class="indicator">
            </div>
          </div>
          <i class=''><img src="img/computer-chip.png"></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">IMSI</div>
            <div class="number">888888888</div> 
        <div class="indicator">
            </div>
          </div>
          <i class=''><img src="img/computer-chip.png"></i>
        </div>
         <div class="box">
          <div class="right-side">
            <div class="box-topic">DATA ATIVAÇÃO</div>
            <div class="number">16-11-2021</div>
            <div class="indicator">
            </div>
          </div>
          <i class=''><img src="img/calendar.png"></i>
        </div>

        <div class="box" style="background: #0000ff;">
          <div class="right-side">
            <div class="box-topic"style="color: #ffffff;" >Status</div>
            <div class="number">Ativo</div>
            <div class="indicator">
            </div>
          </div>
          <i class='' ><img src="img/status.png"></i>
        </div>
      </div>

      <!-- Caixa para informações do usuario do modem-->
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Informações do Cliente</div>
          <div class="sales-details">
            <ul class="details">

            <hr><li><a><?php echo'ID USUÁRIO: 1' ?></a></li>
            <li><a><?php echo'NOME: Usuario demonstração'?></a></li>
            <li><a><?php echo'EMAIL: demonstração@gmail.com'?></a></li>
            <li><a><?php echo'TELEFONE: 11999999999'?></a></li>
            <li><a><?php echo'CPF: 123456789-0'?></a></li>
            <li><a><?php echo 'RG: 123456789'?></a></li>

          </ul>
      
        </div>
        </div>
        <!-- caixa para informações do modem-->

        <div class="top-sales box">
          <div class="title">Informações do Modem</div>
          <ul class="top-sales-details">

            <hr><li>
            <a >
              <!--<img src="images/sunglasses.jpg" alt="">-->
              <span class="product"><?php echo'Dia de vencimento: 13'?></span>
            </a>
            
          </li>
          <li>
            <a >
               <!--<img src="images/jeans.jpg" alt="">-->
              <span class="product"><?php echo'Data de bloqueio Modem: Não há bloqueio'?></span>
            </a>
          </li>
          </ul>
        </div>
      </div>
    </div>
    <br>
 
 <div class="card">
  <div class="content has-text-centered">
    <p>
      C3PO SURF- v.1.1.
    </p>
  </div>
</div>
</section>
</body>
</html>

