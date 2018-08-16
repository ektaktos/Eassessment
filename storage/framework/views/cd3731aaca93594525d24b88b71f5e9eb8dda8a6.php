<?php $__env->startSection('content'); ?>
<div class="container">

           <h4 align="center">Set Question page</h4>
           <br>

    <div class="justify-content-center row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Multiple Choice</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                   <form method="post" action="<?php echo e(route('setQuestion')); ?>">

                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="category" value="Multiple Choice">

                        <div class="form-group row">
                            <label for="quizcode1"class="col-md-4 col-form-label text-md-right"><?php echo e(__('Quiz Code')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control" name="quiz_code" id="quizcode1" required>
                                    <option value="">--Select Quiz--</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question1" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter Question')); ?></label>

                            <div class="col-md-6">
                                <input id="question1" type="text" class="form-control<?php echo e($errors->has('question1') ? ' is-invalid' : ''); ?>" name="question1" value="<?php echo e(old('question1')); ?>" required>

                                <?php if($errors->has('question1')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('question1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option1" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter First Option')); ?></label>

                            <div class="col-md-6">
                                <input id="option1" type="text" class="form-control<?php echo e($errors->has('option1') ? ' is-invalid' : ''); ?>" name="option1" value="<?php echo e(old('option1')); ?>" required>

                                <?php if($errors->has('option1')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('option1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option2" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter Second Option')); ?></label>

                            <div class="col-md-6">
                                <input id="option2" type="text" class="form-control<?php echo e($errors->has('option2') ? ' is-invalid' : ''); ?>" name="option2" value="<?php echo e(old('option2')); ?>" required>

                                <?php if($errors->has('option2')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('option2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option3" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter Third Option')); ?></label>

                            <div class="col-md-6">
                                <input id="option3" type="text" class="form-control<?php echo e($errors->has('option3') ? ' is-invalid' : ''); ?>" name="option3" value="<?php echo e(old('option3')); ?>" required>

                                <?php if($errors->has('option3')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('option3')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="option4" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter Fourth Option')); ?></label>

                            <div class="col-md-6">
                                <input id="option4" type="text" class="form-control<?php echo e($errors->has('option4') ? ' is-invalid' : ''); ?>" name="option4" value="<?php echo e(old('option4')); ?>" required>

                                <?php if($errors->has('option4')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('option4')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="answer1" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter Answer')); ?></label>

                            <div class="col-md-6">
                                <input id="answer1" type="text" class="form-control<?php echo e($errors->has('answer1') ? ' is-invalid' : ''); ?>" name="answer1" value="<?php echo e(old('answer1')); ?>" required>

                                <?php if($errors->has('answer1')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('answer1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Submit')); ?>

                            </button>
                        </div>
                        </div>

                    </form>   

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">True or False</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="post">

                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="category" value="true or false">

                        <div class="form-group row">
                            <label for="quizcode2" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Quiz Code')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control" name="quiz_code" id="quizcode2" required>
                                    <option value="">--Select Quiz--</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter Question')); ?></label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control<?php echo e($errors->has('question') ? ' is-invalid' : ''); ?>" name="question" value="<?php echo e(old('question')); ?>" required>

                                <?php if($errors->has('question')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('question')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="answer2" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Select Answer')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control" name="answer2" id="answer2" required>
                                    <option value="">--Select Answer--</option>
                                    <option value="true">True</option>
                                    <option value="false">False</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Submit')); ?>

                            </button>
                        </div>
                        </div>

                    </form>   
                </div>
            </div>

            <br>
            <div class="card">

                <?php if(session('uploadStatus')): ?>
                        <div class="alert alert-warning">
                            <?php echo e(session('uploadStatus')); ?>

                        </div>
                <?php endif; ?>

                <div class="card-header">Upload Aiken Format</div>
                <div class="card-body">
                    <form method="post" enctype='multipart/form-data' action="/uploadAiken">

                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="upload" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Upload Question File')); ?></label>

                            <div class="col-md-6">  
                                <input id="questionFile" type="file" class="form-control" name="questionFile" required>

                                <?php if($errors->has('questionFile')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('questionFile')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Submit')); ?>

                            </button>
                        </div>
                        </div>

                    </form>
                </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo asset('js/bootstrap.min.js'); ?>"></script>

<script type="text/javascript">
 
$.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
 
</script>
<script type="text/javascript">

    $(document).ready(function() {

        $.ajax({
          url: '/select-ajax',
          method: 'GET',
          success: function(data) {
            var len = data.length;
            for(var i=0; i<len; i++){
                var code = data[i]['quiz_code'];
                var option = new Option(code, code); 
                $('#quizcode1').append($(option));
            }

            for(var i=0; i<len; i++){
                var code = data[i]['quiz_code'];
                var option = new Option(code, code); 
                $('#quizcode2').append($(option));
            }
            
          }
      });
    });
</script>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>