
<div id="account-field">

    @if(Auth::guard("readers")->check())
    <div class="user-field">
        <form action="logout" method="POST">
            {{csrf_field()}}
            <button type="submit" class="logout-button login-signup-button">
                Thoát
            </button>
        </form>
        <div class="user-name">
            Xin chào <a href="#" id="user"><i class="fa fa-user-circle-o" aria-hidden="true"></i>{{Auth::guard("readers")->user()->name}}</a>
        </div>
    </div>
    @else

        <script>
            $(document).ready(function () {
                $("#login-button").animatedModal({
                    modalTarget:"modallogin",
                    color:"#d6d6d6",
                    animatedIn:"lightSpeedIn",
                    animatedOut:"lightSpeedOut"
                });
                $("#btnsignup").animatedModal({
                    modalTarget:"modalsignup",
                    color:"#d6d6d6",
                    animatedIn:"bounceInUp",
                    animatedOut:"bounceOutDown"
                });
            });
        </script>
        {{--<div id="runningCodeExample" style="border: 1px solid skyblue; padding: 15px; width: 300px;">--}}
            {{--<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'Default-RegistrationLogin'});">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;--}}
            {{--<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'Default-RegistrationLogin', startScreen:'gigya-register-screen'});">Register</a>--}}
        {{--</div>--}}

    <div class="login-signup container">
            <a href="#modallogin" id="login-button" class="login-signup-button">
                <p>Login</p>
            </a>

            <div id="modallogin" class="animated modallogin-off fade">
                    <div class="modal-container">
                        <div class="modal-header">
                            <button class="close-modallogin close-form-login-signup" type="button"></button>
                        </div>
                        <div class="modal-body modal-body-login">
                            <h4 class="modal-title">Đăng nhập ngay</h4>
                            @if ($errors->login_validate->any() || $errors->has("login_failed"))
                                <script>
                                    $(document).ready(function () {
                                        $("#login-button").click();
                                    });
                                </script>
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->login_validate->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" class="form-horizontal" action="login">
                                {{csrf_field()}}
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
            <a id="btnsignup" href="#modalsignup" class="login-signup-button">
                <p>Sign up</p>
            </a>

            <div id="modalsignup" class="animated modalsignup-off fade">
                    <!-- Modal content-->
                    <div class="modal-container">
                        <div class="modal-header">
                            <button type="button" class="close-modalsignup close-form-login-signup"></button>
                        </div>
                        <div class="modal-body modal-body-login">
                            <h4 class="modal-title">Đăng ký ngay</h4>
                            @if ($errors->signup_validate->any() && !$errors->has("login_failed"))
                                <script>
                                    $(document).ready(function () {
                                        $("#btnsignup").click();
                                    });
                                </script>
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->signup_validate->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" class="form-horizontal" action="signup">
                                {{csrf_field()}}
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
                                    <label class="control-label col-sm-3" for="gender">Giới tính</label>
                                    <div class="col-sm-9">
                                        <div class="pretty p-icon p-smooth">
                                            <input type="radio" name="gender" checked value="Nam">
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>
                                                <label> Nam</label>
                                            </div>
                                        </div>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="radio" name="gender" value="Nữ">
                                            <div class="state p-success">
                                                <i class="icon fa fa-check"></i>
                                                <label> Nữ</label>
                                            </div>
                                        </div>
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
                                        <span class="captcha-img">{!! captcha_img() !!}</span>
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
            @if(session()->has("register_status"))
                <script>
                    $(document).ready(function () {
                        $("#modalsignup_success").modal('show');
                    });
                </script>

                <div id="modalsignup_success" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-md">
                        <!-- Modal content-->
                        @if(session("register_status")=="success")
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
                        @elseif(session("register_status")=="fail")
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
                        @endif
                    </div>
                </div>
            @endif
        </div>
    <script src="js/animatedModal.min.js"></script>
    @endif

</div>