<?php $this->load->view('include/header'); ?>

  <!-- service section -->

  <!-- <?php print_r($fikirler); ?> -->

  <section class="service_section" id="fikirler">

    
    <?php foreach($fikirler as $fikir): ?>
      <div class="card"> 
        <div class="card-title">
          <div class="category">
            <h5>Kategori : <?php echo $fikir->e_kategori ?></h5>
          </div>
          <div class="like">
            <i class="heart fas fa-heart"></i>
            <p class="ml-2"><?php echo $fikir->e_begeni;?></p>
          </div>
        </div>
        <div class="card-middle" style="background-image: url(<?php echo base_url('assets/') ?>images/turnuva.png);">
          <div>
            <h2><?php echo $fikir->e_baslik; ?></h2>
          </div>
        </div>
        <div class="card-bottom">
          <div class="photo">
            <button class="border-0" data-toggle="modal" id="1" onclick="showCard(this)"  data-target="#mguvenzengin">
              <img src="<?php echo base_url('assets/') ?>images/<?php echo $fikir->resim; ?>.png" alt="">
            </button>
          </div>
          <div class="person">
            <p>
            <?php echo $fikir->TamAd; ?>
            </p>
            <p>
            <?php echo ($fikir->Bolum . "/" . $fikir->Sinif ); ?>
            </p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      
      <div class="share">
        <button class="btn btn-success" id="btn" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="fa-sharp fa-solid fa-share"></i>
          <p>Sende fikrini paylaş</p>
        </button>
      </div>

      <div class="modal fade text-dark" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-dark" id="exampleModalLongTitle"> Fikrini Bizimle Paylaş</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="form2">
                  <form action="<?php echo base_url('ideas/fikir_ekle'); ?>" method="POST">
                    <div class="mb-2 w-100">
                      <label class="form-label" for="activity">Etkinlik Başlığı :</label>
                      <div class="inputTag">
                        <input class="form-control input" type="text" autocomplete="off" placeholder="Etkinlik Başlığı..." id="activity" name="baslik"/>
                      </div>
                    </div>
                    <div class="mb-2 w-100">
                      <label class="form-label" for="categoryy">Kategori:</label>
                      <div class="inputTag">
                        <select class="list-group w-100 p-2" name="kategori" id="categoryy" required="required">
                          <option class="list-group-item" value="Spor">Spor </option>
                          <option class="list-group-item" value="Sanat">Sanat </option>
                          <option class="list-group-item" value="Turnuva">Turnuva </option>
                          <option class="list-group-item" value="Kulturel">Kültürel </option>
                          <option class="list-group-item" value="Muzik">Müzik </option>
                        </select>
                        <input type="hidden" name="uye_id" value="<?php echo $this->session->userdata('data')['uye_id']; ?>">
                      </div>
                    </div>
                    <div class="button mt-3 w-100">
                      <input class="form-control input btn btn-primary w-100" type="submit" value="Ekle"/>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center align-items-center">
              <p class="m-0">Unutma her ay yalnızca 1 fikir paylaşabilirsin :)</p>
            </div>
          </div>
        </div>
      </div>

  </section>



<?php $this->load->view('include/footer'); ?>