<?php namespace Views;?>

<div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="item header-text">
                <h6>Linkedon</h6>
                <h2><em>Sign Up</em></h2>
                <form action="<?= FRONT_ROOT ?>Student/signUp" method="post">
                  <div class="col-6 mt-5">
                    <div class="form-group">
                        <input class="form-control" name="nombre" type="text" required minlength="2" maxlength= "25"  placeholder="Nombre">
                    </div>
                  </div>
                  <div class="col-6 mt-2">
                      <div class="form-group">
                          <input class="form-control" name="apellido" type="text" required minlength="2" maxlength= "25" placeholder="Apellido">
                      </div>
                  </div>
                  <div class="col-6 mt-2">
                    <div class="form-group">
                        <input class="form-control" name="dni" type="number" required minlength="7" maxlength= "9"  placeholder="DNI">
                    </div>
                  </div>
                  <div class="col-6 mt-2">
                      <div class="form-group">
                          <input class="form-control" name="email" type="email" required minlength="2" maxlength= "25"  placeholder="Email">
                      </div>
                  </div>
                  <div class="col-6 mt-2">
                      <div class="form-group">
                          <input class="form-control" name="password" type="password" required minlength="6" maxlength= "25" placeholder="Contrasena">
                      </div>
                  </div>
                  <div class="col-6 mt-4">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

     <!--
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#contact">Message Us Now</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 010-020-0340</a>
                    </div>
                  </div>-->