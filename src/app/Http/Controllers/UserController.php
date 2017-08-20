<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;
use Image;
use Auth;

use App\User;
use App\Ideas;

class UserController extends Controller
{
     public function index(Request $request)
    {
       
    
         $users = DB::table('users')->orderby('id','desc')->paginate(5);       
         return view('admin.users',['users' => $users])
         ->with('i', ($request->input('page', 1) - 1) * 5);;

           
            
        
    }



    public function show($id)
    {
        
          
        $users = User::find($id);
     //  $ideacomment = DB::table('postcomment')->get();

       return view('admin.usershow',['users' => $users]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


 
     /*
    public function edit($id)
    {
         $items = Post::find($id);
         $user = Auth::user();
         $posts = DB::table('posts')->get();
        return view('posts.edit',['post'=>$posts,'user'=>$user,'items'=>$items]);
    }

    */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     /*
    public function update(Request $request, $id)
    {
        

        //dd($request->all());
        
           $post = Post::find($id);
        

       $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->tags = $request->tags;
        $post->content = $request->content;
       // $post->slug = str_slug($request->title, '-');
           $title = $request->title;
         $post->slug =$this->slugCreator($title) ;


        $post->update();
     
        return redirect()->route('posts.index')
                        ->with('success','Post Edited successfully');
    }

*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function destroy($id)
    {
       user::find($id)->delete();
       return redirect()->route('users.index')
                        ->with('success','Item deleted successfully');
    }
    
}
