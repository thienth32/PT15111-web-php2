<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <th>Mã SP</th>
        <th>Tên sp</th>
        <th>Danh mục</th>
        <th>Giá tiền</th>
        <th>
          <a href="{{getClientUrl('add-product')}}">Thêm</a>
        </th>
      </thead>
      <tbody>
        @foreach ($products as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->cate_id}}</td>
            <td>{{$item->price}}</td>
            <td>
                <a href="{{getClientUrl('edit-product',
                            ['id' => $item->id])}}">Sửa</a>

                <a href="{{getClientUrl('remove-product',
                            ['id' => $item->id])}}">Xóa</a>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
