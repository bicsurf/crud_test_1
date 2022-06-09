<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // CRUD --> Create, Read, Update, Delete

    ## index -> ci mostra più occorrenza di quella classe (gli ultimi 5 caricati)
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
    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
    ## update -> funzione che modifica i dati nel DB
    public function update(Request $request, $id){
        // dd($request->all());
        $article = Article::find($id);
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
}
