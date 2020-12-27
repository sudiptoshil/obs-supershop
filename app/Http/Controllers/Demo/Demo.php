<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\models\Common;
//use App\models\Password;
//use App\models\user_management_model;
//use App\models\Menus;
//use App\models\UserAccess;

class Demo extends Controller
{
    public function index()
    {
        return view('demo.index');
    }
    public function demoBlankPage()
    {
        return view('demo.blank-page');
    }
    public function demoFormBasicInputs()
    {
        return view('demo.form-basic-inputs');
    }
    public function demoFormHorizontalInputs()
    {
        return view('demo.form-horizontal');
    }
    public function demoFormInputGroups()
    {
        return view('demo.form-input-groups');
    }
    public function demoFormVertical()
    {
        return view('demo.form-vertical');
    }
    public function demoTableBasic()
    {
        return view('demo.tables-basic');
    }
    public function demoTableDatatables()
    {
        return view('demo.tables-datatables');
    }
    public function demoTabs()
    {
        return view('demo.tabs');
    }
    public function demoUikit()
    {
        return view('demo.uikit');
    }
    public function demoLogin()
    {
        return view('demo.login');
    }
    public function demoForgotPassword()
    {
        return view('demo.forgot-password');
    }


    public static function passwordChange(Request $request){
        $admin = Common::getUserSessionId(2);
        $data["storeList"]=Common::getStoreList();
        $data["wareList"]=Common::getWareListForAdmin();
        return view('admin.users.password_change',$data);
    }

}
