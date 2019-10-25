

        <?php
            include_once('../controllers/db_connect.php');
                  $query = $pdo->query("SELECT * FROM `menu` ");
                  $menus = $query->fetchAll();
                //var_dump($users) ;

  
                ?>



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row ">
          <!-- Side bar left -->
                  <div class="col-3 bg-primary border  mw-100" style="height: 800px;">
                        <img src="./logo.png" class="img-fluid rounded-circle" alt="">
                        <h5><small class="text-uppercase text-nowrap text-white ">Gestion des Tickets</small></h5>
                        <ul class="nav flex-column">
                          <li class="nav-item dropdown">
                               
    
                            <a class="nav-link  active  text-white" href="#"><i class="fa fa-calendar mr-2"></i></i><span
                                class="text-secondary"></span>Session</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#"> <i class="fa fa-user mr-2"></i>Utilisateur</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#"> <i class="fa fa-graduation-cap mr-2"></i>Référentiel</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link  text-white" href="#"> <i class="fa fa-graduation-cap mr-2"></i>Apprenant</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link  text-white" href="#"> <i class="fa fa-cutlery mr-2" aria-hidden="true"></i>
                                Menu</a>
                            </li>
                        </ul>
                  </div>
    
                   <!-- Fin Side bar left -->
                  <!-- container -->

            <div class="col ">
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
                                                                <a class="nav-link text-hiden" href="#"><i class="fa fa-plus-circle mr-2"></i>Ajouter un Menu </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                <a class="nav-link text-hid" href="#"> <i class="fa fa-calendar mr-2" aria-hidden="true"></i>Menu de la Semaine</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link text-hid" href="#"> <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Menu du Jour</a>
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
                            </div>  
                            <!-- container -->
                        
                            <div class="container ">
                                <div class="row justify-content-center ">
                                    <h2 class="text-center" style="margin-bottom: 50px;">
                                            Plannifier les menus
                                        <span class="table-add float-right mb-3 mr-30"><a href="#!" class="text-success" > 
                                            
                                        </span>
                                    </h2>
                                  
                                </div>
                                
                          </div>
                            <form action="../controllers/insert_pla.php" method="POST">
          
                              
                                  <div class="row">
          
                                        <div class="col-9" style="margin-bottom: 30px;">
                                                   
                                                <div class="row ">
                                                    <div class="col">
                                                        <label for="prenom" class="col-md-6 col-form-label">Jour</label>
                                                    </div>
                                                    <div class="col">
                                                            <select class="browser-default custom-select">
                                                                    <option selected>Veuillez choisir le jour</option>
                                                                    <option value="1">Lundi</option>
                                                                    <option value="2">Mardi</option>
                                                                    <option value="3">Mercredi</option>
                                                                    <option value="2">Jeudi</option>
                                                                    <option value="3">Vendredi</option>
                                                                  </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                          
                                  </div>  
                                  <div class="row">
          
                                        <div class="col-9" style="margin-bottom: 30px;">
                                                   
                                                <div class="row ">
                                                    <div class="col">
                                                        <label for="prenom" class="col-md-6 col-form-label">Menu 1</label>
                                                    </div>
                                                    <div class="col">
                                                            <select class="browser-default custom-select">
                                                                    <option selected>Veuillez choisir le menu 1</option>
                                                                    <?php 
                                                            foreach ($menus as $key => $menu) {
                                                          
                                                        ?>
                                                              <option value="<?php echo $menu['id_menu']; ?>">  <?php echo $menu['nom']; ?></option>
                                                        <?php
                                                            
                                                            }
                                                        ?> 
                                                                  </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                          
                                  </div>  
                                  <div class="row">
          
                                        <div class="col-9" style="margin-bottom: 30px;">
                                                   
                                                <div class="row ">
                                                    <div class="col">
                                                        <label for="prenom" class="col-md-6 col-form-label">Menu 2</label>
                                                    </div>
                                                    <div class="col">
                                                            <select class="browser-default custom-select">
                                                                    <option selected>Veuillez choisir le menu 2</option>
                                                                    <?php 
                                                            foreach ($menus as $key => $menu) {
                                                          
                                                        ?>
                                                              <option value="<?php echo $menu['id_menu']; ?>">  <?php echo $menu['nom']; ?></option>
                                                        <?php
                                                            
                                                            }
                                                        ?> 
                                                                  </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                          
                                   </div>  
                                   <div class="row">
                                    
                                        <div class="col-9" style="margin-bottom: 30px;">
                                                   
                                              
                                                
                                            </div>
                                          
                                  </div>  
                                  <div class="row">
                                        <div class="col">
                                                
                                        </div>
                                        <div class="col-4">
                                            <br>
                                                
                                                <button type="reset" class="btn btn-primary">Annuler</button>
                                        </div>
                            
                                        <div class="col-4">
                                            <br>
                                                <button type="sumit" class="btn btn-secondary ">Ajouter</button>
                                                
                                                
                                        </div>
                            
                                      </div> 
                                 
                              </form> 
                              







     </div>

      
  

  <style type="text/css">
    .bg-primary,.text-primary,.btn-primary {
      background-color: #EC7E07 !important;
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
    .btn-secondary   {
      background: #EC7E07 !important ;
    }
    .text-center {
      margin-top: 50px;
      color: #0F878A;
    }
    .col-form-label{
      
      color: #0F878A;
    }
    
    
  </style>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>