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


class IdeasController extends Controller
{
     use Notifiable;
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentuser = Auth::user();
         $users = DB::table('users')->get();
         $ideas = DB::table('ideas')->orderby('id','desc')->paginate(5);       
         return view('admin.ideas',['ideas' => $ideas,'users' => $users ,'currentuser'=>$currentuser])
         ->with('i', ($request->input('page', 1) - 1) * 5);;

           
            
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(Auth::guest())
     {
            return redirect()->route('ideasubmission')
                        ->with('error','Please Login to submit your idea');
     }
     else
     {
         $idea = new Ideas;

        $idea->user_id = $request->user_id;
        $idea->college = $request->college;
        $idea->title = $request->title;
        $idea->body = $request->body;
        //$post->slug = str_slug($request->title, '-');
        $title = $request->title;
         $idea->slug =$this->slugCreator($title) ;

        $idea->save();

      

       
        return redirect()->route('userhome')
                        ->with('success','Idea Submitted Successfully');
  

       //$users = DB::table('users')->orderby('id','desc')->first();  
       $ideas = DB::table('ideas')->orderby('id','desc')->first();  
      //Notification::send(User::all(), new NewPost($ideas));
     }
       // $users->notify(new NewPost($posts));
    }

    public function slugCreator($title)
    {
         $tableTitle = Ideas::where('title', $title)->first();
         if($tableTitle)
         {
             $random = rand(1,100);
             $slug = str_slug($title, '-');
             $newslug =sprintf("%s%s", $slug, $random); 
             return $newslug;

         }
         else
         {
             $slug = str_slug($title, '-');
             return $slug;
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
        
          
        $ideas = Ideas::find($id);
     //  $ideacomment = DB::table('postcomment')->get();
       $users = DB::table('users')->get();
       return view('admin.ideasshow',['users' => $users ,'ideas' => $ideas]);
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
       Ideas::find($id)->delete();
       return redirect()->route('ideas.index')
                        ->with('success','Item deleted successfully');
    }
    
}
