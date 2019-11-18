<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function siteconfig(){
        $res_config = DB::table("config")->where('name','=','siteconfig')->first();
        $config=[];
        if($res_config){
            $config= json_decode($res_config->config, true);
        }
        return view('admin.config.siteconfig')->with('config', $config);
    }

    public function store(Request $request)
    {
        $data = $request->only('name','title');
        $config = json_encode($request->except('name','title','_token'));
        $data['config'] =$config;
        $data['created_at']=date("Y/m/d H:i:s", time());
        $data['updated_at']=date("Y/m/d H:i:s", time());
        $config = DB::table("config")->where('name', '=', $request->name)->first();
        if($config){
            $result = DB::table('config')->where('name', '=', $request->name)->update($data);
        }else{
            $result = DB::table('config')->insert($data);
        }
        if($result===true || $result>0){
            return redirect(route("admin.config.siteconfig"));
        }
    }
}
