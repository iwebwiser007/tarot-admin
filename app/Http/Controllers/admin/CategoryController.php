<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Exports\CardExport; // Import the export class
use App\Exports\CategoryExport;
use Maatwebsite\Excel\Facades\Excel; // Import the Excel facade
use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
    public function index(Request $request){
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search', '');
        $categories = Category::query()
        ->when($search, function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        })->orderBy('id', 'desc')
        ->paginate($perPage);
        return view('admin.category.category', compact('categories' , 'perPage'));
        
       

    }

    public function export()
    {
        return Excel::download(new CategoryExport, 'categories.xlsx'); 
    }

    public function add(){
        return view('admin.category.category_add');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'unique:categories,title',  
            'category_image' => 'mimes:jpeg,jpg,png,gif,webp',  
        ]);

        if ($request->hasFile('category_image')) {
            $category = $request->file('category_image');

            $categoryImage = Image::make($category);
            $categoryPath = time() . '_category.' . $category->getClientOriginalExtension();
            $categoryImage->save(storage_path('app/public/images/' . $categoryPath));
        } else {
            $categoryPath = null;
        }

        Category::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $categoryPath,

        ]);
        toastr_notify('New Category Created Successfully!', 'success');
        return redirect()->route('admin.categories');
    }

    public function edit(Request $request , $id){
        $category = Category::find($id);
        return view('admin.category.category_edit', compact('category'));
   }


   public function update(Request $request , $id){

    $validated = $request->validate([
        'title' => 'unique:categories,title,' . $id,  
        'category_image' => 'mimes:jpeg,jpg,png,gif,webp',  
    ]);

         $category = Category::find($id);
         if ($request->hasFile('category_image')) {
              $categoryImage = $request->file('category_image');
              $image = Image::make($categoryImage);

             if($category->image && file_exists(storage_path('app/public/images/' . $category->image))){
                 unlink(storage_path('app/public/images/' . $category->image));

              $categoryPath = time() . '_card.' . $categoryImage->getClientOriginalExtension();
              $image->save(storage_path('app/public/images/' . $categoryPath));
              $category->image = $categoryPath;
         }
         else{
             $category->image = null;
         }
   }

   $category->title = $request->title;
   $category->description = $request->description;
   $category->save();
   toastr_notify('Category Updated Successfully!', 'success');
   return redirect()->route('admin.categories');

}


public function delete($id){
    $category = Category::find($id);
    $category->delete();
    toastr_notify('Category Deleted Successfully!', 'success');
    return redirect()->route('admin.categories');
}

}
