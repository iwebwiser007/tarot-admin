<?php

namespace App\Http\Controllers\admin;

use App\Exports\OfferExport;
use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Offer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; // Import the Excel facade


class OfferController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search', '');
        $offers = Offer::query()
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')->
                orWhere('description', 'like', '%' . $search . '%')->
                orWhere('discount', 'like', '%' . $search . '%')->
                orWhere('status', 'like', '%' . $search . '%');
            })->orderBy('id', 'desc')
            ->paginate($perPage);;
        return view('admin.offer.offer', compact('offers', 'perPage'));
    }

    public function add()
    {
        $cards = Card::all();
        return view('admin.offer.offer_add', compact('cards'));
    }

    public function store(Request $request)
    {
        Offer::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'discount' => $request->discount,
            'status' => $request->status,
            'card_id' => $request->card_id,
        ]);

        toastr_notify('Offer Created Successfully!', 'success');
        return redirect()->route('admin.offers');
    }

    public function edit(Request $request, $id)
    {
        $offer = Offer::find($id);
        $cards = Card::all();
        return view('admin.offer.offer_edit', compact('offer', 'cards'));
    }

    public function update(Request $request, $id)
    {
     
        $offer = Offer::findOrFail($id);
        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->start_date = $request->input('start_date');
        $offer->end_date = $request->input('end_date');
        $offer->discount = $request->input('discount');
        $offer->status = $request->input('status');
        $offer->card_id = $request->input('card_id');
        $offer->save();
        toastr_notify('Offer Updated Successfully!', 'success');
        return redirect()->route('admin.offers');
    }


    public function delete($id){
       $offer = Offer::find($id);
       $offer->delete();
       toastr_notify('Offer Deleted Successfully!', 'success');
       return redirect()->route('admin.offers');
    
    }

    public function export()
    {
        return Excel::download(new OfferExport, 'offers.xlsx'); 
    }
}
