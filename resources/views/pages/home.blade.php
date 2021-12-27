@extends('layout.layout')
@section('content')
<!-- Vùng nhập thông tin tìm kiếm -->
<div class="container">
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
            @if(!is_null($message))
            <div class="message alert alert-danger">
                {{$message}}
            </div>
            @endif
        </div>
        @if(!is_null($flagCheck))
        <div class="row align-items-start">
            <table class="table table-dark table-hover tablecustom">

                <tr>
                    <th rowspan="2">STT</th>
                    <th rowspan="2">Họ và tên</th>
                    <th rowspan="2">Số CCCD/ĐDCN</th>
                    <th rowspan="2">Ngày sinh</th>
                    <th rowspan="2">Giới tính</th>
                    <th rowspan="2">Số điện thoại</th>
                    <th colspan="4">
                        Thông tin tiêm chủng lần 1
                    </th>
                    <th colspan="4">
                        Thông tin tiêm chủng lần 2
                    </th>
                    <th rowspan="2">Mã số BHXH</th>
                    <th rowspan="2">Số thẻ BHYT</th>



                </tr>

                <tr>
                    <th>Tên vaccine</th>
                    <th>Ngày tiêm</th>
                    <th>Lô vaccine</th>
                    <th>Cơ sở tiêm</th>
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
                            <td>{{$persons->tenvaccine1 }}</td>
                            <td>{{$persons->ngaytiem }}</td>
                            <td>{{$persons->lovaccine1 }}</td>
                            <td>{{$persons->cosotiem }}</td>
                            <td>{{$persons->tenvaccine2 }}</td>
                            <td>{{$persons->ngaytiem2 }}</td>
                            <td>{{$persons->lovaccine2 }}</td>
                            <td>{{$persons->cosotiem2 }}</td>
                            <td>{{$persons->masobhxh }}</td>
                            <td>{{$persons->sothebhyt }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                @if($person->count() >= 15)
                {{ $person->links('vendor.pagination.bootstrap-4') }}
                @endif
            </div>
           
        </div>


        @endif

    </div>
</div>

@endsection