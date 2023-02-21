<?php $this->load->view('include/header'); ?>
  
    <!-- welcome section -->
    <section class="profile">
      <div class="info">
        <div class="personalImg">
            <img src="<?php echo base_url('assets/') ?>images/icon8.png" alt="icon">
        </div>
        <div class="personalInfo">
            <span>
                <i class="fa-solid fa-user"></i>
                <p>Halim Aslıyüksek</p>
            </span>
            <span>
                <i class="fa-sharp fa-solid fa-building-user"></i>
                <p>Yazılım Mühendisliği / 3</p>
            </span>
            <span>
                <i class="fa-solid fa-envelope"></i>
                <p>2*********5@samsun.edu.tr</p>
            </span>
        </div>
        <div class="personalButton">
            <button class="btn btn-secondary" style="margin-top: 13%;">Profili Düzenle</button>
        </div>
      </div>
      <div class="cards">
        <ul>
            <li class="active"><button class="btn btn-primary" >Paylaşılan Fikirler</button></li>
            <li><button class="btn btn-primary">Beğenilen Fikirler</button></li>
        </ul>

        <div class="cardList">
            <div class="card">
                <div class="card-title">
                    <div class="category">
                    <h5>Kategori : Kültürel</h5>
                    </div>
                    <div class="like">
                    <i class="fa-solid fa-heart" ></i>
                    <p>24</p>
                    </div>
                </div>
                <div class="card-middle" style="background-image: url(<?php echo base_url('assets/') ?>images/kulturel.jpg);">
                    <div>
                    <h2>Efes Gezisi</h2>
                    </div>
                </div>
                <div class="card-bottom">
                    <div class="photo">
                    <a href="signin.html">
                        <img src="<?php echo base_url('assets/') ?>images/icon8.png" alt="">
                    </a>
                    </div>
                    <div class="person">
                    <p>
                        Halim Aslıyüksek
                    </p>
                    <p>
                        Yazılım Mühendisliği / 3
                    </p>
                    </div>
                </div>
            </div>
        
            <!-- <div class="card active">
                <div class="card-title">
                  <div class="category">
                    <h5>Kategori : Turnuva</h5>
                  </div>
                  <div class="like">
                    <i class="heart fas fa-heart" style="color: red;"></i>
                    <p>192</p>
                  </div>
                </div>
                <div class="card-middle" style="background-image: url(<?php echo base_url('assets/') ?>images/turnuva.png);">
                  <div>
                    <h2>Pes Turnuvası</h2>
                  </div>
                </div>
                <div class="card-bottom">
                  <div class="photo">
                    <a href="signin.html">
                      <img src="<?php echo base_url('assets/') ?>images/icon6.png" alt="">
                    </a>
                  </div>
                  <div class="person">
                    <p>
                      Güven Zengin
                    </p>
                    <p>
                      Makine Mühendisliği / 4
                    </p>
                  </div>
                </div>
              </div> -->
        </div>

      </div>
    </section>
    <!-- end welcome section -->
  
  
  
    <?php $this->load->view('include/footer'); ?>