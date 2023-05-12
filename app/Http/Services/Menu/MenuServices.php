<?php
use App\Http\services\Menu;
use Illuminate\Support\Str;

class MenuServices
{
    public function create ($request)
{
    try {
        Menu::create([
            'title'=> (string) $request->input('name'),
            'parent_id'=> (int) $request->input('parent_id'),
            'description'=> (string) $request->input('description'),
            'content'=> (string) $request->input('content'),
            'slug'=> Str::slug($request -> input ('name'),),
            'active'=> (string) $request->input('content'),
        ]);
        Session::flash('success','Tạo thành công');
    } catch (\Exception $err) {
        Session::flash('error',$err->getMessage());
        return false;


    }
    return true;
}
}