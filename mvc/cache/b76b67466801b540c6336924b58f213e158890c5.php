<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(getClientUrl('save-edit-product', ['id' => $model->id])); ?>"
        method="post"
        enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Tên sản phẩm</label>
          <input type="text" class="form-control" name="name" value="<?php echo e($model->name); ?>">
        </div>
        <div class="form-group">
          <label for="">Danh mục</label>
          <select  class="form-control" name="cate_id">
            <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option
                <?php if($ca->id == $model->cate_id): ?>
                  selected
                <?php endif; ?>
              value="<?php echo e($ca->id); ?>">$ca->cate_name</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="form-group">
          <label for="">Giá sản phẩm</label>
          <input type="text" class="form-control" name="price" value="<?php echo e($model->price); ?>">
        </div>
        <div class="form-group">
          <label for="">Mô tả ngắn</label>
          <textarea name="short_desc" class="form-control" rows="5" cols="100"><?php echo e($model->short_desc); ?></textarea>
        </div>
        <div class="form-group">
          <label for="">Mô tả chi tiết</label>
          <textarea name="detail" class="form-control" rows="10" cols="100"><?php echo e($model->detail); ?></textarea>
        </div>
        <div class="form-group">
          <label for="">Star</label>
          <input type="number" class="form-control" name="star" value="<?php echo e($model->star); ?>">
        </div>
        <div class="form-group">
          <label for="">Lượt xem</label>
          <input type="number" class="form-control" name="views" value="<?php echo e($model->views); ?>">
        </div>
        <div class="">
            <button type="submit">Lưu</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/pt15111-web/mvc/app/views/products/edit-form.blade.php ENDPATH**/ ?>