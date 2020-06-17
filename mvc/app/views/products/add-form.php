<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php echo getClientUrl('save-add-product') ?>"
        method="post"
        enctype="multipart/form-data">
        <div class="">
          <label for="">Tên sản phẩm</label>
          <input type="text" name="name" value="">
        </div>
        <div class="">
          <label for="">Danh mục</label>
          <select class="" name="cate_id">
            <?php foreach ($cates as $ca): ?>
              <option value="<?php echo $ca->id ?>">
                <?php echo $ca->cate_name ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="">
          <label for="">Ảnh sản phẩm</label>
          <input type="file" name="image" value="">
        </div>
        <div class="">
          <label for="">Giá sản phẩm</label>
          <input type="text" name="price" value="">
        </div>
        <div class="">
          <label for="">Mô tả ngắn</label>
          <textarea name="short_desc" rows="5" cols="100"></textarea>
        </div>
        <div class="">
          <label for="">Mô tả chi tiết</label>
          <textarea name="detail" rows="10" cols="100"></textarea>
        </div>
        <div class="">
          <label for="">Star</label>
          <input type="number" name="star" value="">
        </div>
        <div class="">
          <label for="">Lượt xem</label>
          <input type="number" name="views" value="">
        </div>
        <div class="">
            <button type="submit">Lưu</button>
        </div>
    </form>
  </body>
</html>
