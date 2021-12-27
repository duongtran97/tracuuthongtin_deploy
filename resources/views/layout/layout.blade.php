<!DOCTYPE html>
<html lang="lang=" {{ str_replace('_', '-', app()->getLocale()) }}">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/custom.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="../js/custom.js" type="text/javascript"></script>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

  <title>Tra cứu thông tin</title>
</head>

<body>
  <d class="container-fluid">
    <header class="d-flex flex-fill justify-content-center">
      @include('includes.header')
    </header>

  </d>
  <div class="container">
    <div class="col">
      @if (session()->exists('username'))
      <form class="row g-3 needs-validation" action="/logout" method="post">
        <!-- @method('searchForCCCD') -->
        @csrf
        <div class="col-md-12">
          <button class="btn btn-primary" type="submit">Đăng xuất</button>
        </div>
      </form>
      @endif

    </div>
  </div>
  <div class="container">

    <div class="row align-items-center">
      <div class="col">
        <img id="logoImg" src="../images/Capture.png" alt="logodtn">
      </div>
      <div class="col">
        <h1>Tra cứu thông tin tiêm chủng </h1>
        <h2>Thôn Cán Khê</h2>
      </div>

    </div>
  </div>
  @yield('content')
</body>

</html>