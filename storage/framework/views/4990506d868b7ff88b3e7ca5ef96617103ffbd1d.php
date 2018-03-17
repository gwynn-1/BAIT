<?php $__env->startSection('section-body'); ?>
    <section>
        <link rel="stylesheet" href="css/contact.css">
        <?php if(session()->has("success_send_mail")): ?>
            <script>
                $(document).ready(function () {
                    swal({
                        text : "<?php echo e(session("success_send_mail")); ?>",
                        icon : "success"
                    });
                });

            </script>
        <?php endif; ?>
        <?php if(session()->has("fail_send_mail")): ?>
            <script>
                $(document).ready(function () {
                    swal({
                        text : "<?php echo e(session("fail_send_mail")); ?>",
                        icon : "error"
                    });
                });

            </script>
        <?php endif; ?>
        <div class="body-content">
            <div class="title-contact">
                <p>Liên hệ qua Email</p>
            </div>
            <?php if($errors->contact_validate->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->contact_validate->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="email-to-author">
                <form class="form-horizontal form-contact" method="POST" action="/contact/send" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="left-form col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="subject">Chủ đề :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required id="subject" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Tên :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Email :</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="file">Đính kèm :</label>
                            <div class="col-sm-9">
                                <input type="file" id="file" name="file">
                            </div>
                        </div>
                    </div>
                    <div class="right-form col-md-8">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="mail-content">Message :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="mail-content" required id="mail-content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-submit-form">
                        <button type="submit" id="submit-button">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>