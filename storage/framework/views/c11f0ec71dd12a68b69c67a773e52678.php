<?php $__env->startSection('title'); ?>
    Create Post
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
    
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-11">
            <div class=" card w-100 ">
              <div class="card-header">
                <div class="car-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Fill form and submit
                </div>
              </div>
              <div class="p-lg-5 gap-4 m-lg-5 m-0  justify-content-center align-items-center flex">
                <form action="<?php echo e(route('post.new')); ?>" method="POST" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="row justify-content-center  align-items-center ">
                    <div class="col-lg-5 col-12 p-4 text-center bg-warning ">
                      <h2>
                        Add New Post
                      </h2> 
                    </div>
                    
                    <div class="col-lg-11 col-12 p-3 mt-5 ">
                      <label for="title">Post Title</label>
                      <input type="text" id="title" name="title" class="form-control " value="<?php echo e(old('title')); ?>">
                      <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <div class="col-lg-4 col-10 p-3  ">
                      <label for="date">Date</label>
                      <input type="date" id="date" name="date" class="form-control " value="<?php echo e(old('date')); ?>">
                      <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <div class="col-lg-5 col-12 p-3  ">
                      <label for="category_id">Category</label>
                        <select name="category_id" id="category_id">
                          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($item->id); ?>"><?php echo e($item->cat_name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </select>
                      <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <div class="col-lg-5 col-12 p-3  ">
                      <label for="video_type">Video Type(HD,Pre Dvd etc..)</label>
                      <input type="text" id="video_type" name="video_type" class="form-control " value="<?php echo e(old('video_type')); ?>">
                      <?php $__errorArgs = ['video_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <div class="col-lg-11 col-12 p-3">
                      <label for="movie_info">Movie Information</label>
                      <textarea type="text" rows="18" id="editor" name="movie_info" class="form-control " value="<?php echo e(old('movie_info')); ?>"></textarea>
                      <?php $__errorArgs = ['movie_info'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    
                    <div class="col-lg-11 col-12 p-3  ">
                      <label for="screenshots" style="font-size: 30px">Screenshots</label>
                      <textarea type="text" rows="20" id="image_editor" name="screenshots" class="form-control " value="<?php echo e(old('screenshots')); ?>"></textarea>
                      <?php $__errorArgs = ['screenshots'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="col-lg-11 col-12 p-3">
                      <label for="download_description">Download Description</label>
                      <textarea type="text" rows="18" id="btn_editor" name="download_description" class="form-control " value="<?php echo e(old('download_section')); ?>"></textarea>
                      <?php $__errorArgs = ['download_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="col-lg-11 col-12 p-3  ">
                      <label for="thumbnail">Thumbnail</label>
                      <input type="file"  id="thumbnail" name="thumbnail" class="form-control " value="<?php echo e(old('thumbnail')); ?>">
                      <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <p class="text-danger"><?php echo e($message); ?></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row w-100 mt-1 d-flex">
                        <div class="w-100 text-danger ">
                           😎 Seo Section
                        </div>
                        
                         
                      <div class="col-lg-11 col-12 p-3  ">
                        <label for="meta_title">Meta Title</label>
                        <input type="text"  id="meta_title" name="meta_title" class="form-control " value="<?php echo e(old('meta_title')); ?>">
                        <?php $__errorArgs = ['meta_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>

                         
                      <div class="col-lg-11 col-12 p-3  ">
                        <label for="meta_description">Meta Description</label>
                        <textarea type="text"  id="meta_description" name="meta_description" class="form-control " value="<?php echo e(old('meta_description')); ?>"></textarea>
                        <?php $__errorArgs = ['meta_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>

                         
                      <div class="col-lg-11 col-12 p-3  ">
                        <label for="meta_keywords">Meta Keywords</label>
                        <input type="text"  id="meta_keywords" name="meta_keywords" class="form-control " value="<?php echo e(old('meta_keywords')); ?>">
                        <?php $__errorArgs = ['meta_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>

                    </div>
                  </div>
    
                  <div class="mt-2 col-lg-12 col-12 text-center justify-content-center align-items-center flex p-5">
                    <input type="submit" class="btn btn-success w-100 flex">
                  </div>
    
                </form>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script>
    var msg = Session::get('alert');
    var exist = Session::has('alert');

    if(exist){
      alert(msg);
    }
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lpy\Desktop\MovieBlog_YT\resources\views/admin/post/createPost.blade.php ENDPATH**/ ?>