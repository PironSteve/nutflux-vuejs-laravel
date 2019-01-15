<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="title m-b-md">
        <h3>Add film form</h3>
    </div>
    <div>
    
        <?php echo Form::open(['method' =>'POST','route' => 'film.store']); ?>

        <div class="for-group">    <br>     
            <?php echo Form::text('title',null,['class' => 'form-control','place-holder' => 'Enter Film Title']); ?>

        </div> <br>
        <div class="for-group">        
            <?php echo Form::text('genre',null,['class' => 'form-control','place-holder' => 'Enter Film Genre']); ?>

        </div>  <br>  
        <div class="for-group">        
            <?php echo Form::text('type',null,['class' => 'form-control','place-holder' => 'Enter Film Genre']); ?>

        </div> <br>
        <div class="for-group">        
            <?php echo Form::text('poster',null,['class' => 'form-control','place-holder' => 'Enter Film Poster URL']); ?>

        </div>  <br>
        <div class="for-group">        
            <?php echo Form::text('trailer',null,['class' => 'form-control','place-holder' => 'Enter Film Poster URL']); ?>

        
        </div>

                   
                <br>
                <div class="for-group">
                <input type="submit" class="btn btn-primary" value="Add Film">
                </div>
        <?php echo e(Form::close()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>