<?php

namespace App\Http\Controllers\admin;

use App\Exports\CmsPageExport;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $search = $request->get('search', '');
        $pages = Page::query()
            ->when($search, function ($query) use ($search) {
                $query->where('page_title', 'like', '%' . $search . '%');
            })->orderBy('id', 'desc')
            ->paginate($perPage);
        return view('admin.page.cms_page', compact('pages', 'perPage'));
    }

    public function export()
    {
        return Excel::download(new CmsPageExport, 'pages.xlsx');
    }

    public function add()
    {
        return view('admin.page.cms_page_add');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'unique:cms_pages,page_title',
        ]);

        Page::create([
            'page_title' => $request->title,
            'html_content' => $request->html_content,

        ]);
        toastr_notify('New Page Created Successfully!', 'success');
        return redirect()->route('admin.pages');
    }

    public function edit(Request $request, $id)
    {
        $page = Page::find($id);
        return view('admin.page.cms_page_edit', compact('page'));
    }


    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'title' => 'unique:cms_pages,page_title,' . $id,
        ]);

        $page = Page::find($id);
        $page->page_title = $request->title;
        $page->html_content = $request->html_content;
        $page->save();
        toastr_notify('Page Updated Successfully!', 'success');
        return redirect()->route('admin.pages');
    }


    public function delete($id)
    {
        $page = Page::find($id);
        return $page;
        $page->delete();
        toastr_notify('Page Deleted Successfully!', 'success');
        return redirect()->route('admin.pages');
    }
}
