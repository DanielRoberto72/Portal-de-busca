<!-- Código baseado em código OpenSource do CodingLab-->
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="UTF-8">
    <title>C3PO SURF- v.1.1</title>
    <link rel="sortcut icon" href="img/icone.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
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
   max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}


.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 635px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #0000ff);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #0000ff;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #0000ff);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #0000ff);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>

<body>

    <!-- container para o form-->
    <div class="container">
    <div> <h2 align="middle">Novo Ticket</h2> </div>
    <h1 class="title" align="middle" ><i><img src="img/logo1-C3POv2.1.png" alt="logo c3po" style ="height: 40px; width: 70px;"align="middle"></i><i><img src="img/Logo.png" alt="logo surf" style ="height: 45px;"align="middle"></i></h1>


    <div class="content">
      <form method="POST" action="">
        <div class="user-details">
          <div class="input-box">
          OTRS<input type="text" name="txt_otrs" placeholder="Digite o OTRS" required></div>

          <div class="input-box">
          Ticket Fornecedor<input type="text" name="txt_tkt_fornecedor" placeholder="Digite ticket do fornecedor" required></div>

          <div class="input-box">
          Fornecedor
        <select name="select_fornecedor" style="width: 300px; height:45px; border-radius: 5px; border-color: #0000ff;" required>
          <option value="">Selecione</option>
          <option value="1"> Aqui vão os fornecedores</option>
       </select></div>
       <div class="input-box">
          Criticidade<select name="select_criticidade" style="width: 300px; height:45px; border-radius: 5px;border-color: #0000ff;" required>
          <option value="">Selecione</option>
          <option value="1"> Aqui vão os niveis de criticidade</option>
       </select></div>
         
          
          
          <div class="input-box">
          Categoria<select name="select_cat1" style="width: 640px; height:45px; border-radius: 5px;border-color: #0000ff;" required>
          <option value="">Selecione</option>
          <option value = "1"> Aqui vão as categorias do chamado</option>
       </select></div>
    </div>
    <div class="button">
      <input type="submit" value="Criar Ticket">
    </div>
</div>
</form>
<a href="consultar_ticket.php" style="text-decoration: none"><img src="img/voltar.png" alt="bloqueado" > Consultar Ticket</a>
</div>
</div>
</body>
</html>
