<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB,DateTime;
use Illuminate\Support\Facades\Log;
class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categorys =  $this->category->all();
        return view('admin.modules.category.index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count =count($this->category->all());
                $data = array(
                    'name' => $request->name,
                    'slug' => Str::slug($request->name),
                    'ordinal_number' => ++$count,  
                    'created_at' =>  new DateTime()             
                    );
                $this->category->insert($data);
           
        return back()->with('message','Insert SuccessFully');
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
    public function edit($id)
    {
       $category = $this->category->find($id);
        return view('admin.modules.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->name,
            'slug' => Str::slug($request->name),  
            'updated_at' =>  new DateTime()             
            );
            $this->category->find($id)->update($data);
   
        return back()->with('message','Updated SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->category->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message'=>'success'
            ]);
        } catch (\Exception $e) {
            Log::error('Message:'.$e->getMessage().'  Line : ' . $e->getLine());

            return response()->json([
                'code' => 500,
                'message'=>'fail'
            ]);
        }
    }

    public function Active(Request $request) {
        $id = $request->id;
        $this->category->where('id',$id)->update(['active'=>1]);
    }

    public function Untive(Request $request) {
        $id = $request->id;
        $this->category->where('id',$id)->update(['active'=>0]);
    }
}
