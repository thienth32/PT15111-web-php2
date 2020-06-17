<?php $__env->startSection('content'); ?>
<table class="table table-stripped">
  <thead>
    <th>Mã sp</th>
    <th>Tên sp</th>
    <th>Danh mục</th>
    <th>Giá tiền</th>
    <th>
      <a href="<?php echo e(getClientUrl('add-product')); ?>">Thêm</a>
    </th>
  </thead>
  <tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($item->id); ?></td>
        <td><?php echo e($item->name); ?></td>
        <td><?php echo e($item->cate_id); ?></td>
        <td><?php echo e($item->price); ?></td>
        <td>
            <a href="<?php echo e(getClientUrl('edit-product',
                        ['id' => $item->id])); ?>">Sửa</a>
            <a href="<?php echo e(getClientUrl('remove-product',
                        ['id' => $item->id])); ?>">Xóa</a>
          </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/pt15111-web/mvc/app/views/home/trang-chu.blade.php ENDPATH**/ ?>