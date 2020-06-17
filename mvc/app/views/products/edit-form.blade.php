@extends('layouts.main')
@section('content')
    <form action="{{ getClientUrl('save-edit-product', ['id' => $model->id])}}"
        method="post"
        enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Tên sản phẩm</label>
          <input type="text" class="form-control" name="name" value="{{$model->name}}">
        </div>
        <div class="form-group">
          <label for="">Danh mục</label>
          <select  class="form-control" name="cate_id">
            @foreach ($cates as $ca)
              <option
                @if($ca->id == $model->cate_id)
                  selected
                @endif
              value="{{$ca->id}}">$ca->cate_name</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="">Giá sản phẩm</label>
          <input type="text" class="form-control" name="price" value="{{$model->price}}">
        </div>
        <div class="form-group">
          <label for="">Mô tả ngắn</label>
          <textarea name="short_desc" class="form-control" rows="5" cols="100">{{$model->short_desc}}</textarea>
        </div>
        <div class="form-group">
          <label for="">Mô tả chi tiết</label>
          <textarea name="detail" class="form-control" rows="10" cols="100">{{$model->detail}}</textarea>
        </div>
        <div class="form-group">
          <label for="">Star</label>
          <input type="number" class="form-control" name="star" value="{{$model->star}}">
        </div>
        <div class="form-group">
          <label for="">Lượt xem</label>
          <input type="number" class="form-control" name="views" value="{{$model->views}}">
        </div>
        <div class="">
            <button type="submit">Lưu</button>
        </div>
    </form>
@endsection
