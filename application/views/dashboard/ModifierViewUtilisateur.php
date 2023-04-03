<?php	//Pour appeler la partie navbar dans parials
	$this->load->view('partials/header');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modification</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="/assets/css/bootstrap/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/bootstrap/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/assets/css/modification.css">
  <!-- Theme style -->
  
</head>

<!-- La classe "hold-transition" est utilisée pour conserver les styles de transition entre les pages lors de la navigation sur le site.
La classe "sidebar-mini" est utilisée pour afficher une barre latérale réduite sur la page. -->
<body class="hold-transition sidebar-mini">


<!-- DEBUT Contenu Page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modifier Utilisateur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier Utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('user/modifier/' . $utilisateur->id); ?>" method="post" >
                <div class="card-body">

                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" value="<?php echo $utilisateur->nom; ?>">
                  </div>
                  <!-- pattern="[A-Za-z]+" : signifie qu'il doit y avoir au moins une lettre (majuscule ou minuscule) dans le champ de saisie -->
                  <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" value="<?php echo $utilisateur->prenom; ?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $utilisateur->email; ?>">
                  </div>

              
                </div>
                <!-- /.card-body -->

                <input type="reset" name="reset" value="RESET" />
                <input type="submit" name="submit" value="MODIFIER" />
              </form>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- FIN Contenu Page -->





<?php	//Pour appeler la partie navbar dans parials
	$this->load->view('partials/footer');
?>


<script src="<?php echo base_url('assets/js/bootstrap/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/adminlte.min.js'); ?>"></script>



<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
