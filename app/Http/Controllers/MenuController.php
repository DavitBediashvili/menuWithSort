<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    public function main(Request $request){
        $send = [];
        $part = menu::select('type')->distinct()->get();
        foreach($part as $each){
            $info = menu::where('type', '=', $each->type)-> limit(5)-> orderby('order')->get();
            array_push($send, $info);
        }

        if ($request->input('go') != ""){
            $type_name = $request->input('go');
            $type_list = menu::where('type', '=', $type_name)-> orderby('order')-> get();
            return view('all', ['full_list' => $type_list]);
        }

        if ($request->input('admin') != ""){
            redirect('/admin');
        }

        return view('main', ['send' => $send]);
    }

    public function admin(){
        $full_table = menu::select('id', 'name', 'order', 'type')-> get();
        
        return view('admin', ['table' => $full_table]);
    }
    
    public function change(Request $request){

        if ($request->input('delete') != ''){
            $id = $request->input('delete');
            menu::where('id', '=', $id)->delete();
        }

        if ($request->input('nameB') != ''){
            $id = $request->input('nameB');
            $change = $request->input('name');
            menu::where('id', '=', $id)->update(['name' => $change]);
        }

        if ($request->input('orderB') != ''){
            $id = $request->input('orderB');
            $change = $request->input('order');
            menu::where('id', '=', $id)->update(['order' => $change]);
        }

        if ($request->input('typeB') != ''){
            $id = $request->input('typeB');
            $change = $request->input('type');
            menu::where('id', '=', $id)->update(['type' => $change]);
        }

        if ($request->input('Change') != ''){
            menu::create([
                "name"=> $request->input('nameChange'),
                "type"=> $request->input('typeChange'),
                "order"=> $request->input('orderChange')
            ]);
        }

        return $this->admin();
    }
}
