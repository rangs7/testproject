<?php

namespace App\Http\Controllers\registration;
use App\Http\Controllers\Controller;
use App\Models\registration\RoleModel;
use App\Models\registration\UserModel;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(){
        //dd('Reached in register method');
        $registration_txt="Welcome to registration page";
        $role_data=RoleModel::where('status','Active')->get();
        return view('register')->with(compact('registration_txt','role_data'));
    }
    public function create_role(Request $request){
        $user_data=[
            'name' => $request->role_name,
            'status' => $request->status,
            'created_by' => 1,
            'created_at' => date('Y-m-d h:i:s'),
        ];
        //dd($user_data)
        UserModel::create($user_data);
        return redirect()->away('/get_role_list/ALL/NA/All');

    }
    public function register_new_user(Request $request){
        $user_data=[
            'fullname' => $request->full_name,
            'contact_no' => $request->contact_no,
            'email' => $request->username,
            'password' => $request->password,
            'role_id' => $request->role_id,
            'created_by' => 1,
            'created_at' => date('Y-m-d h:i:s'),
        ];
        //dd($user_data)
        UserModel::create($user_data);
        return redirect()->away('/get_role_list/ALL/NA/All');

    }
    public function get_role_list($param_type,$id,$status){
        if($param_type=="ALL"){
            $response_data=RoleModel::get();
            //select * from t_role_master;
        }
        if($param_type=="BYID"){
            $response_data=RoleModel::where('id',$id)->get();
            //select * from t_role_master where id='?';
        }
        if($param_type=="status"){
            $response_data=RoleModel::where('status',$status)->get();
            //select * from t_role_master where status='Active';
        }

       
        //select * from t_role_master;
        return view('registration/list_roles')->with(compact('response_data'));
    }

    public function edit_role($id){
        $data=RoleModel::where('id',$id)->first();
        return view('edit_role')->with(compact('data'));
    }
    public function delete_role($id){
        RoleModel::where('id',$id)->delete();
        return redirect()->away('/get_role_list/ALL/NA/All');
    }

    public function update_role(Request $request){
        $role_data=[
            'name' => $request->role_name,
            'status' => $request->status,
            'updated_by' => 1,
            'updated_at' => date('Y-m-d h:i:s'),
        ];
        RoleModel::where('id',$request->record_id)
        ->update($role_data);
        return redirect()->away('/get_role_list/ALL/NA/All');
    }
}