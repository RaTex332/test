<?php	//Pour appeler la partie navbar dans parials
	$this->load->view('partials/header');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/adminlte.min.css'); ?>">
    <!-- Lien Registre -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/registre.css'); ?>">
    <!-- Pour mettre un fav icon sur Barre d'onglet-->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <title>REGISTRE</title>

</head>

<!-- La classe "hold-transition" est utilisée pour conserver les styles de transition entre les pages lors de la navigation sur le site.
La classe "sidebar-mini" est utilisée pour afficher une barre latérale réduite sur la page. -->
<body class="hold-transition sidebar-mini">


<!-- DEBUT Contenu Page -->
<div class="wrapper">
  <div class="content-wrapper">
    <!-- DEBUT En tête -->
    <section class="content-header">
      <!--  zone conteneur fluide qui s'adapte à la taille de l'écran -->
      <div class="container-fluid">
        <!-- définit une ligne (row) avec une marge en bas de 2 unités (mb-2) -->
        <div class="row mb-2">
          <!-- crée de 6 unités -->
          <div class="col-sm-6">
            <h1>REGISTRE</h1>
          </div>
          <div class="col-sm-6">
            <!-- float-sm-right: est utilisée pour aligner la liste à droite sur les écrans de taille supérieure à "sm" (small) -->
            <!-- breadcrumb: qui aide l'utilisateur à comprendre leur emplacement actuel sur un site web -->
            <!-- active: pour indiquer que cette page est actuellement visitée par l'utilisateur (indique l'utlisateur ou il se trouve) -->
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registre</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- FIN En tête -->


    <!-- DEBUT Contenu -->
    <section class="content">
      <div class="container-fluid">
        <!-- définit une ligne (row)-->
        <div class="row">
          <!-- occupe toute la largeur de l'écran sur les appareils avec une taille d'écran moyenne (768 pixels) -->
          <div class="col-md-12">
            <!-- définit une nouvelle carte -->
            <div class="card card-primary">
              <!-- correspond à l'en-tête de la carte -->
              <div class="card-header">
                <h3 class="card-title">Ajout <small>Admin</small></h3>
              </div>
            </div>

              <!-- les données seront envoyées au contrôleur user de l'application qui traitera la méthode ajouterUtilisateur() lorsqu'il sera appelé avec une requête POST. -->
              <form action="<?php echo base_url('user/ajouterUtilisateur'); ?>" method="post">
              <!-- Vérifie s'il y a un erreur et affiche boite d'alerte -->
              <?php if (validation_errors()): ?>
                          <div class="alert alert-danger">
                            <?php echo validation_errors(); ?>
                          </div>
              <?php endif; ?>
                
                <!-- DEBUT corps contenu -->
                <div class="card-body">
                  <!--form-group: envelopper un élément de formulaire et met un style bootstrap -->
                    <div class="form-group">
                      <label for="nom">Nom</label>
                      <!-- pattern="[A-Za-z]+" : signifie qu'il doit y avoir au moins une lettre (majuscule ou minuscule) dans le champ de saisie -->
                      <input class="form-control" type="text" name="nom" id="nom"  pattern="[A-Za-z]+" title="Le nom ne doit contenir que des lettres" required aria-required="true" placeholder="Entrer votre nom">
                    </div>
                    <!-- pattern="[A-Za-z]+" : signifie qu'il doit y avoir au moins une lettre (majuscule ou minuscule) dans le champ de saisie -->
                    <div class="form-group">
                      <label for="prenom">Prénom</label>
                      <input class="form-control" type="text" name="prenom"  id="prenom"  pattern="[A-Za-z]+" title="Le prénom ne doit contenir que des lettres" required aria-required="true" placeholder="Entrer votre prénom">
                    </div>
                    <div class="form-group">
                      <label for="email">Adresse Email</label>
                      <!-- pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}": spécifie que l'email peut contenir une ou plusieur chaîne de caractères  -->
                      <input class="form-control" type="email" name="email"  id="email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required aria-required="true" placeholder="Entrer votre adresse email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mot De Passe</label>
                      <input class="form-control" type="password" name="password"  id="password" minlength="8"  title="Votre mot de passe n'est pas identique" placeholder="Entrer votre Mot De Passe">
                      <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirmation Mot De Passe</label>
                      <input class="form-control" type="password" name="confirm_password" id="confirm_password" minlength="8" title="Votre mot de passe n'est pas identique" placeholder="Re-saisissez votre mot de passe">
                      <?php echo form_error('confirm_password'); ?>
                    </div>

                    <input type="reset" name="reset" value="RESET" />
                    <input type="submit" name="submit" value="AJOUTER" />
                </div>
                <!-- FIN corps contenu -->
              </form>
            </div>
        </div>
      </div>
    </section>
    <!-- FINT Contenu -->

</div>
<!-- FIN Contenu Page -->





<?php	//Pour appeler la partie navbar dans parials
	      $this->load->view('partials/footer');
?>


<script src="<?php echo base_url('assets/js/bootstrap/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/adminlte.min.js'); ?>"></script>


</body>
</html>






