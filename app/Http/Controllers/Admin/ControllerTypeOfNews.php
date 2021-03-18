<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\TypeOfNews;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Support\Facades\Log;

class ControllerTypeOfNews extends Controller
{
   private $category;
   private $type_of_news;  
    public function __construct(Category $category,TypeOfNews $type_of_news)
    {
        $this->category = $category;
        $this->type_of_news = $type_of_news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_of_news = $this->type_of_news->paginate(10);
        return view('admin.modules.type-of-news.index',compact('type_of_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = $this->category->all();
        return view('admin.modules.type-of-news.create',compact('categorys'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $count = count($this->type_of_news->all());
            $data = array(
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'ordinal_number' => ++$count,
                'id_cat' => $request->id_cat,
                'created_at' => new DateTime()
            );
            $this->type_of_news->insert($data);
            return back()->with('message','Insertd SuccessFully');
        } catch (\Exception $e) {
            Log::error('Message:'.$e->getMessage().'  Line : ' . $e->getLine());
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
    public function edit($id)
    {
        $type_of_news = $this->type_of_news->find($id);
        $categorys = $this->category->all();

        return view('admin.modules.type-of-news.edit',compact('type_of_news','categorys'));
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
        try {
            $data = array(
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'id_cat' => $request->id_cat,
                'created_at' => new DateTime()
            );
            $this->type_of_news->find($id)->update($data);
            return back()->with('message','Updated SuccessFully');
        } catch (\Exception $e) {
            Log::error('Message:'.$e->getMessage().'  Line : ' . $e->getLine());
        }
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
            $this->type_of_news->find($id)->delete();
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
}
