<?php
if(!function_exists('test')){
    function test(){
        return 'Ok';
    }
}

if(!function_exists('flash')){
    function flash($message){
        return $message;
    }
}

if(!function_exists('getParentCategoryInOption')){
    function getParentCategoryInOption(){
        $category = \App\Models\Category::where('parent_id',NULL)->get();
        $option = '<option value="">Please Select</option>';
        foreach ($category as $item) {
            $option .= '<option value="'.$item->id.'">'.$item->name.'</option>';
        }
        return $option;
    }
}

if(!function_exists('get_data_by_id')){
    function get_data_by_id($value,$table,$wherId,$id){
        $query = DB::table($table)->where($wherId,$id)->first();
        if (!empty($query)){
            $data = $query->$value;
        }else{
            $data = '';
        }
        return $data;
    }
}

if(!function_exists('statusInOption')){
    function statusInOption($sel){

        $status = [
            '1' => 'Active',
            '0' => 'Inactive',
        ];

        $opt = '<option value="">Please select</option>';
        foreach ($status as $key => $val) {
            $selec = ($key == $sel)?'selected':'';
            $opt .= '<option value="'.$key.'" '.$selec.'>'.$val.'</option>';
        }

        return $opt;
    }
}

if(!function_exists('file_assets')){
    function file_assets($id){

        $status = [
            '1' => 'Active',
            '0' => 'Inactive',
        ];

        $opt = '<option value="">Please select</option>';
        foreach ($status as $key => $val) {
            $selec = ($key == $sel)?'selected':'';
            $opt .= '<option value="'.$key.'" '.$selec.'>'.$val.'</option>';
        }

        return $opt;
    }
}

if(!function_exists('gallery_image')){
    function gallery_image(){

        $data = DB::table('galleries')->get();

        $view = '';
        foreach ($data as $key => $val) {
            $view .='<div class="col-3 p-3" >
                        <div class="img-gl" >
                            <img src="'.asset($val->path.''.$val->image).'" class="gal-img" >
                        </div>
                    </div>';
        }

        return $data;
    }
}



