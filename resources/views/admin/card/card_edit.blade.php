@extends('components.admin.layouts')
@section('content')
<!-- <div class="main-right-container" id="main-right-container">
    <div class="main-data">
        <div class="container-fluid">
            <div class="dash_header mt-3">
                <div class="dash_title">
                    <h2>Edit Card</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="{{ route('admin.card.update' , $card->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="name">Card Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter card name" value="{{ old('name', $card->name ?? '') }}" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="affirmation_text">Affirmation Text</label>
                                    <textarea name="affirmation_text" id="affirmation_text" class="form-control" rows="3"
                                        placeholder="Enter affirmation text" required>{{ old('affirmation_text', $card->affirmation_text ?? '') }}</textarea>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="inputCardImage-{{$card->id}}">Card Image</label>
                                    <div class="form-group mb-20 upload-input">
                                        <label for="inputCardImage-{{$card->id}}" class="form-control form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                                <span>
                                                </span>
                                                <p id="cardText-{{$card->id}}" class="mb-0" style="display: none;">Upload Card Image</p>
                                            </div>
                                            <div id="cardPreview-{{$card->id}}" class="">
                                                <img id="previewCardImg-{{$card->id}}" src="{{ isset($card) ? asset('storage/app/public/images/' . $card->image) : '' }}" alt="Card Image Preview" style="width: 300px; height: 300px; border-radius: 8px;" />
                                            </div>
                                        </label>
                                        <input type="file" name="card_image" class="form-control d-none" id="inputCardImage-{{$card->id}}" onchange="previewCardImage(event , {{$card->id}})" />
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-teal">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->

<div class="main-right-container" id="main-right-container">
    <div class="main-data">
        <div class="container-fluid">
            <div class="dash_header mt-3">
                <div class="dash_title">
                    <h2>

                        <a href="{{url()->previous()}}" class="btn btn-teal me-2">← </a>

                        Edit Card
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="{{ route('admin.card.update' , $card->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mt-3">
                                            <label for="name">Card Name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter card name" value="{{ old('name', $card->name ?? '') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mt-3">
                                            <label for="affirmation_text">Affirmation Text</label>
                                            <textarea name="affirmation_text" id="affirmation_text" class="form-control" rows="3" placeholder="Enter affirmation text" required>{{ old('affirmation_text', $card->affirmation_text ?? '') }}</textarea>
                                            <!-- <input type="text" name="affirmation_text" id="affirmation_text" class="form-control" placeholder="Enter affirmation text" value="{{ old('affirmation_text', $card->affirmation_text ?? '') }}" required> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group mt-3">
                                            <label for="category{{ $card->id }}" class="col-form-label form-label text-start d-block">Category</label>
                                            <select name="category" class="form-control" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category', $card->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title }}
                                                </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group mt-3">
                                            <label for="inputCardImage-{{$card->id}}">Card Image</label>
                                            <div class="form-group mb-20 upload-input text-center">
                                                <label for="inputCardImage-{{$card->id}}" class="form-control form-label form-img-uploader rounded-4 d-flex flex-column align-items-center justify-content-center w-100 py-4">
                                                    <div class="d-flex flex-column align-items-center gap-3">
                                                        <span></span>
                                                        <p id="cardText-{{$card->id}}" class="mb-0" style="display: none;">Upload Card Image</p>
                                                    </div>
                                                    <div id="cardPreview-{{$card->id}}">
                                                        <img id="previewCardImg-{{$card->id}}" src="{{ isset($card) ? asset('storage/app/public/images/' . $card->image) : '' }}" alt="Card Image Preview" style="width: 300px; height: 300px; border-radius: 8px;" />
                                                    </div>
                                                </label>
                                                <input type="file" name="card_image" class="form-control d-none" id="inputCardImage-{{$card->id}}" onchange="previewCardImage(event , {{$card->id}})" />
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
    function previewCardImage(event, cardId) {
        const preview = document.getElementById('previewCardImg-' + cardId);
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
            document.getElementById('cardText-' + cardId).style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
</script>
@endsection