<?php $__env->startSection('section-body'); ?>
    <section>
        <link rel="stylesheet" href="css/contact.css">
        <div class="body-content">
            <div class="title-contact">
                <p>Liên hệ qua Email</p>
            </div>
            <div class="email-to-author">
                <form class="form-horizontal" action="" enctype="multipart/form-data">
                    <div class="left-form col-md-4">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="subject">Chủ đề :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Tên :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Email :</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="file">Đính kèm :</label>
                            <div class="col-sm-9">
                                <input type="file" id="file">
                            </div>
                        </div>
                    </div>
                    <div class="right-form col-md-8">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="mail-content">Message :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="mail-content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-submit-form">
                            <button type="submit">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>