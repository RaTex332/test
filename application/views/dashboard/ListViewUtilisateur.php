<?php	//Pour appeler la partie navbar dans parials
	$this->load->view('partials/header');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/liste.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/buttons.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/liste.css'); ?>">
  <!-- Theme style -->
  

	<title>Liste</title>
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

</head>
<body class="hold-transition sidebar-mini">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des utilisateurs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php foreach ($utilisateurs as $utilisateur) { ?>
                  <tr>
                    <td><?php echo $utilisateur->id; ?></td>
                    <td><?php echo $utilisateur->nom; ?></td>
                    <td><?php echo $utilisateur->prenom; ?></td>
                    <td><?php echo $utilisateur->email; ?></td>
                    <td>
                      <a href="<?php echo base_url('user/modifier/' . $utilisateur->id); ?>" class="btn btn-danger btn-sm">
                        Modifier
                      </a>
                      <a href="<?php echo base_url('user/supprimer/' . $utilisateur->id); ?>" class="btn btn-danger btn-sm">
                        Supprimer
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- /.card-body -->
          </div>
            <!-- /.card -->
        </div>
          <!-- /.col -->
      </div>
        <!-- /.row -->
  </div>
      <!-- /.container-fluid -->
  </section>
    <!-- /.content -->
</div>





<script src="<?php echo base_url('assets/js/bootstrap/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/js/bootstrap/jquery.dataTables.min.js'); ?>"></script>
<!-- Mise en forme Pagination -->
<script src="<?php echo base_url('assets/js/bootstrap/dataTables.bootstrap4.min.js'); ?>"></script>
<!-- Pagination -->
<script src="<?php echo base_url('assets/js/bootstrap/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/adminlte.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/pagination.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/refresh.js'); ?>"></script>

<?php	//Pour appeler la partie navbar dans parials
	$this->load->view('partials/footer');
?>

</body>
</html>




