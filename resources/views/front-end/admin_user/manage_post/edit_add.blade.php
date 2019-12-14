@extends('front-end.admin_user.layout_user.main')
@section('content')
    <style>.default-image img {
            height: 100%;
            width: 100%;
        }

        .default-image {
            width: 100%;
            height: 262px;
        }</style>
    <script src="{{ asset('editor/ckeditor/ckeditor.js') }}"></script>
    <div class="content" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Thêm mới xe </h4>
                    </div>
                    <div class="card-body col-lg-12">
                        <div class="">
                            <form action="{{ route('create-vehicles') }}" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="status" value="1">
                                <div class="row" style="padding-bottom: 20px;">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tên Xe </label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                                   placeholder="">
                                            @if($errors->first('name'))
                                                <br><span class="text-danger">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                            <label for="">Giá cho thuê</label>
                                            <input type="number" name="price" class="form-control" value="{{ old('price') }}"
                                                   placeholder="">
                                            @if($errors->first('price'))
                                                <br><span class="text-danger">{{$errors->first('price')}}</span>
                                            @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Danh mục</label>
                                                <select class="form-control" name="cate_id" value="{{ old('cate_id') }}">
                                                    @foreach($category as $key => $cate)
                                                        <option name=""
                                                                value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('cate_id'))
                                                    <br><span class="text-danger">{{$errors->first('cate_id')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Số chỗ</label>
                                                <input type="number" name="seat" class="form-control" value="{{ old('seat') }}"
                                                       placeholder="" value="">
                                                @if($errors->first('seat'))
                                                    <br><span class="text-danger">{{$errors->first('seat')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Hãng xe </label>
                                                <select name="model_id" class="form-control " style="margin-bottom: 10px" value="{{ old('model_id') }}">
                                                    <option  value="0" selected disabled>--Chọn hãng xe --</option>
                                                    @foreach($model_car as $model_id)
                                                        <option value="{{ $model_id->id }}">{{ $model_id->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('model_id'))
                                                    <br><span class="text-danger">{{$errors->first('model_id')}}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Thành phố</label>
                                                <select class="form-control" id="select_city" name="city_id" value="{{ old('city_id') }}">
                                                    <option value="">--Chon thanh pho--</option>
                                                    @foreach($citys as $key => $id)
                                                        <option id="" value="{{ $id->id }}">{{ $id->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('city_id'))
                                                    <br><span class="text-danger">{{$errors->first('city_id')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Quận huyện</label>
                                                <select class="form-control" id="select_district" name="district_id" value="{{ old('district_id') }}">
                                                    <option value="">--chọn quận huyện --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa chỉ chi tiết</label>
                                            <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                                                   placeholder="">
                                            @if($errors->first('address'))
                                                <br><span class="text-danger">{{$errors->first('address')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Ảnh đại diện</label>
                                            <div class="default-image">
                                                <img id="blah" src="{{ asset('image_upload/default-car.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <input type="file" name="image" class="" id="imgInp">
                                        </div>
                                        @if($errors->first('image'))
                                            <br><span class="text-danger">{{$errors->first('image')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <textarea name="description" id="editor1" style="margin-top: 5px">{{ old('description') }}</textarea>
                                <script>CKEDITOR.replace('editor1');</script>
                                @if($errors->first('description'))
                                    <br><span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                                <!-- check -->
                                <div>
                                    <button type="submit" class="btn btn-info">Them Moi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col 12 -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#select_city").change(function () {
                var city_id = $(this).val();
                console.log(city_id);
                if (city_id) {
                    $.ajax({
                        type: "get",
                        url: 'states/' + city_id,
                        dataType: "json",
                        success: function (res) {
                            if (res) {
                                $('#select_district').empty();
                                $.each(res, function (key, value) {
                                    $("#select_district").append('<option value="' + key + '">' + value + '</option>');
                                });
                            }
                        }
                    });
                }
            });
        });

        function preView(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            preView(this);
        });

    </script>
@endsection
