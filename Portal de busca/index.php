<!DOCTYPE html>
<!-- Código baseado em código OpenSource do CodingLab-->

<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>C3PO - v.1.1</title>
    <link rel="sortcut icon" href="img/icone.png"/>

    <!-- Fontawesome CDN Link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

  <!-- CSS-->
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  display: flex;
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  background: #ffffff;
  position: relative;
}

body::before{
  content: '';
  position: absolute;
  width: 100%;
  background: #0000FF;
  clip-path: inset(47% 0 0 0);
  z-index: -1;
  height: 100%;
}
::selection{
  background: #0000FF;
  color: #fff;
}
.container{
  max-width: 950px;
  width: 100%;
  overflow: hidden;
  padding: 80px 0;
}
.container .main-card{
  display: flex;
  justify-content: space-evenly;
  width: 200%;
  transition: 1s;
}
#two:checked ~ .main-card{
  margin-left: -100%;
}
.container .main-card .cards{
  width: calc(100% / 2 - 10px);
  display: flex;
  flex-wrap: wrap;
  margin: 0 20px;
  justify-content: space-between;
}
.main-card .cards .card{
  width: calc(100% / 3 - 10px);
  background: #fff;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.4s ease;
}
.main-card .cards .card:hover{
  transform: translateY(-15px);
}
.cards .card .content{
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.cards .card .content .img{
  height: 130px;
  width: 130px;
  border-radius: 50%;
  padding: 3px;
  background: #0000FF;
  margin-bottom: 14px;
}
.card .content .img img{
  height: 100%;
  width: 100%;
  border: 3px solid #ffff;
  border-radius: 50%;
  object-fit: cover;
}
.card .content .name{
  font-size: 20px;
  font-weight: 500;
}
.card .content .job{
  font-size: 20px;
  color: #0000FF;
}
.card .content .media-icons{
  margin-top: 10px;
  display: flex;

}
.media-icons a{
  text-align: center;
  line-height: 30px;
  height: 35px;
  width: 100px;
  margin: 0 4px;
  font-size: 14px;
  color: #FFF;
  border-radius: 0%;
  border: 2px solid transparent;
  background: #0000FF;
  transition: all 0.3s ease;
}
.media-icons a:hover{
  color: #0000FF;
  background-color: #fff;
  border-color: #0000FF;
}
 .container .button{
  width: 100%;
  display: flex;
  justify-content: center;
  margin: 20px;
}
.button label{
  height: 15px;
  width: 15px;
  border-radius: 20px;
  background: #fff;
  margin: 0 4px;
  cursor: pointer;
  transition: all 0.5s ease;
}
.button label.active{
  width: 35px;
}
#one:checked ~ .button .one{
  width: 35px;
}
#one:checked ~ .button .two{
  width: 15px;
}
#two:checked ~ .button .one{
  width: 15px;
}
#two:checked ~ .button .two{
  width: 35px;
}
input[type="radio"]{
  display: none;
}
@media (max-width: 768px) {
  .main-card .cards .card{
    margin: 20px 0 10px 0;
    width: calc(100% / 2 - 10px);
  }
}
@media (max-width: 600px) {
  .main-card .cards .card{
    /* margin: 20px 0 10px 0; */
    width: 100%;
  }
}
 
   </style>
   

<section class="section is-medium">

  <h1 align="middle" class="title" style="font-family: 'Teko', sans-serif;"><i><img src="img/logo1-C3POv2.1.png" alt="logo c3po" style ="height: 70px; width: 140px;"align="left"></i>Selecione uma opção</h1><hr>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <!-- div para criação do espaço para os cards-->
    <div class="main-card">

    <!-- div para separação das páginas-->
      <div class="cards">

      <!-- div para criação dos cards-->
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="img/automacao.png"  alt="">
           </div>
           <div class="details">
             <div class="name">Consultar provisionamento</div>
             <div class="job">Consulta nos scripts de automação</div>
           </div>
           <div class="media-icons">
             <a href="Provisionamento.php" style="text-decoration:none">Acessar <i class="fa fa-arrow-right"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="img/motor-de-otimizacao-de-busca.png" alt="">
           </div>
           <div class="details">
             <div class="name">FNR</div>
             <div class="job">Consulta nos arquivos de FNR</div>
           </div>
           <div class="media-icons">
             <a href="FNR.php" style="text-decoration:none">Acessar <i class="fa fa-arrow-right"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="img/sinal-wifi.png" alt="" >
           </div>
           <div class="details">
             <div class="name">Gatofy</div>
             <div class="job">Consulta de modens do projeto Gatofy e suas configurações</div>
           </div>
           <div class="media-icons">
             <a href="Gatofy.php" style="text-decoration:none";>Acessar <i class="fas fa-arrow-right"></i></a>
           </div>
         </div>
        </div>
        
      </div>
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="img/agil.png" alt="" >
           </div>
           <div class="details">
             <div class="name">Gestão de fornecedores</div>
             <div class="name">Cadastro</div>
             <div class="job">Criar tickets para gestão de fornecedores</div>
           </div>
           <div class="media-icons">
             <a href="cadastro.php" style="text-decoration:none";>Acessar <i class="fas fa-arrow-right"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="img/equipe.png" alt="" >
           </div>
           <div class="details">
             <div class="name">Gestão de fornecedores</div>
             <div class="name">Consulta</div>
             <div class="job">Consultar os tickets abertos com os fornecedores</div>
           </div>
           <div class="media-icons">
             <a href="consultar_ticket.php" style="text-decoration:none";>Acessar <i class="fas fa-arrow-right"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="img/dashboard (7).png" alt="" >
           </div>
           <div class="details">
             <div class="name">Dashboards Power BI</div>
             <div class="job">Visualização dos Dashboards desenvolvidos em Power BI</div><br>
           </div>
           <div class="media-icons">
             <a href="powerbi.php" style="text-decoration:none";>Acessar <i class="fas fa-arrow-right"></i></a>
           </div>
         </div>
        </div>
      </div>
    </div>

    <!-- div para criação dos botões de página-->
    <div class="button">
      <p align="middle" style="color: #ffffff; font-size: 10px;"> Páginas</p>
      <label for="one" class=" active one"></label>
      <label for="two" class="two"></label>
      
    </div>

  </div>
     <p align="middle" style="color: #ffffff"> C3PO- v.1.1. 
    </p>
</body>
</html>

