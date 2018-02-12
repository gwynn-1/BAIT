<section>
    <div style="background-color: #00c600;
                                            width: 100%;
                                            height: 100px;">
        <img src="<?php echo e(url("/")); ?>images/logo-bait.png" style="width: 80px;
                                                            height: 80px;
                                                            margin: 10px 0 0 10px;
                                                            display: block;float: left">
        <h2 style="margin: 35px 0 0 15px;
                    color: white;
                    font-family: Arimo;
                    font-size: 25px;
                    display: block;
                    float: left">Xác nhận đăng kí</h2>
        <div></div>
    </div>
    <div style="width: 100%;
                height: auto;
                padding: 10px;
                background-color: #f5f5f5;">
        <p style="margin: 0;
                   font-family: Avenir;"><strong>Chúc mừng bạn đã đăng kí thành công.</strong> </p>
        <p style="margin: 0;
                    font-family: Avenir;">Vui lòng click vào nút Verify bên dưới để chính thức là thành viên của CLB chúng tôi</p>
        <div style="display: flex;
                    justify-content: center;width: 100%">
                <a style="display: block;
                          margin: auto;
                          text-decoration: none;
                          color: white;
                          font-size: 20px;
                          font-family: Avenir;
                          width: 100px;
                          text-align: center;
                          margin-top: 10px;
                          padding: 5px 0;
                          border: none;
                          background-color: #308C01;
                          cursor: pointer;
                          border-radius: 5px;" href="<?php echo e(url("/registration")); ?>/<?php echo e($token); ?>/<?php echo e($tokendate); ?>">Verify</a>
        </div>
    </div>
</section>