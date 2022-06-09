<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // CRUD --> Create, Read, Update, Delete
    ## show -> ci mostra la vista del dettaglio dell'articolo creato
    public function show(Article $article){
        return view('articles.show', compact('article'));
    }
    ## index -> ci mostra più occorrenza di quella classe (gli ultimi 5 caricati)
    public function index(){
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }
    ## create -> ritorna la vista in cui c'è il form di creazione
    public function create(){
        return view('articles.create');
    }
    ## store -> è la funzione che si occupa di salvare il dato nel DB
    public function store(Request $request){
        // dd($request->all());

        if($request->has('img')) {
            //se la request ha un immagine salvala in questo modo
            $article = Article::create(
                [
                'title'=> $request->input('title'),
                'body'=> $request->input('body'),
                'img'=> $request->file('img')->store("public/img")
                ]
            );
        } else {
            //se la request non ha un immagine salvalo in quest'altra maniera
            $article = Article::create(
                [
                'title'=> $request->input('title'),
                'body'=> $request->input('body')
                ]
            );
        }
        // dd($request->all());
        // dd($article);
        return redirect()->route('welcome');
    }
    ## edit -> funzione che ritorna la vista con il form per modificare la risorsa
    public function edit(Article $article){
        // $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
    ## update -> funzione che modifica i dati nel DB
    public function update(Request $request, Article $article){
        // dd($request->all());
        // $article = Article::find($id);
        if($request->has('img')) {
            //se la request ha un immagine salvala in questo modo
            $article->update(
                [
                    'title' => $request->input('title'),
                    'body' => $request->input('body'),
                    'img'=> $request->file('img')->store("public/img")
                ]
            );
        } else {
            //se la request non ha un immagine salvalo in quest'altra maniera
            $article->update(
                [
                    'title' => $request->input('title'),
                    'body' => $request->input('body')
                ]
            );
        }
        // dd($request->all());
        // dd($article);
        return redirect()->route('welcome');
    }
    ## delete -> funzione che elimina la risorsa dal DB
    public function delete(Article $article){
        // $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
