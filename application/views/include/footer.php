<div class="footer_bg" style="z-index: 10000;">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container info_content">
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="">
              <img src="<?php echo base_url('assets/') ?>images/wp.png" alt=""/>
            </a>

            <a href="">
              <img src="<?php echo base_url('assets/') ?>images/twitter.png" alt=""/>
            </a>
            <a href="">
              <img src="<?php echo base_url('assets/') ?>images/linkedin1.png" alt=""/>
            </a>
            <a href="">
              <img src="<?php echo base_url('assets/') ?>images/instagram1.png" alt=""/>
            </a>
          </div>
          
        </div>
      </div>

    </section>

    <section class="container-fluid footer_section">
      <p>
        Made By @halimaslyk @mguvenzengin © 2023 
      </p>
    </section>
  </div>

  <div id="mainPopup">
    
  </div>


  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/script.js"></script>
  <script>
      const login = document.querySelector('.login');
      const signup = document.querySelector('.register');
  
      document.querySelector('.switch-register').addEventListener('click', (event) => {
        event.preventDefault();
        login.classList.remove('active');
  
        signup.classList.add('active');
        console.log("Kayıta tıklandı")
      });
  
      document.querySelector('.switch-login').addEventListener('click', (event) => {
        event.preventDefault();
        signup.classList.remove('active');
  
        login.classList.add('active');
        console.log("Girişe tıklandı")
      });
  </script>

</body></html>