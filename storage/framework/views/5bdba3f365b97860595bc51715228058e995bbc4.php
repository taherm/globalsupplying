<?php $__env->startSection('content'); ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <ul class="breadcrumb">

                    <li class="active">
                        <h2>
                            Contact Us

                        </h2>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<br>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="<?php echo e(url('/reserve')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label">Name</label>
                    <input class="form-control" type="text" name="name" id="example-text-input">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <br>
                <div class="form-group">
                    <label for="example-text-input" class="col-2 col-form-label">Mobile No.</label>
                    <input class="form-control" type="text" name="mobile" id="example-text-input">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleTextarea">Message</label>
                    <textarea class="form-control" name="notes" id="exampleTextarea" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.master-ar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>