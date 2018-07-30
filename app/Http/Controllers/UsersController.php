<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Requests\AddUserRequestAdmin;
use Illuminate\Support\Facades\Redirect;
use Datatables;
use Html;

class UsersController extends Controller {

    public function index() {
        return view('admin.user.index');
    }

    public function create() {
        return view('admin.user.add');
    }

    public function store(AddUserRequestAdmin $request, User $user) {
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/adminpanel/users')->withFlashMessage('تمت اضافة العضو بنجاح');
    }

    public function edit($id, User $user_data) {
        $user = $user_data->find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update($id, User $user, Request $request) {
        $userupdated = $user->find($id);
        $userupdated->fill($request->all())->save();
        return redirect('/adminpanel/users')->withFlashMessage('تم تعديل العضو بنجاح');
    }

    public function destroy($id, User $user) {
        if ($id != 1) {
            $user->find($id)->delete();
            // delete all buildings under this user
            Bu::where('user_id',$id)->delete();
            return redirect('/adminpanel/users')->withFlashMessage('تم حذف العضو بنجاح');
        } else {
            return redirect('/adminpanel/users')->withFlashMessage('عفوا لا يمكن حذف هذا العضو');
        }
    }

    public function changepassword(Request $request, User $user) {
        $user_updated = $user->find($request->user_id);
        $password = bcrypt($request->password);
        $user_updated->fill(['password' => $password])->save();
        return Redirect::back()->withFlashMessage('لقد تم تغيير كلمة المرورو');
    }

    public function anydata(User $user) {
        $users = $user->all();
        return Datatables::of($users)
                        ->editColumn('name', function($model) {
                            return Html::link('adminpanel/users/' . $model->id . '/edit', $model->name);
                        })
                        ->editColumn('admin', function($model) {
                            return $model->admin == 0 ? "<span class='badge badge-info'>عضو</span>" : "<span class='badge badge-info'>مدير الموقع</span>";
                        })
                        ->editColumn('control', function($model) {
                            $all = "<a href='/adminpanel/users/" . $model->id . "/edit' class='btn btn-info btn-circle'><i class='fa fa-edit'></i></a>";
                            if ($model->id != 1) {
                                $all.= "<a href='/adminpanel/users/" . $model->id . "/delete' class='btn btn-danger btn-circle'><i class='fa fa-trash'></i></a>";
                            }
                            return $all;
                        })->make(true);
    }

}
