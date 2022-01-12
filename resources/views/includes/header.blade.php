

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="../images/Capture.PNG" width="50" height="50" alt="">
    </a>
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Registry</a>
            </li>
            @if(!session()->has('inforuser'))
            <li class="nav-item">
                <a class="nav-link" href="/">inforuser</a>
            </li>
            @endif
            @if(session()->has('inforuser'))
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
            @endif
        </ul>
    </div>
    <div>
        Tra cứu thông tin tiêm chủng <br>
        Thông Cán Khê
    </div>
</nav>