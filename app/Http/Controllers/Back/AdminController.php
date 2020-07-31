<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AdminRepository;
use App\Model\ {
   Gallery,
   Contact,
   User
};

class AdminController extends Controller
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
     * Admin main page.
     *
     * @return void
     */
     public function index()
      {
        return view('back.index');
      }
         
         /**
     * Admin main page.
     *
     * @return void
     */
     public function gallery()
      {
         $galleries = Gallery::all();

         return view('back.table', compact('galleries'));
      }

    /**
     * Admin main page.
     *
     * @return void
     */
     public function contact()
      {
         $contacts = Contact::all();

         return view('back.table', compact('contacts'));
      }

    /**
     * Admin main page.
     *
     * @return void
     */
     public function user(){
         $users = User::all();

         return view('back.table', compact('users'));
     }
     
}
