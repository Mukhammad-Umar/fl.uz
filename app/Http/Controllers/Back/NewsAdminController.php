<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ {
    Model\News,
    Repositories\AdminRepository
};

class NewsAdminController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     protected $repository;

     /**
      * Create a new controller instance.
      *
      * @return void
      */
      public function __construct(AdminRepository $repository)
      {
          $this->repository = $repository;
      }
     
    /**
     * News page.
     *
     * @return void
     */
     public function news(Request $request)
      {
         $news = News::all();

        // Ajax response
         if ($request->ajax()) {
            return response()->json([
               'table' => view("back.brick-standard", compact('news'))->render(),
            ]);
         }

         return view('back.table', compact('news'));
      }
      
     /**
      * Create a new controller instance.
      *
      * @return void
      */
      public function create()
      {
       return view('back.store-update.create');
      }

     /**
      * Create new news instance.
      *
      * @return void
      */
      public function store(Request $request)
      {
         $this->repository->storeNews($request);

         return redirect(route('news.create'))->with('news-ok', 'Yangi yangilik omadli tarzda yaratilindi!');
      }
      
     /**
    * Show the form for editing the specified resource.
    *
    * @param  ...
    * @return \Illuminate\Http\Response
     */
     public function edit(News $news) //!!!$product - RESTful-Controllers
     {
         return view('back.store-update.edit', compact('news')); //!!!$news - RESTful-Controllers
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request $request
     * @param  \App\Models\News $news
     */
     public function update(Request $request, News $news) //!!!$news - RESTful-Controllers
     {
       $this->repository->updateNews($request, $news); //!!!$news - RESTful-Controllers

       return redirect(route('admin-news'))->with('news-updated', 'The News has been successfully updated...');
     }
      
     /**
      * Delete a news.
      *
      * @return void
      */
     public function deleteone(Request $request)
     {
         News::find($request->id)->delete();
     }

}
