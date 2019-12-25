<?php

namespace App\Repositories;

use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Facades\DataTables;

class UserRepository implements VehicelRepositoryInterface
{

    public function AllDatatable()
    {
        return Datatables::of(User::where('role', '!=' , 10))
            ->addColumn('action', function ($user) {
                return '<a href="' . route('user_edit', $user->id) . '" class="btn btn-link btn-info btn-just-icon edit">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                        </a>

                        <a class="btn btn-link btn-danger btn-just-icon remove" data-toggle="modal" data-target="#exampleModal">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                        </a>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLabel">Xóa tài khoản</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body text-center" style="color: red; font-weight: bolder">
                                    Bạn có chắc chắn muốn xóa tài khoản này không?
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                    <a href="' . route('user_remove', $user->id) . '" class="btn btn-danger">Xóa</a>
                              </div>
                            </div>
                          </div>
                        </div>';
            })->rawColumns(['action'])
            ->make(true);
    }

    public function store($request)
    {
        $user = New User();

        if ($request->hasFile('image')) {
            $images_File = $request->file('image');
            $FileName = 'image_user' . '_' . time() . '.' . $images_File->extension();
            $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
            $image_resize->save('image_upload/user/' . $FileName);
            $user->image = $FileName;
        } else {
            $user->image = "default_avata.png";
        }
        $user->fill($request->all());
        $user->password = Hash::make($request['password']);

        if ($user->save()) {
            $mess_add = "Thêm mới tài khoản thành công.";
        }

        return redirect()->route('user_list', compact('user'))->with('mess_add', $mess_add);
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (empty($user)) {
            return view('admin.user.user_list');
        }

        return view('admin.user.edit_user', compact('user'));
    }

    public function update($request, $id)
    {
        $user = User::find($id);

        if (empty($user)) {
            return view('admin.user.edit_user');
        } else {
            if ($request->hasFile('image')) {
                $images_File = $request->file('image');
                $FileName = 'image_user' . '_' . time() . '.' . $images_File->extension();
                $image_resize = Image::make($images_File->getRealPath())->resize(300, 300);
                $image_resize->save('image_upload/user/' . $FileName);
                $user->image = $FileName;
            }
            $user->fill($request->all());
            $mess_update = "";
            if ($user->save()) {
                $mess_update = "Sửa danh mục thành công";
            }
        }

        return redirect()->route('user_list', compact('user'))->with('mess_update', $mess_update);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $remove_user = User::destroy($id);
        } else {
            return view('admin.user.user_list');
        }

        return redirect()->route('user_list', compact('user'));
    }
}
