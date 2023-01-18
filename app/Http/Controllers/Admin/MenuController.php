<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\MenuStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
 

        return view('admin.menus.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
        
        $newImageName = time().'-'.$request->title .'.'.$request->image->extension(); 

        $request->image->move(public_path('menus'), $newImageName);

        $menu = Menu::create([
            'name' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            "image" => $newImageName 
        ]);
      
        if($request->has('categories')){
            $menu->categories()->attach($request->categories);
        
        return to_route('admin.menus.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $categories = Category::all();
 
        return view('admin.menus.edit',compact('menu','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name'=>'',
            'description'  => '',
            "price" =>''
          ]);
          $image = $menu->image;
    
          if($request->hasFile('image')){
    
       
            File::delete('menus/'.$menu->image);
             
    
            $image = time().'-'.$request->title .'.'.$request->image->extension(); 
    
            $request->image->move(public_path('menus'), $image);

          
          }
    
          $menu->update([
            'name'=> $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image
          ]);

          if($request->has('categories')){
            $menu->categories()->sync($request->categories);
          }
          return to_route('admin.menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
