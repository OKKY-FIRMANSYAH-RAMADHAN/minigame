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
                      <form action="" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label>Pertanyaan</label>
                              <div class="row">
                                <div class="col-11"><input type="text" class="form-control" placeholder="Masukkan Pertanyaan" name="question" required></div>
                                <div class="col-1">
                                    <input type="file" name="gambar" id="question-image" class="d-none" onchange="updateButtonText()">
                                    <button type="button" class="btn btn-outline-secondary btn-upload" onclick="questionImage()">+ Gambar</button>
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Opsi 1</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 1" name="option_1" required>
                          </div>
                          <div class="form-group">
                              <label>Opsi 2</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 2" name="option_2" required>
                          </div>
                          <div class="form-group">
                              <label>Opsi 3</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 3" name="option_3" required>
                          </div>
                          <div class="form-group">
                              <label>Opsi 4</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 4" name="option_4" required>
                          </div>
                          <div class="form-group">
                              <label>Jawaban</label>
                              <select name="answer" id="answer" class="form-control" required>
                                  <option value="" selected disabled>Pilih Kunci Jawaban</option>
                                  <option value="option_1">Opsi 1</option>
                                  <option value="option_2">Opsi 2</option>
                                  <option value="option_3">Opsi 3</option>
                                  <option value="option_4">Opsi 4</option>
                              </select>
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