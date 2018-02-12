<?php $__env->startSection("mail-signuptoken"); ?>
    <script src="js/email-signup-token.js"></script>
    <section>
        <div class="body-email-token">
            <?php if(isset($is_token)): ?>
                <p>Token không khả dụng</p>
            <?php else: ?>
            <h4>Bạn đã xác nhận đăng kí tài khoản thành công.</h4>
            <p>Bây giờ bạn đã là thành viên và có thể đăng nhập vào trang web</p>
            <?php endif; ?>
            <p>Trang sẽ chuyển hướng trong <span class="second">6</span> giây ...</p>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.email-token-layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>