  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-12">
                      <h1 class="m-0 text-center text-bold text-uppercase">Tambah Soal</h1>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="card card-warning">
                  <!-- /.card-header -->
                  <div class="card-body">
                      <?php if ($this->session->flashdata('message')) :?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <?= $this->session->flashdata('message') ?>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <?php endif;?>
                      <form action="" method="POST">
                          <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" id="username"
                                  placeholder="Username" required>
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input class="form-control" type="password" name="password" id="password"
                                  placeholder="Password" required>
                          </div>
                          <div class="form-group">
                              <label>Konfirmasi Password</label>
                              <input class="form-control" type="password" name="konfirm_password" id="konfirm_password"
                                  placeholder="Password" required>
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                  </div>
                  <!-- /.card-body -->
              </div>
          </div>
          <!-- /.card-body -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
