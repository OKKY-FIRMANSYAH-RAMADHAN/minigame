  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-12">
                      <h1 class="m-0 text-center text-bold text-uppercase">List User</h1>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="d-flex justify-content-end">
                  <a href="<?= base_url('administrator/user/add')?>" class="btn btn-primary btn-sm my-2"><i
                          class="fas fa-plus"></i> Tambah User </a>
              </div>
              <?php if ($this->session->flashdata('message')) :?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('message');?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <?php endif;?>
              <div class="card">
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th width="10%">No</th>
                                  <th>Username</th>
                                  <th width="25%">Role</th>
                                  <th width="10%">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $no=1; foreach ($user as $key => $value) :?>
                              <tr>
                                  <td><?= $no++ ?></td>
                                  <td><?= $value->username ?></td>
                                  <td><?= ($value->role == "superadmin") ? 'Super Admin' : 'Admin' ?></td>
                                  <td>
                                      <a href="<?= current_url().'/update/'. $value->iduser; ?>"
                                          class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                      <a href="<?= current_url().'/delete/'. $value->iduser; ?>"
                                          onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')"
                                          class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                  </td>
                              </tr>
                              <?php endforeach;?>
                          </tbody>
                      </table>
                  </div>
                  <!-- /.card-body -->
              </div>
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->