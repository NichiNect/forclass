<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
        if(isset($_GET['filter'])) {
            $filter = request()->get('filter');
            $articles = Article::with('author')->where('status', $filter)->latest()->get();
            $title = 'List of ' . ucwords($filter) . ' Articles';
        } else {
            $articles = Article::with('author')->latest()->get();
            $title = 'List of All Articles';
        }

        return view('admin.articles.index', [
            'articles' => $articles,
            'title' => $title
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $r)
    {
        if($r->hasFile('picture')) {
            $file = $r->file('picture');
            $extension = $file->extension();
            $imgName = Str::slug($r->title) . time() . '.' . $extension;
            $file->storeAs('/images/articles/', $imgName, 'public');
        } else {
            $imgName = '';
        }

        $article = Article::create([
            'status' => 'pending',
            'title' => $r->title,
            'slug' => Str::slug($r->title),
            'picture' => $imgName,
            'content' => $r->content,
            'user_id' => auth()->user()->id
        ]);

        if(!$article) {
            abort(422);
        }

        return redirect()->route('admin.articles.index')->with('success', 'Article Created Successfully.');
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
        $article = Article::findOrFail($id);

        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $r, $id)
    {
        $old = Article::findOrFail($id);
        if($r->hasFile('picture')) {
            Storage::disk('public')->delete('images/articles/' . $old->picture);
            $file = $r->file('picture');
            $extension = $file->extension();
            $imgName = Str::slug($r->title) . time() . '.' . $extension;
            $file->storeAs('/images/articles/', $imgName, 'public');
        } else {
            $imgName = $old->picture;
        }

        $article = Article::updateOrCreate(
        [
            'id' => $id
        ],
        [
            'status' => 'pending',
            'title' => $r->title,
            'slug' => Str::slug($r->title),
            'picture' => $imgName,
            'content' => $r->content,
            'user_id' => auth()->user()->id
        ]);

        if(!$article) {
            abort(422);
        }

        return redirect()->route('admin.articles.index')->with('success', 'Article Edited Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        Storage::disk('public')->delete('images/articles/' . $article->picture);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article Deleted Successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function acc($id)
    {
        $article = Article::findOrFail($id)->update([
            'status' => 'published'
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article Deleted Successfully.');
    }

}
