
<div id="account-field">

    <?php if(Auth::guard("readers")->check()): ?>
    <div class="user-field">
        <form action="logout" method="POST">
            <?php echo e(csrf_field()); ?>

            <button type="submit" class="logout-button login-signup-button">
                Thoát
            </button>
        </form>
        <div class="user-name">
            Xin chào <a href="#" id="user"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo e(Auth::guard("readers")->user()->name); ?></a>
        </div>
    </div>
    <?php else: ?>
    <div class="login-signup container">
            <button type="button" class="login-signup-button" data-toggle="modal" data-target="#modallogin">
                Login
            </button>

            <div id="modallogin" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Đăng nhập ngay</h4>
                        </div>
                        <div class="modal-body">
                            <?php if($errors->any()&&$errors->has("login_failed")): ?>
                                <script>
                                    $(document).ready(function () {
                                        $("#modallogin").modal('show');
                                    });
                                </script>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <form method="POST" class="form-horizontal" action="login">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="username">Tên đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" required class="form-control" id="readername">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="pwd">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" required class="form-control" id="pwd">
                                    </div>
                                </div>
                                <div class="form-group btnsignup-sec">
                                    <button type="submit" class="btnsignup login-signup-button">Đăng nhập</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <button type="button" id="btnsignup" class="login-signup-button" data-toggle="modal" data-target="#modalsignup">
                Sign up
            </button>

            <div id="modalsignup" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Đăng ký ngay</h4>
                        </div>
                        <div class="modal-body">
                            <?php if($errors->any() && !$errors->has("login_failed")): ?>
                                <script>
                                    $(document).ready(function () {
                                        $("#modalsignup").modal('show');
                                    });
                                </script>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <form method="POST" class="form-horizontal" action="signup">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="readername">Tên đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="readername" required class="form-control" id="readername">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="name">Họ & Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" required class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="pwd">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" required class="form-control" name="password" id="pwd">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="confirm-pwd">Xác nhận Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" required class="form-control" name="password_confirmation" id="confirm-pwd">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" required class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="school">Trường</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" required id="school" name="school" autocomplete="off">
                                            <option value="UIT">UIT - ĐH Công nghệ thông tin</option>
                                            <option value="USSH">USSH - ĐH Xã hội nhân văn</option>
                                            <option value="IU">IU - ĐH Quốc Tế</option>
                                            <option value="US">US - ĐH Khoa học tự nhiên</option>
                                            <option value="UT">UT - ĐH Bách khoa</option>
                                            <option value="other">Khác</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" id="another-school" name="another-school" class="form-control" placeholder="Trường khác">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="mssv">MSSV</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mssv" id="mssv">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="sdt">Điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="tel" class="form-control" required name="sdt" id="sdt">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="facebook">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="facebook" id="facebook">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="captcha">Captcha</label>
                                    <div class="col-sm-9">
                                        <span class="captcha-img"><?php echo captcha_img(); ?></span>
                                        <i class="fa fa-refresh captcha-reset"></i>
                                        <input type="text" class="form-control" name="captcha" id="captcha">
                                    </div>
                                </div>

                                <div class="form-group btnsignup-sec">
                                    <button type="submit" class="btnsignup login-signup-button">Đăng ký</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <?php if(session()->has("register_status")): ?>
                <script>
                    $(document).ready(function () {
                        $("#modalsignup_success").modal('show');
                    });
                </script>

                <div id="modalsignup_success" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-md">
                        <!-- Modal content-->
                        <?php if(session("register_status")=="success"): ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Đăng kí thành công</h4>
                                </div>
                                <div class="modal-body">
                                    <p><b>Bạn đã đăng kí thành công</b></p>
                                    <p>Vui lòng kiểm tra email để kích hoạt tài khoản, thời gian kích hoạt là 1 ngày</p>
                                </div>
                            </div>
                        <?php elseif(session("register_status")=="fail"): ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Đăng kí thất bại</h4>
                                </div>
                                <div class="modal-body">
                                    <p><b>Bạn đã đăng kí thất bại</b></p>
                                    <p>Vui lòng liên hệ <a href="/contact">link này</a> để thông báo lỗi hoặc thử lại lúc khác</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>