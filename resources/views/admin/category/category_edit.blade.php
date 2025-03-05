@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
    <div class="main-data">
        <div class="container-fluid">
            <div class="dash_header mt-3">
                <div class="dash_title">
                    <h2>
                    <a href="{{url()->previous()}}" class="btn btn-teal me-2">← </a>
                        Edit Category</h2>
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
                            <form action="{{ route('admin.category.update' , $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mt-3">
                                            <label for="title">Category Name</label>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Category Title..." value="{{ old('title', $category->title ?? '') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-3">
                                            <label for="description">Description</label>
                                            <!-- <textarea name="affirmation_text" id="affirmation_text" class="form-control" rows="3" placeholder="Enter affirmation text" required>{{ old('affirmation_text', $card->affirmation_text ?? '') }}</textarea> -->
                                            <input type="text" name="description" id="description" class="form-control" placeholder="Enter affirmation text" value="{{ old('description', $category->description ?? '') }}" required>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-3">
                                            <label for="inputCategoryImage-{{$category->id}}">Category Image</label>
                                            <div class="form-group mb-20 upload-input text-center">
                                                <label for="inputCategoryImage-{{$category->id}}" class="form-control form-label form-img-uploader rounded-4 d-flex flex-column align-items-center justify-content-center w-100 py-4">
                                                    <div class="d-flex flex-column align-items-center gap-3">
                                                        <span></span>
                                                        <p id="categoryText-{{$category->id}}" class="mb-0" style="display: none;">Upload Card Image</p>
                                                    </div>
                                                    <div id="categoryPreview-{{$category->id}}">
                                                        <img id="previewCategoryImg-{{$category->id}}" src="{{ isset($category) ? asset('storage/app/public/images/' . $category->image) : '' }}" alt="Category Image Preview" style="width: 300px; height: 300px; border-radius: 8px;" />
                                                    </div>
                                                </label>
                                                <input type="file" name="category_image" class="form-control d-none" id="inputCategoryImage-{{$category->id}}" onchange="previewCategoryImage(event , {{$category->id}})" />
                                            </div>
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


<script>
    function previewCategoryImage(event, categoryId) {
        const preview = document.getElementById('previewCategoryImg-' + categoryId);
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
            document.getElementById('categoryText-' + categoryId).style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
</script>
@endsection