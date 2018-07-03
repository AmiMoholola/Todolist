<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
	Auth,
	Hash,
	Log;
	
	use Illuminate\Support\Facades\DB;
	

class ApiController extends Controller {
	
	public function Get_list() {
		$list = DB::table('list_items')->select('id','item_name', 'checked')
					    ->where('checked',0)
					     ->orderBy('created_at','desc')
					    ->get();
				if (!$list->isEmpty())
			{	      
					    return collect([
							    'Lists' => $list
							  ]);	    
			}
			else
			{
				return[];
			}
	}
	
	
	public function Add_list(Request $request) {
		
		try{
			
		$item = DB::table('list_items')->insert(['item_name' => $request->get('item')]);
		return response()->json($item);
		}
		catch (\Exception $e) {
		return $e->getMessage();
		}
	}
	
	
	public function Update_list(Request $request) {
		
		try{
		 $List_ids = json_decode($request->get('items_id'));
		 $update_item = DB::table('list_items')->whereIn('id', $List_ids)->update(['checked' => 1,'updated_at'=>date('Y-m-d H:i:s')]);
		 return response()->json($update_item);
		}
		 catch (\Exception $e) {
		 return $e->getMessage();
		}
	}
}
