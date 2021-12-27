@extends('layout.layout')
@section('content')
<div class="container">
  <div class="message">
    {{$message}}
  </div>

</div>
<form method="POST" action="/addinformation">
  @csrf
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="inputEmail4">Họ và tên</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Họ và tên " name="fullname">
          </div>
          <div class="form-group col-md-5">
            <label for="inputPassword4">Số CCCD/ĐDCN</label>
            <input type="text" class="form-control" id="inputcccd" placeholder="Số CCCD" name="cccd">
          </div>
        </div>
        <div class="form-group col-md-5">
          <label for="inputdate">Ngày sinh</label>
          <input type="date" class="form-control" id="inputdate" name="birthday">
        </div>
        <div class="form-group col-md-5">
          <label for="inputphone">Số điện thoại</label>
          <input type="text" class="form-control" id="inputphone" placeholder="Số điện thoại" name="phone">
        </div>
        <div class="form-group">
          <div class="form-group col-md-5">
            <label for="inputSex">Giới tính</label>
            <select id="inputSex" class="form-control" name="sexual">
              <option selected>Chọn giới tính</option>
              <option>Nam</option>
              <option>Nữ</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>Thông tin bảo hiểm xã hội</h4>
        <div class="form-row col-md-4">
          <label for="inputmasobhxh">Mã số BHXH</label>
          <input type="text" class="form-control" id="inputmasobhxh" name="masobhxh">
        </div>
        <div class="form-row col-md-4">
          <label for="inputsothebhyt">Số thẻ BHYT</label>
          <input type="text" class="form-control" id="inputsothebhyt" name="sothebhyt">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="form-row">
          <h4>Thông tin tiêm chủng lần 1</h4>
          <div class="form-group col-md-4">
            <label for="inputnamevaccine">Tên vaccine</label>
            <select id="inputnamevaccine" class="form-control" name="tenvaccine1">
              <option selected>Chọn vaccine</option>
              @foreach($vaccine as $v)
              <option>{{$v->vaccine}}</option>

              @endforeach
            </select>
          </div>
        </div>
        <div class="form-row col-md-4">
          <label for="inputngaytiem1">Ngày tiêm</label>
          <input type="date" class="form-control" id="inputngaytiem1" name="ngaytiem">
        </div>
        <div class="form-row col-md-4">
          <label for="inputLo1">Lô vaccine</label>
          <input type="text" class="form-control" id="inputLo1" name="lovaccine1">
        </div>
        <div class="form-row col-md-4">
          <label for="inputplace1">Cơ sở tiêm</label>
          <input type="text" class="form-control" id="inputplace1" name="cosotiem">
        </div>
      </div>
      <div class="col">
        <div class="form-row">
          <h4>Thông tin tiêm chủng lần 2</h4>
          <div class="form-group col-md-4">
            <label for="inputnamevaccine2">Tên vaccine</label>
            <select id="inputnamevaccine2" class="form-control" name="tenvaccine2">
              <option selected>Chọn vaccine</option>
              @foreach($vaccine as $v)
              <option>{{$v->vaccine}}</option>

              @endforeach
            </select>
          </div>
        </div>
        <div class="form-row col-md-4">
          <label for="inputngaytiem2">Ngày tiêm</label>
          <input type="date" class="form-control" id="inputngaytiem2" name="ngaytiem2">
        </div>
        <div class="form-row col-md-4">
          <label for="inputLo2">Lô vaccine</label>
          <input type="text" class="form-control" id="inputLo2" name="lovaccine2">
        </div>
        <div class="form-row col-md-4">
          <label for="inputplace2">Cơ sở tiêm</label>
          <input type="text" class="form-control" id="inputplace2" name="cosotiem2">
        </div>
      </div>
    </div>
  </div>



  <br>
  <button type="submit" class="btn btn-primary">Đăng ký</button>

</form>
<a href="/">
  <button class="btn btn-primary">Đăng nhập bằng tài khoản khác</button>
</a>
@endsection