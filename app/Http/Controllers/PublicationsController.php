<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Publication;

use App\Comment;

class PublicationsController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function index ()
    {
        $publications = Publication::all();    

        return view('publications.index', compact('publications'));
    }

    public function show(Publication $publication)
    {               
        $comments = Comment::where('publication_id', $publication->id)->get();
        return view('publications.show', compact('publication', 'comments'));
    }

    public function new(Request $request)
    {
        
        $this->validate($request, [

            'publication_text' => 'required'   

        ]);

        $publication = new Publication;
        $publication->publication_text = $request->publication_text;
        $publication->user_id = $request->id;
        $publication->save();

        return back();

    }

    public function edit(Request $request, Publication $publication)
    {
        if ($request->isMethod('get')) 
        {
            return view('publications.modify', compact('publication'));
        }

       if ($request->isMethod('post'))
        {

            $this->validate($request, [

                'publication_text' => 'required'   

            ]);

            $publication->publication_text = $request->publication_text;
            $publication->save();

            return redirect()->action('PublicationsController@index');
        }
    }

    public function delete(Request $request, Publication $publication)
    {
        if ($request->isMethod('get')) 
        {
            return view('modal.delete', compact('publication'));
        }

        if ($request->isMethod('post'))
        {
            $publication->delete();
            return redirect()->action('PublicationsController@index');
        }
    }
}
