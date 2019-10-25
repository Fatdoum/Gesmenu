<!doctype html>
<html lang="en">
  <head>
    <title>Inscription des menus</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <!-- Barre de navigation -->
   
    <!-- Bootstrap row and col -->
  <div class="container-fluid">
    <div class="row ">
      <!-- Side bar left -->
              <div class="col-3 bg-primary border  mw-100" style="height: 607px;">
                    <img src="../Public/img/logo.jpg" class="img-fluid rounded-circle" alt="">
                    
                    <nav class="navbar  bg-primary"> 
                    <div class="btn-group">
                  <button type="button" class="btn text-primary ">Utilisateurs</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="page-utilisateur.php">Nouveau</a>
                    <a class="dropdown-item" href="listes-utilisateurs.php">Liste</a>
                   
                  </div>
            </div>

            <div class="btn-group">
                  <button type="button" class="btn text-primary ">Sessions</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="new-session.php">Nouvelle session</a>
                    <a class="dropdown-item" href="listes-sessions.php">Liste</a>
                   
                  </div>
            </div>

            <div class="btn-group">
                  <button type="button" class="btn text-primary ">Référent/Session</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="ref-effectif.php">Nouveau</a>
                    <a class="dropdown-item" href="listes.php">Liste</a>
                   
                  </div>
            </div>    
            <div class="btn-group">
                  <button type="button" class="btn text-primary ">Apprenant</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="newapprenant.php">Nouveau</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Liste</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Inscrire</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Liste des menus</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Planifier</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Liste des planifications</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Choix</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Liste des choix</a>
                  </div>
            </div> 
            </div> 
            </nav>
              
              

               <!-- Fin Side bar left -->
              <!-- container -->
              
              <div class= " image col bg-secondary mw-110" style="height: 607px;">

                     <!-- HEADER -->
                  <div class="row">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                        <a class="navbar-brand" href="#"></a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                    
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                        <a class="nav-link text-hiden" href="#"><i class="fa fa-plus-circle mr-2"></i>Inscrire </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link text-hid
                                                        " href="#"> <i class="fa fa-graduation-cap mr-2 "></i>Nos apprenants</a>
                                                        </li>
                                                    
                                                    </ul>
                                                    <ul class="navbar-nav ml-auto">
                                                        <li class="nav-item">
                                                            <a class="nav-link text-hiden" href="#"> 
                                                              <i class="fa fa-user mr-2"></i></i>Admin</a>
                                                        </li>
                                                       
                                                    </ul>
                                        </div>
                                    </nav>  
                                    
                                    <form action=/action_page.php> 
                                    <label class="menu">Date</label>
                                    <select name=cars class="custom-select mb-3"> 
                                      <option selected></option> <option value=volvo>Volvo</option> 
                                      <option value=fiat>Fiat</option> 
                                      <option value=audi>Audi</option> </select> 

                                      <label class="menu">Jour</label>
                                    <select name=cars class="custom-select mb-3"> 
                                      <option selected></option> <option value=volvo>Volvo</option> 
                                      <option value=fiat>Fiat</option> 
                                      <option value=audi>Audi</option> </select> 

                                      <label class="menu">Menu1</label>
                                    <select name=cars class="custom-select mb-3"> 
                                      <option selected></option> <option value=volvo>Volvo</option> 
                                      <option value=fiat>Fiat</option> 
                                      <option value=audi>Audi</option> </select> 

                                      <label class="menu">Menu2</label>
                                    <select name=cars class="custom-select mb-3"> 
                                      <option selected></option> <option value=volvo>Volvo</option> 
                                      <option value=fiat>Fiat</option> 
                                      <option value=audi>Audi</option> </select> 

                                      <label class="menu">Menu3</label>
                                    <select name=cars class="custom-select mb-3"> 
                                      <option selected></option> <option value=volvo>Volvo</option> 
                                      <option value=fiat>Fiat</option> 
                                      <option value=audi>Audi</option> </select> 
                                      <button type=annuler class="btn1 btn-primary">Annuler</button> 
                                      <button type=valider class="btn2 btn-primary">Valider</button>
                                      </form>
                  </div>
                  
                
            

                    <!-- FIN HEADER -->



                    <style type="text/css">
    .bg-primary,.text-primary,.btn-primary {
      background-color: #0F878A !important;
      ;
    }

    .bg-light {
      width: 200%;
    }
    .table {
      margin-top: 10%;
      width: auto;
    }
    .btn-primary   {
      background: #0F878A !important;
      
    }
    .btn-danger   {
      background: #0F878A !important ;
      
    }
    .text-center {
      margin-top: 50px;
      margin-bottom: 50px;
      color:  #0F878A !important;
    }
    
    .text-hiden{
      color:  #0F878A !important;
    }
    .text-hid{
      color: #EC7E07 !important;
    }


    .bg-secondary,.text-secondary,.btn-secondary {
      background-color: #EC7E07 !important;
     
     
    }
    .image{
      background-image:url('../Public/img/menu.jpg')
    
  }
  .menu{
  margin-left:-40px;
 
  }
  form{
   width:500px;
   margin-left:200px;
   margin-top:20px;
  }
  .custom-select{
   
   margin-left:30px;

 
  }

.btn1{
   
   margin-right:50px;
}
.btn2{
   
   margin-left:300px;

 
  }

    
    
  </style>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>