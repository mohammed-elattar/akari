<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\BuRequest;
use App\Bu;
use Illuminate\Support\Facades\Redirect;
use Datatables;
use Html;
use Auth;

class BuController extends Controller
{
    public function index()
    {
        return view('admin.bu.index');
    }

    public function create()
    {
        return view('admin.bu.add');
    }

    public function store(Bu $bu , BuRequest $request)
    {
        $user = Auth::user();
        $data = [
            'bu_name' => $request->bu_name,
            'bu_price' => $request->bu_price,
            'bu_rent' => $request->bu_rent,
            'bu_square' => $request->bu_square,
            'bu_type' => $request->bu_type,
            'bu_small_disc' => $request->bu_small_disc,
            'bu_meta'=> $request->bu_meta,
            'bu_langitude'=>$request->bu_langitude,
            'bu_latitude'=>$request->bu_latitude,
            'bu_large_disc'=>$request->bu_large_disc,
            'bu_status'=>$request->bu_status,
            'user_id'=>$user->id
        ];
        $bu->create($data);
        return redirect('/adminpanel/bu')->withFlashMessage('تمت اضافة العقار بنجاح');
    }

    public function anydata(Bu $bu)
    {
        $bus = $bu->all();
        return Datatables::of($bus)
            ->editColumn('bu_name', function ($model) {
                return Html::link('adminpanel/bu/' . $model->id . '/edit', $model->bu_name);
            })
            ->editColumn('bu_type', function ($model) {
                $type = bu_type();
                return "<span class='badge badge-info'>" . $type[$model->bu_type] . "</span>";
            })
            ->editColumn('bu_status', function ($model) {
                return $model->bu_status == 0 ? "<span class='badge badge-info'>غير مفعل</span>" : "<span class='badge badge-info'>مفعل</span>";
            })
            ->editColumn('control', function ($model) {
                $all = "<a href='/adminpanel/bu/" . $model->id . "/edit' class='btn btn-info btn-circle'><i class='fa fa-edit'></i></a>";
                $all .= "<a href='/adminpanel/bu/" . $model->id . "/delete' class='btn btn-danger btn-circle'><i class='fa fa-trash'></i></a>";
                return $all;
            })->make(true);
    }

}






