<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Model\ {
    News
};

class AdminRepository
{

    /**
     * The news_model instance.
     *
     * @var \Illuminate\Database\Eloquent\news_model
     */
    protected $news_model;


    /**
     * Create a new AdminRepository instance.
     *
     * @param  \App\news_models\News $news
     */
    public function __construct(News $news)
    {
        $this->news_model = $news;
    }
    
     /**
      * Creating new news.
      *
      * @return void
      */
      public function storeNews($request)
      {
          $this->news_model->title = $request->title;
          $this->news_model->information = $request->information;
          $this->news_model->save();
      }
      
     /**
     * Update news.
     *
     * @param  \App\Models\Product $product
     * @return void
     */
     public function updateNews($request, $news)
     {
        $news->update($request->all());
     }
}
