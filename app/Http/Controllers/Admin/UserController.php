<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAdminRequest;
use App\Model\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{
    protected $UserRepository;

    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function index()
    {
        return view('admin.user.user_list');
    }

    public function index_admin()
    {
        return view('admin.user.user_admin_list');
    }

    public function index_censor()
    {
        return view('admin.user.user_censor_list');
    }

    public function AllDatatable(){
        return $this->UserRepository->AllDatatable();
    }

    public function AllDatatableAdmin()
    {
        return Datatables::of(User::where('role', 9))
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

    public function AllDatatableCensor()
    {
        return Datatables::of(User::where('role', 8))
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

    public function create()
    {
        return view('admin.user.add_user');
    }

    public function store(UserAdminRequest $request)
    {
        return $this->UserRepository->store($request);
    }

    public function edit($id)
    {
        return $this->UserRepository->edit($id);
    }

    public function update(UserAdminRequest $request, $id)
    {
        return $this->UserRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->UserRepository->destroy($id);
    }
}
