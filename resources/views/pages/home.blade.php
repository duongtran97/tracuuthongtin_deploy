@extends('layout.layout')
@section('content')
<!-- Vùng nhập thông tin tìm kiếm -->
<div class="jumbotron">
    <div class="container" style="margin-top: 20px;">
        <!-- Căn giữa  -->
        <!-- lựa chọn tìm kiếm, theo tên hoặc CCCD -->
        <div class="row justify-content-center">

            <div class="col">
                <h4>Lựa chọn tìm kiếm dưới đây</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="cccdRadioCheck" checked>
                    <label class="form-check-label" for="cccdRadioCheck">
                        Tìm kiếm theo CCCD
                    </label>
                </div> <!-- Nhập thông tin tìm kiếm  -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="fullnameRadioCheck">
                    <label class="form-check-label" for="fullnameRadioCheck">
                        Họ và tên
                    </label>
                </div>
            </div>
            <div class="col">
                <!-- Nhập thông tin tìm kiếm  -->
                <form class="row g-3 needs-validation" action="/search" method="post">
                    <!-- @method('searchForCCCD') -->
                    @csrf
                    <div class="col-md-6">
                        <label for="validationFullname" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" id="validationFullname" placeholder="Nhập họ và tên vào đây!" name="fullname" value="{{$fullname}}" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCCCD" class="form-label">Số CCCD/ĐDCN</label>
                        <input type="text" class="form-control" name="cccd" id="validationCCCD" placeholder="Nhập số CCCD vào đây!" value="{{$cccd}}">
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    </div>
                </form>
                <br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Thông tin mũi 1
                        </label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Thông tin mũi 2
                        </label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Thông tin mũi 3
                        </label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Thông tin mũi 4
                        </label>
                    </div>
                </div>
            </div>
        </div>

        @if(!is_null($message))
        <div class="message alert alert-danger">
            {{$message}}
        </div>
        @endif
        @if(!is_null($flagCheck))
        <div class="row align-items-start">
            <table class="table table-dark table-hover tablecustom">
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Số CCCD/ĐDCN</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Mã số BHXH</th>
                    <th>Số thẻ BHYT</th>
                    <th>Tên vaccine</th>
                    <th>Ngày tiêm</th>
                    <th>Lô vaccine</th>
                    <th>Cơ sở tiêm</th>

                </tr>
                <tbody>
                    @foreach ($person as $persons)
                    <tr onclick=editInfor()>
                        <input type="hidden" name="" id="cccd" value="{{$persons->cccd}}">
                        <td>{{$persons->id }}</td>
                        <td>{{$persons->fullname }}</td>
                        <td>{{$persons->cccd }}</td>
                        <td>{{$persons->birthday }}</td>
                        <td>{{$persons->sexual }}</td>
                        <td>{{$persons->phone }}</td>
                        <td>{{$persons->masobhxh }}</td>
                        <td>{{$persons->sothebhyt }}</td>
                        <td>{{$persons->tenvaccine1 }}</td>
                        <td>{{$persons->ngaytiem1 }}</td>
                        <td>{{$persons->lovaccine1 }}</td>
                        <td>{{$persons->cosotiem }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            @if($flagPaging)
            {{ $person->links('vendor.pagination.bootstrap-4') }}
            @endif
        </div>
        @endif
    </div>

</div>
@endsection