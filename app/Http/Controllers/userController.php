<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class userController extends Controller
{
    public function index(){
        
        // $user = new User();
        // $user -> name = "Sarker";
        // $user -> email = "Sukarnaa@gmail.com";
        // $user -> password = bcrypt("Sukarna") ;
        // $user -> save() ;

        //update
        //User::where('id', 3) -> update(['name' => 'Sarker']);

        // find a single user
         $user = User::where('name','Sarker')-> get();
  
        // find a single user only based on primary key
        //$user = User::find(1);

        //dd($user);
        // $partha = User::find('id', 3);
        // $user = User::all();

        // DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', [1, 'Partha','partha@gmail.com' , "partha"]);

        // Delete a user
        //User::where('id', 3) -> delete();

        // $user = DB::select('select * from users' );
      
        return $user;

    }
}
