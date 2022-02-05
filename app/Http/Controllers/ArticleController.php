<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $article = Article::where(['title', $request->title])->first();
        // if (!$article) {
        //     $createArticle = Article::create([
        //         'title' => $request->title,
        //         'description' => $request->description
        //     ]);
        //     return redirect()->route('article.index');
        // }

        //create article and save to database
        $article = Article::firstOrCreate(['title' => $request->title, 'user_id' => auth()->id()], ['user_id' => auth()->id(), 'title' => $request->title, 'description' => $request->description]);
        return redirect()->route('articles.index');

        //create article and do not save it to object
        // $articleDoNotSavedDB = Article::firstOrNew(['title' => $request->title], ['title' => $request->title, 'description' => $request->description, 'user_id' => auth()->id()]);
        // $articleDoNotSavedDB->save();
        //$articleDoNotSavedDB->any_field = $setValue
        // and save to db
        // $articleDoNotSavedDB->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article = Article::where('title', $request->title)->where('user_id', auth()->id())->first();
        if ($article) {
            $article->update(['description' => $request->description]);
        } else {
            $article = Article::create([
                'title' => $request->title,
                'description' => $request->description
            ]);
        }

        $article = Article::updateOrCreate(['title' => $request->title, 'user_id' => auth()->id()], ['description' => $request->description]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
