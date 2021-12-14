<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Shop</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4>login</h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="user/login" method="post">
                                        <input type="text" name="login" placeholder="Login" required/>
                                        <input type="password" name="password" placeholder="Password" required/>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="user/signup" method="post">
                                        <input type="text" name="login" placeholder="Login" value="<?=isset($_SESSION['form-data']['login']) ? h($_SESSION['form-data']['login']) : ''?>" required/>
                                        <input type="password" name="password" placeholder="Password" required/>
                                        <input name="email" placeholder="Email" type="email" value="<?=isset($_SESSION['form-data']['email']) ? h($_SESSION['form-data']['email']) : ''?>" required/>
                                        <input type="text" name="name" placeholder="Username" value="<?=isset($_SESSION['form-data']['name']) ? h($_SESSION['form-data']['name']) : ''?>" required/>
                                        <input type="text" name="address" placeholder="Address" value="<?=isset($_SESSION['form-data']['address']) ? h($_SESSION['form-data']['address']) : ''?>" required/>
                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                    <?php if (isset($_SESSION['form-data']))unset($_SESSION['form-data']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->