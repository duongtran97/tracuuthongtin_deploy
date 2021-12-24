<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/custom.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="../js/custom.js"></script>
  <title>Đăng nhập</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <img id="logoImg" src="../images/Capture.PNG" alt="logodtn">
      </div>
      <div class="col-4">
        <h1>Tra cứu thông tin tiêm chủng </h1>
        <h2>Đăng nhập</h2>
      </div>
      <br>
   

      <div class="col-6">
        <form action="/login" method="post">
          @csrf
          <div class="form-group">
            <label for="inputCCCD">Số căn cước công dân</label>
            <input type="text" class="form-control" name="username" id="inputCCCD" placeholder="Nhập số căn cước công dân" ">
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
          <br>

          <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
        <a href="/register" class="dangky"><button class="btn btn-primary">Đăng ký</button></a>
      </div>
    </div>

  </div>
</body>

</html>