<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(6);
        
        /* passiamo il dato alla vista in modalità compatta */
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* tramite request prendiamo tutti i dati di create */
        /* SLUG - ricordati di aggiungere --> use Illuminate\Support\Str;*/
         /* buttiamo tutto dentro il db come abbiamo fatto con il seed */
        $data = $request->all();
        $new_comic = new Comic();
        /* $new_comic->title = $data['title'];
        $new_comic->slug=Str::slug($data['title'], '-');
        $new_comic->description = $data['description'];
        $new_comic->image = $data['image'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type']; */

        /* più sbrigativo con questo metodo: */
        $data['slug']=Str::slug($data['title'], '-');
        $new_comic->fill($data);
      
        $new_comic->save();

        /* per visualizzarlo gli dico la pagina e il dato che gli passo */
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        /* $comic = Comic::find($id); */
        /* nel caso di index sbagliato */
        if($comic){
            return view('comics.show', compact('comic'));
        }
        abort(404);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
