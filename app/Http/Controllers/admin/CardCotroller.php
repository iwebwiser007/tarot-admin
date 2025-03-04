<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;
use App\Exports\CardExport; // Import the export class
use Maatwebsite\Excel\Facades\Excel; // Import the Excel facade
use Intervention\Image\Facades\Image;


class CardCotroller extends Controller
{
    public function index(Request $request){
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search', '');
        $cards = Card::query()
        ->when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->orderBy('id', 'desc')
        ->paginate($perPage);
        return view('admin.card.card', compact('cards' , 'perPage'));
    }

    public function export()
    {
        return Excel::download(new CardExport, 'cards.xlsx'); 
    }

    public function add(){
        return view('admin.card.card_add');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'unique:cards,name',  
            'card_image' => 'mimes:jpeg,jpg,png,gif,webp',  
        ]);

        if ($request->hasFile('card_image')) {
            $card = $request->file('card_image');

            $cardImage = Image::make($card);
            $cardPath = time() . '_card.' . $card->getClientOriginalExtension();
            $cardImage->save(storage_path('app/public/images/' . $cardPath));
        } else {
            $cardPath = null;
        }

        Card::create([
            'name' => $request->name,
            'affirmation_text' => $request->affirmation_text,
            'image' => $cardPath,

        ]);
        toastr_notify('New Card Created Successfully!', 'success');
        return redirect()->route('admin.cards');
    }

    public function edit(Request $request , $id){
        $card = Card::find($id);
        return view('admin.card.card_edit', compact('card'));
   }


   public function update(Request $request , $id){
         $card = Card::find($id);
         if ($request->hasFile('card_image')) {
              $cardImage = $request->file('card_image');
              $image = Image::make($cardImage);

             if($card->image && file_exists(storage_path('app/public/images/' . $card->image))){
                 unlink(storage_path('app/public/images/' . $card->image));

              $cardPath = time() . '_card.' . $cardImage->getClientOriginalExtension();
              $image->save(storage_path('app/public/images/' . $cardPath));
              $card->image = $cardPath;
         }
         else{
             $card->image = null;
         }
   }

   $card->name = $request->name;
   $card->affirmation_text = $request->affirmation_text;
   $card->save();
   toastr_notify('Card Updated Successfully!', 'success');
   return redirect()->route('admin.cards');
}


public function delete($id){
    $card = Card::find($id);
    $card->delete();
    toastr_notify('Card Deleted Successfully!', 'success');
    return redirect()->route('admin.cards');

}

  

  
}


