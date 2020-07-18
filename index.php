<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/login.js"></script>

                <div class="login-form">
                    <form id="login_form" method="POST">
                        <div class="form-group">
                            <label>Kullanıcı Adı : </label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Kullanıcı Adı Giriniz">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Beni Hatırla
                            </label>
                            <label class="pull-right">
                                <a href="#">Şifreni mi unuttun ?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Giriş Yap</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Facebook ile giriş yap</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Twitter ile giriş yap</button>
                            </div>
                        </div>
                   <div class="register-link m-t-15 text-center">
                          <span class="text-danger align-middle" id="errorMsg"></span>
                        </div>
                    </form>
                </div>
           