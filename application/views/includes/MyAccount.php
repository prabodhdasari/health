<div class="dropdown header-top-account">
                <a href="#" class="account-button">My Account</a>
                <div class="account-card">
                  <div class="header-top-account-info">
                    <a href="#" class="account-thumb">
                      <img src="images/account/thumb-1.jpeg" class="img-fluid" alt="">
                    </a>
                    <div class="account-body">
                      <h5><a href="#">
                   <?php echo  $this->session->userdata('username'); ?>
                      <!-- Robert Chavez New<> -->
</a></h5
                      <span class="mail">
                      <?php echo  $this->session->userdata('email'); ?>
                      </span>
                    </div>
                  </div>
                  <ul class="account-item-list">
                    <li><a href="#"><span class="ti-user"></span>Account</a></li>
                    <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                    <li><a href="home"><span class="ti-power-off"></span>Log Out</a></li>
                  </ul>
                </div>
              </div>