<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Upload Voters
        </h1>
        <ol class="breadcrumb">
          <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Upload Voters</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <?php
        if (isset($_SESSION['error'])) {
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
          unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
          unset($_SESSION['success']);
        }
        ?>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header with-border">
                <h4>Choose Student List To Upload</h4>
              </div>
              <div class="box-body">
                <form class="form-horizontal" method="POST" action="upl_voters.php" enctype="multipart/form-data">

                  <div class="form-group">
                    <label class="control-label col-md-3">Student List <span style="color: red;"><strong>in Excel Format</strong></span>
                    </label>
                    <input class="mdl-textfield__input" type="file" name="file" id="file" accept=".xls,.xlsx" required>
                  </div>

                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-flat" name="import"><i class="fa fa-check-square-o"></i> Upload Voters</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <?php include 'includes/footer.php'; ?>
  </div>
  <?php include 'includes/scripts.php'; ?>
</body>

</html>