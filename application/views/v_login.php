<div class="col-md">
  <div class="flash-container">
      <?php if ($this->session->flashdata('us-1')): ?>
        <div class="flash-message us-1 flash-success">
          Username dan password salah silahkan periksa kembali, Terima kasih.
        </div>
      <?php endif ?>
    </div>
<div class="d-flex justify-content-center align-items-center min-vh-100 py-6">
          <div class="">
            <div class="wd-100p">
              <!-- <h3 class="tx-color-01 mg-b-5">Sign In</h3> -->
              <div class="text-center">
                <h1><i class="fa fa-houzz text-dark mr-2"></i>Desty project</h1>
               <div class="tx-color-02 tx-12 tx-bold mg-b-20">Selamat datang, silahkan login terlebih dahulu.</div>
              </div>
              <form action="<?php echo base_url(); ?>login/login_act" method="POST" accept-charset="utf-8">
              <div class="form-group">
                <label>Username</label>
                <input autocomplete="off" type="text" class="form-control" placeholder="Masukan username" required name="user_name">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                  <!-- <small>Masukan username dan password yang benar</small> -->
                </div>
                <input type="password" class="form-control" placeholder="Masukan password" required name="user_password">
              </div>
              <button type="submit" class="btn btn-brand-02 btn-block">Sign In</button>
              </form>
              <div class="divider-text">Desty Project <?php echo date('Y'); ?></div>
            </div>
          </div>
        </div>
        </div>