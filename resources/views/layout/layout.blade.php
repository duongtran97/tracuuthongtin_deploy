<!DOCTYPE html>
<html lang="lang=" {{ str_replace('_', '-', app()->getLocale()) }}">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/custom.css">
  <script src="../js/custom.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <title>Tra cứu thông tin</title>
</head>

<body>
  <div class="container">
    <div class="fixed-top">

      <div class="container-fluid">
        <header class="">
          @include('includes.header')
        </header>

      </div>
    </div>
  </div>
  <div class="container ">
    <div class="col">
    </div>
    <div class="container">

      <div class="row align-items-between">
        <div class="col">
          <h2>Tra cứu thông tin tiêm chủng </h2>
          <h3>Thôn Cán Khê</h3>
        </div>

      </div>
    </div>
    @yield('content')
    </div>
</body>

</html>