<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quiz Registration page</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('newQuiz')); ?>" method="post">

                        <?php echo csrf_field(); ?>

                    <div class="form-group row">
                            <label for="quiz_code" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Quiz Code')); ?></label>

                            <div class="col-md-6">
                                <input id="quiz_code" type="text" class="form-control<?php echo e($errors->has('quiz_code') ? ' is-invalid' : ''); ?>" name="quiz_code" value="<?php echo e(old('quiz_code')); ?>" required autofocus>

                                <?php if($errors->has('quiz_code')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('quiz_code')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="quiz_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Quiz Name')); ?></label>

                            <div class="col-md-6">
                                <input id="quiz_name" type="text" class="form-control<?php echo e($errors->has('quiz_name') ? ' is-invalid' : ''); ?>" name="quiz_name" value="<?php echo e(old('quiz_name')); ?>" required>

                                <?php if($errors->has('quiz_name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('quiz_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="questionNum" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Number of Questions')); ?></label>

                            <div class="col-md-6">
                                <input id="questionNum" type="number" class="form-control<?php echo e($errors->has('questionNum') ? ' is-invalid' : ''); ?>" name="questionNum" value="<?php echo e(old('questionNum')); ?>" required>

                                <?php if($errors->has('questionNum')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('questionNum')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Quiz Duration')); ?></label>

                            <div class="col-md-6">
                                <input id="duration" type="number" class="form-control<?php echo e($errors->has('duration') ? ' is-invalid' : ''); ?>" name="duration" value="<?php echo e(old('duration')); ?>" required>

                                <?php if($errors->has('duration')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('duration')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                </form>          

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>