@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
@section('content')
<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash_header mt-3">
        <div class="dash_title">
          <h2>
          <a href="{{url()->previous()}}" class="btn btn-teal me-2">← </a>

          Add New Category</h2>
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
              <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Enter Category Title..." data-parsley-required="true">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="description">Description</label>
                      <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter Description..." data-parsley-required="true"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mt-3">
                      <label for="inputCategoryImage">Category Image</label>
                      <div class="form-group mb-20 upload-input text-center">
                        <label for="categoryImg" class="form-control form-label form-img-uploader rounded-4 d-flex flex-column align-items-center justify-content-center w-100 py-4">
                          <span id="categoryIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512.056 512.056">
                              <g>
                                <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37C139.404 78.865 85.907 142.542 80.395 218.303C28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#818898"/>
                                <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#818898"/>
                              </g>
                            </svg>
                          </span>
                          <p id="categoryText" class="mb-0">Upload Image</p>
                          <img id="previewCategoryImg" src="" alt="Category Image Preview" style="display: none; width: 300px; height: 300px; border-radius: 8px;" />
                        </label>
                        <input type="file" name="category_image" class="form-control d-none" id="categoryImg" required onchange="previewCategoryImage(event)" data-parsley-required="true" />
                      </div>
                      <div id="categoryImg-error"></div>
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





<script>
  function previewCategoryImage(event) {
    const preview = document.getElementById('previewCategoryImg');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      document.getElementById('categoryText').style.display = 'none';
      document.getElementById('categoryIcon').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  $('#categoryImg').parsley({
    errorsContainer: function(ParsleyField) {
      return $('#categoryImg-error');
    }
  });
</script>
@endsection