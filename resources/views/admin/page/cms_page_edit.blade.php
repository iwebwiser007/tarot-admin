@extends('components.admin.layouts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@section('content')
<div class="main-right-container" id="main-right-container">
    <div class="main-data">
        <div class="container-fluid">
            <div class="dash_header mt-3">
                <div class="dash_title">
                    <h2>
                    <a href="{{url()->previous()}}" class="btn btn-teal me-2">← </a>
                        Edit Page</h2>
                </div>
            </div>

            @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-column">
            <ul class="mb-0 ps-3">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="{{ route('admin.page.update' , $page->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mt-3">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title..." value="{{ old('title', $page->page_title ?? '') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-3">
                                            <label for="html_content">Content</label>
                                            <textarea name="html_content" id="html_content" class="form-control ckeditor" rows="3" placeholder="Enter Content" required>{{ old('html_content', $page->html_content ?? '') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                              
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-teal">Update</button>
                                    <button type="reset" class="btn btn-light ms-2">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection