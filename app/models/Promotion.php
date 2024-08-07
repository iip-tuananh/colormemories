<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = "promotion";
    public function savePromotion($request)
    {
    	$id = $request->id;
        if($id != ""){
            $query = Promotion::where([
                'id' => $id
             ])->first();
            if ($query) {
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->description = $request->description;
                $query->link = $request->link;
                $query->image = json_encode($request->image);
                $query->banggia = json_encode($request->banggia);
                $query->status = $request->status;
                $query->content = $request->content;
                $query->save();
            }else{
                $query = new Promotion();
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->description = $request->description;
                $query->link = $request->link;
                $query->image = json_encode($request->image);
                $query->banggia = json_encode($request->banggia);
                $query->status = $request->status;
                $query->content = $request->content;
                $query->save();
            }
            
        }else{
                $query = new Promotion();
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->description = $request->description;
                $query->link = $request->link;
                $query->image = json_encode($request->image);
                $query->banggia = json_encode($request->banggia);
                $query->status = $request->status;
                $query->content = $request->content;
                $query->save();
            
        }
        return $query;
    }
}
