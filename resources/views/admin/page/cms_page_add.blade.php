@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@section('content')
<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash_header mt-3">
        <div class="dash_title">
          <h2>
          <a href="{{url()->previous()}}" class="btn btn-teal me-2">← </a>

          Add New Page</h2>
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
              <form action="{{ route('admin.page.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mt-3">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Enter Category Title..." data-parsley-required="true">
                    </div>
                  </div>

                  <div class="col-md-12">
                <div class="form-group mt-3">
                  <label for="html_content" class="col-form-label form-label">Content</label>
                  <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="6" ></textarea>
                </div>
                </div>

                </div>
                <div class="d-flex justify-content-end mt-3">
                  <button type="submit" class="btn btn-teal">Save</button>
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