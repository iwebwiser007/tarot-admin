@extends('components.admin.layouts')

@section('content')
<!-- <div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash_header mt-3">
        <div class="dash_title">
          <h2>Edit Offer</h2>
        </div>
      </div>
      
      <!-- Form to edit offer --
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-body">
              <form action="{{ route('admin.offer.update', $offer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                  <label for="title">Offer Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter offer title" value="{{ old('title', $offer->title) }}" required>
                </div>

                <!-- Offer Description --
                <div class="form-group mt-3">
                  <label for="description">Offer Description</label>
                  <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter offer description" required>{{ old('description', $offer->description) }}</textarea>
                </div>

                <!-- Start Date --
                <div class="form-group mt-3">
                  <label for="start_date">Start Date</label>
                  <input type="datetime-local" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', \Carbon\Carbon::parse($offer->start_date)->format('Y-m-d\TH:i')) }}" required>
                </div>

                <!-- End Date --
                <div class="form-group mt-3">
                  <label for="end_date">End Date</label>
                  <input type="datetime-local" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', \Carbon\Carbon::parse($offer->end_date)->format('Y-m-d\TH:i')) }}" required>
                </div>

                <!-- Discount Percentage --
                <div class="form-group mt-3">
                  <label for="discount">Discount Percentage</label>
                  <input type="number" name="discount" id="discount" class="form-control" placeholder="Enter discount" value="{{ old('discount', $offer->discount) }}" required min="0" max="100">
                </div>

                <!-- Offer Status --
                <div class="form-group mt-3">
                  <label for="status">Offer Status</label>
                  <select name="status" id="status" class="form-control" required>
                    <option value="active" {{ $offer->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $offer->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="expired" {{ $offer->status == 'expired' ? 'selected' : '' }}>Expired</option>
                  </select>
                </div>

                <!-- Card Selection --
                <div class="form-group mt-3">
                  <label for="card_id">Select Card for Offer</label>
                  <select name="card_id" id="card_id" class="form-control" required>
                    <option value="">Select Card</option>
                    <!-- Assuming you are passing the list of cards to the view --
                    @foreach($cards as $card)
                    <option value="{{ $card->id }}" {{ $offer->card_id == $card->id ? 'selected' : '' }}>{{ $card->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="d-flex justify-content-end mt-3">
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
          <a href="#" class="btn btn-teal me-2">← </a>

          Edit Offer</h2>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-body">
              <form action="{{ route('admin.offer.update', $offer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="title">Offer Title</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Enter offer title" value="{{ old('title', $offer->title) }}" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="discount">Discount Percentage</label>
                      <input type="number" name="discount" id="discount" class="form-control" placeholder="Enter discount" value="{{ old('discount', $offer->discount) }}" required min="0" max="100">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="start_date">Start Date</label>
                      <input type="datetime-local" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', \Carbon\Carbon::parse($offer->start_date)->format('Y-m-d\TH:i')) }}" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="end_date">End Date</label>
                      <input type="datetime-local" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', \Carbon\Carbon::parse($offer->end_date)->format('Y-m-d\TH:i')) }}" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="status">Offer Status</label>
                      <select name="status" id="status" class="form-control" required>
                        <option value="active" {{ $offer->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $offer->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        <option value="expired" {{ $offer->status == 'expired' ? 'selected' : '' }}>Expired</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="card_id">Select Card for Offer</label>
                      <select name="card_id" id="card_id" class="form-control" required>
                        <option value="">Select Card</option>
                        @foreach($cards as $card)
                          <option value="{{ $card->id }}" {{ $offer->card_id == $card->id ? 'selected' : '' }}>{{ $card->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mt-3">
                      <label for="description">Offer Description</label>
                      <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter offer description" required>{{ old('description', $offer->description) }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                  <button type="submit" class="btn btn-teal">Save</button>
                  <button type="reset" class="btn btn-light ms-2">Undo</button>
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
