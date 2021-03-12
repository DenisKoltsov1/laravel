<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main1.css">

</head>
<body>


<section class="Header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="UpperMenu">
                    <p>ЗАПОЛНИТЕ ФОРМУ</p>
                </div>
              
            </div>
        </div>
    </div>
</section>

<section class="Centr">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="content">
                    <!-- <form action="{{route('contactForm')}}" method="post"> -->
                    <form action="doc.php" method="post">
                    {{csrf_field()}}
                    
                        <div class="form-group">
                            
                            <label for="numberСontract" class="" name="numberСontract">Номер контракта</label>
                            <input type="number"  name="number" placeholder="Введите номер  договора" id ="numberСontract" class="numberСontract"></input>
                        </div>
                            <div class="form-group">
                            <label for="nameCompany" class="nameCompany">Введите название компании</label>
                            <input type="text"  name="name" placeholder="Введите  название компании" id ="nameCompany" class="nameCompany"></input>
                        </div>
                        <div class="form-group">
                            <label for="requesites" class="requesites"><h1>Введите Реквезиты компании</h1></label>
                            
                            <label for="nameOrganization" class="nameOrganization">Введите Название организации</label>
                            <input type="text"  name="nameOrganization" placeholder="Название организации" id ="nameOrganization" class="nameOrganization"></input>
                            
                            <label for="OGRN" class="OGRN">Введите ОГРН</label>
                            <input type="text"  name="OGRN" placeholder="ОГРН" id ="OGRN" class="OGRN"></input>
                            
                            <label for="legalAddress" class="legalAddress">Адресс организации</label>
                            <input type="text"  name="legalAddress" placeholder="Юридический адресс" id ="legalAddress" class="legalAddress">
                            
                            <label for=telefon" class="telefon">Введите телефон </label>
                            <input type="tel"  name="telefon" placeholder="Введите  телефон" id ="telefon" class="telefon">


                            <button  type="submit" btn="btn">Сгенерировать договор</button>
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



</section>


<section class="Footer">
    <div class="container-fluid">
        <div class="row">
        
       <div class="div-col-12">



       </div>
            
    </div>


</section>

<section class="FooterMobile">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="footerwrapmobile">
 
                </div>
            </div> 



            </div>
       
        </div>
    </div>



</section>


<link rel="stylesheet" href="js/main.js">
<script src="js/main.js"></script>
    
</body>
</html>