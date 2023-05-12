@extends('admin.main')
@section('content')
    
        <form action="" method="POST">
          <div class="card-body">  

            <div class="form-group">
              <label for="menu">Tên danh mục</label>
              <input type="text" name="menu" class="form-control" id="menu" placeholder="Nhập danh mục">
            </div>

            <div class="form-group">
                <label >Danh mục</label>
                <select class="form-control" name="parent_id">
                    <option value="0">Danh mục cha</option>
                </select>
            </div>
            <div class="form-group">
                <p><label for="menu">Mô tả</label></p>
               <textarea name="description" cols="126" class="from-control"></textarea>
              </div>
              
              <div class="form-group">
                <p><label for="menu">Mô tả chi tiết</label></p>
                <textarea name="content" cols="126" class="from-control"></textarea>
              </div>
            <div class="form-group">
                <label>Kích hoạt </label>
                <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                      <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" value="0" type="radio" id="noactive" name="active">
                      <label for="noactive" class="custom-control-label">Không</label>
                    </div>
            </div>

    
          </div>

          
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo danh mục</button>
          </div>
          @csrf
        </form>
           
              
            
              
          
@endsection