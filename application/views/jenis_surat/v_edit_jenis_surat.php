<?php $this->load->view('inc/head'); ?>
<?php $this->load->view('inc/sidebar'); ?>
<?php $this->load->view('inc/navbar'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-info card-header-icon">
                          <div class="card-icon">
                            <i class="material-icons">mode_edit</i>
                          </div>
                          <h4 class="card-title"><?php echo $page_title; ?></h4>
                        </div>
                        <form method="POST" action="<?php echo base_url($this->uri->segment(1).'/editaction') ?>" class="form-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-md-2 col-form-label font-weight-bold">Kode</label>
                                    <div class="col-md-10">
                                      <div class="form-group has-default">
                                          <input type="text" name="kode" value="<?php echo $kode ?>" placeholder="Masukkan Kode Jenis Surat..." class="form-control" required>
                                          <input type="hidden" name="id" value="<?php echo $id_jenis_surat ?>" placeholder="Masukkan Kode Jenis Surat..." class="form-control" required>
                                      </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2 col-form-label font-weight-bold">Jenis Surat</label>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $jenis_surat ?>" placeholder="Masukkan Nama Jenis Surat..." name="jenis_surat" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pull-right my-3">
                                    <div class="col-12 ">
                                        <button type="submit" class="btn btn-primary"><i class="material-icons">mode_edit</i> Update</button>
                                        <button type="Reset" class="btn btn-danger"><i class="material-icons">cached</i> Reset</button>
                                    </div>
                                </div>
                            </div>    
                        </form>
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->
            </div>
        </div>
    </div>
<?php $this->load->view('inc/footer'); ?>      
<?php $this->load->view('inc/js'); ?>
</html>