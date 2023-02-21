<?php $this->load->view('include/header'); ?>



<section class="signin">
    <?php 
      $val_errors = validation_errors();
      $log_error = $this->session->flashdata('error');
      if ($val_errors) {
          $val_errors = explode("\n", $val_errors);
          $string = "";
          foreach ($val_errors as $error) {
              $string .= $error;
          }
          ?>
        <div class="alert alert-danger" id="error" role="alert">
        </div>
        <?php 
      } if($log_error) { ?>
        <div class="alert alert-danger" id="error" role="alert"> <?php echo $log_error ?> </div> <?php
      } 
    ?>


    <div class="login active mt-5">
          <div class="form">
            <form action="<?php echo base_url('signin/giris_yap') ?>" method="POST">
              <div class="title">
                <h1>Giriş Yap</h1>
              </div>
              <div class="mb-4">
                <label class="form-label" for="email">E-Posta</label>
                <div class="inputTags">
                  <input class="form-control input" type="email" placeholder="Eposta..." name="mail"/>
                  <button class="form-control font" disabled><i class="fa-solid fa-envelope"></i></button>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label" for="password">Şifre</label>
                <div class="inputTags">
                  <input class="form-control input" type="password" placeholder="Şifre..." name="sifre"/>
                  <button class="form-control font" disabled="disabled"><i class="fa-solid fa-key"></i></button>
                </div>
              </div>
              <div class="button">
                <input class="form-control input btn btn-primary w-50" type="submit" value="Giriş Yap"/>
              </div>
              <div class="links"><button class="btn btn-success switch-register">Kayıt Ol</button></div>
            </form>
        </div>
    </div>

    <div class="register">
      <div class="form">
        <form action="<?php echo base_url('Signin/kayit_ol') ?>" method="POST">
          <div class="title">
            <h1>Kayıt Ol</h1>
          </div>
          <div class="mb-4">
            <label class="form-label" for="name">Tam Ad</label>
            <div class="inputTags">
              <input class="form-control input" type="text" id="name"  placeholder="Tam Adınız..." name="fullName"/>
              <button class="form-control font" disabled="disabled"><i class="fa-solid fa-user"></i></button>
            </div>
          </div>
          <div class="mb-4" style="font-size: 0.9em;">
            <label class="form-label"  style="width: 46.5%;"  for="department">Bölümünüz:
              <select class="list-group p-1 w-100" style="border: 1px solid #c4c4c4;border-radius: 10px;" name="bolum" id="department" >
                <option class="list-group-item" disabled selected value="">Bölümünü Seç       </option>
                <option class="list-group-item" value="yazilim">Yazılım Müh.                  </option>
                <option class="list-group-item" value="havacilikveuzay">Havacılık ve Uzay Müh. </option>
                <option class="list-group-item" value="makine">Makine Müh.                     </option>
                <option class="list-group-item" value="elektrik">Elektrik / Elektronik Müh.  </option>
                <option class="list-group-item" value="biyomedikal">Biyomedikal Müh.  </option>
                <option class="list-group-item" value="Endüstri">Endüstri Müh.  </option>
                <option class="list-group-item" value="Meteoroloji">Meteoroloji Müh.  </option>
              </select>
            </label>
            <label class="form-label" style="width: 46.5%;margin-left: 6%;"  for="year">Sınıfınız:
              <select class="list-group p-1 w-100" style="border: 1px solid #c4c4c4;border-radius: 10px;" name="sinif" id="year" >
                <option class="list-group-item" disabled selected value="">Sınıfını Seç</option>
                <option class="list-group-item" value="hazirlik">Hazırlık  </option>
                <option class="list-group-item" value="1">1. Sınıf </option>
                <option class="list-group-item" value="2">2. Sınıf  </option>
                <option class="list-group-item" value="3">3. Sınıf  </option>
                <option class="list-group-item" value="4">4. Sınıf  </option>
              </select>
            </label>
          </div>
          <div class="mb-4">
            <label class="form-label" for="email">E-Posta</label>
            <div class="inputTags">
              <input class="form-control input" type="email"  placeholder="Eposta..." name="mail"/> <!-- pattern="[a-zA-Z0-9._%+-]+@samsun\.edu\.tr"  title="Lütfen samsun.edu.tr uzantılı bir eposta adresi giriniz." -->
              <button class="form-control font" disabled><i class="fa-solid fa-envelope"></i></button>
            </div>
          </div>
          <div class="mb-4">
            <label class="form-label" for="password">Şifre</label>
            <div class="inputTags">
              <input class="form-control input" type="password"  placeholder="Şifre..." name="sifre"/>
              <button class="form-control font" disabled="disabled"><i class="fa-solid fa-key"></i></button>
            </div>
          </div>
          <div class="button">
            <input class="form-control input btn btn-primary w-50" type="submit" value="Kayıt Ol"/>
          </div>
          <div class="links"><button class="btn btn-success switch-login">Giriş Yap</button></div>
        </form>
    </div>
</div>
  </section>


  <script>
    var string = "<?php echo $string; ?>";
    var string2 = string.replace(/<\/?[^>]+(>|$)/g, "");
    var string3 = string2.replace(/\../g, ".\t.\t.\t.\t");

    console.log(string3)

    var error = document.getElementById("error");
    error.innerHTML = string3;

  </script>

<?php $this->load->view('include/footer'); ?>
