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
    function getParentCategoryInOption($sel=0){

        $category = \App\Models\Category::where('parent_id',NULL)->get();
        $option = '<option value="">Please Select</option>';
        foreach ($category as $item) {
            $s = ($item->id == $sel)?'selected':'';
            $option .= '<option value="'.$item->id.'" '.$s.'>'.$item->name.'</option>';
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

if(!function_exists('id_by_image')){
    function id_by_image($id){
        $view = asset('assets/uploads/no-image.jpg');
        if (!empty($id)) {
            $data = DB::table('galleries')->where('id', $id)->first();
            $view = asset($data->path . '' . $data->image);
        }

        return $view;
    }
}

if(!function_exists('date_view')){
    function date_view($date){
        $time = strtotime($date);
        $date = date('M-d-Y',$time);
        return $date;
    }
}

if(!function_exists('home_logo')){
    function home_logo(){
        $page = DB::table('pages')->where('slug', 'home')->first();
        $date = id_by_image($page->logo);
        return $date;
    }
}

if(!function_exists('page_data')){
    function page_data($slug){
        $page = DB::table('pages')->where('slug', $slug)->first();
        return $page;
    }
}

if(!function_exists('main_menu')){
    function main_menu(){
        $menu = DB::table('menues')->get();
        $view = '';
        foreach ($menu as $key => $val) {
            $url = (!empty($val->url))?$val->url:url('');
            $icon = (!empty($val->icon))?$val->icon:'';
            $act = ($key == 0)?'active':'';
            $view .= '<li class="nav-item '.$act.'"><a class="nav-link" href="'.$url.'">'.$icon.' '.$val->menu.'</a></li>';
        }

        return $view;
    }
}

if(!function_exists('get_posts_by_categoryId')){
    function get_posts_by_categoryId($id){
        $posts = DB::table('blogs')->where('category_id', $id)->get();
        return $posts;
    }
}

if(!function_exists('get_posts')){
    function get_posts(){
        $posts = DB::table('blogs')->get();
        return $posts;
    }
}

if(!function_exists('main_category')){
    function main_category(){
        $category = DB::table('categories')->where('parent_id',NULL)->get();
        return $category;
    }
}

if(!function_exists('sub_category_by_id')){
    function sub_category_by_id($id){
        $category = DB::table('categories')->where('parent_id',$id)->get();
        return $category;
    }
}





