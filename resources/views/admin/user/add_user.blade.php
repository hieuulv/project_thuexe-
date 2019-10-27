@extends('admin.layouts.app_dashboard')
@section('title', 'Thêm mới tài khoản')

@section('content')

    <div class="content">

        <div class="container-fluid" id="v_user">
            <form action="{{ route('user_create') }}" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-success">
                                <div class="card-icon">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <h4 class="card-title"> Thêm mới tài khoản </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Họ và tên <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                            @if($errors->first('name'))
                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Email <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                            @if($errors->first('email'))
                                                <span class="text-danger">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Số CMND <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="identity_card" value="{{ old('identity_card') }}">
                                            @if($errors->first('identity_card'))
                                                <span class="text-danger">{{$errors->first('identity_card')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Số điện thoại <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                            @if($errors->first('phone'))
                                                <span class="text-danger">{{$errors->first('phone')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Địa chỉ <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                            @if($errors->first('address'))
                                                <span class="text-danger">{{$errors->first('address')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Mật khẩu <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-group bmd-form-group">
                                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                                            @if($errors->first('password'))
                                                <span class="text-danger">{{$errors->first('password')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Xác nhận mật khẩu <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-group bmd-form-group">
                                            <input type="password" class="form-control" name="password_confirmation">
                                            @if($errors->first('password_confirmation'))
                                                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label lg_em_pa">
                                        Quyền user <strong style="color: red">*</strong>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="form-check-inline col-form-label">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="role" value="4">
                                                Chưa xác định
                                            </label>
                                        </div>

                                        <div class="form-check-inline col-form-label">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="role" value="2">
                                                Admin
                                            </label>
                                        </div>

                                        <div class="form-check-inline col-form-label">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="role" value="3">
                                                Đăng bài viết
                                            </label>
                                        </div>
                                        @if($errors->first('status'))
                                            <br><span class="text-danger">{{$errors->first('status')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success pull-right">Thêm Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 140px">
                        <div class="card card-profile">
                            <div class="fileinput fileinput-new text-center fileinput_user" data-provides="fileinput"
                                 style="margin-top: 20px;">
                                <h5 style="font-weight: bold"> IMAGE PROFILE </h5>
                                <div class="fileinput-new thumbnail">
                                    <img src="/image_upload/user/{{ Auth::user()->image }}" width="250px"
                                         height="145px">
                                </div>
                                @if($errors->first('image'))
                                    <div class="text-danger col-md-12">{{$errors->first('image')}}</div>
                                @endif
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                          <span class="btn btn-success btn-sm btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="hidden"><input type="file" name="image" value="{{ old('image') }}">
                          <div class="ripple-container"></div></span>
                                    <a href="#pablo" class="btn btn-danger btn-sm btn-round fileinput-exists"
                                       data-dismiss="fileinput">
                                        <i class="fa fa-times"></i> Remove
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
