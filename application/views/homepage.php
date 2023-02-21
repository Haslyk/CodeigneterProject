<?php $this->load->view('include/header');?>


    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" style="margin-top: 10%;" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      Kampüsünü canlandırmak ister misin?
                    </h1>
                    <p>
                      Sende cansız kampüs hayatından sıkılmadın mı? Üniversite hayatımızda sosyal yaşama da oldukça ihtiyacımız var. Bizde bunun farkındayız ve Samsun Üniversitesi öğrencilerine yardımcı olmak istiyoruz. Eğer sizde üniversitemizde daha eğlenceli ve sosyal bir ortam yaratmak istiyorsanız bize katılın...
                    </p>
                    <div class="btn-box">
                      <a href="signin.html" class="btn-1">
                        Bize Katıl
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="<?php echo base_url('assets/') ?>images/social.png" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <section class="welcome_section">
   
  </section>

  <?php $this->load->view('include/footer'); ?>