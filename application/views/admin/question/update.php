  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Edit question</h1>
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
                                <div class="col-11"><input type="text" class="form-control" placeholder="Masukkan Pertanyaan" name="question" value="<?= $question[0]->question ?>" required></div>
                                <div class="col-1">
                                    <input type="file" name="gambar" id="question-image" class="d-none" onchange="updateButtonText()">
                                    <?php if($question[0]->images != ""):?>
                                        <button type="button" class="btn btn-outline-secondary btn-upload btn-sm" onclick="questionImage()"> Ganti Gambar</button>
                                    <?php else:?>
                                        <button type="button" class="btn btn-outline-secondary btn-upload" onclick="questionImage()">+ Gambar</button>
                                    <?php endif?>
                                </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Opsi 1</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 1" name="option_1" value="<?= $question[0]->option_1 ?>" required>
                          </div>
                          <div class="form-group">
                              <label>Opsi 2</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 2" name="option_2" value="<?= $question[0]->option_2 ?>" required>
                          </div>
                          <div class="form-group">
                              <label>Opsi 3</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 3" name="option_3" value="<?= $question[0]->option_3 ?>" required>
                          </div>
                          <div class="form-group">
                              <label>Opsi 4</label>
                              <input type="text" class="form-control" placeholder="Masukkan Opsi 4" name="option_4" value="<?= $question[0]->option_4 ?>" required>
                          </div>
                          <div class="form-group">
                              <label>Jawaban</label>
                              <select name="answer" id="answer" class="form-control" required>
                                  <option value="" disabled>Pilih Kunci Jawaban</option>
                                  <option value="option_1" <?= ($question[0]->answer == "option_1") ? 'selected' : '' ?>>Opsi 1</option>
                                  <option value="option_2" <?= ($question[0]->answer == "option_2") ? 'selected' : '' ?>>Opsi 2</option>
                                  <option value="option_3" <?= ($question[0]->answer == "option_3") ? 'selected' : '' ?>>Opsi 3</option>
                                  <option value="option_4" <?= ($question[0]->answer == "option_4") ? 'selected' : '' ?>>Opsi 4</option>
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