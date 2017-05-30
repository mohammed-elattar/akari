<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bu;
class BuController extends Controller
{
    public function index(){        
        return view('admin.bu.index');
    }
    
    public function create(){        
        return view('admin.bu.add');
    }
    
    public function store(){        
        return view('admin.bu.index');
    }
    
    public function anydata(Bu $bu) {
        $bus = $bu->all();
        return Datatables::of($bus)
                        ->editColumn('bu_name', function($model) {
                            return Html::link('adminpanel/bu/' . $model->id . '/edit', $model->name);
                        })
                        
                        ->editColumn('bu_type', function($model) {
                            $type = bu_type();
                            return  "<span class='badge badge-info'>".$type[$model->bu_type]."</span>" ;
                        })
                        ->editColumn('bu_status', function($model) {
                            return $model->bu_status == 0 ? "<span class='badge badge-info'>غير مفعل</span>" : "<span class='badge badge-info'>مفعل</span>";
                        })
                        ->editColumn('control', function($model) {
                            $all = "<a href='/adminpanel/bu/" . $model->id . "/edit' class='btn btn-info btn-circle'><i class='fa fa-edit'></i></a>";
                            $all.= "<a href='/adminpanel/bu/" . $model->id . "/delete' class='btn btn-danger btn-circle'><i class='fa fa-trash'></i></a>";
                            return $all;
                        })->make(true);
    }

}
