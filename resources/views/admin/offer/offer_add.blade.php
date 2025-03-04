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
          <h2>Add New Offer</h2>
        </div>
      </div>
      
      <!-- Form to add offer -->
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-body">
              <form action="{{ route('admin.offer.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                @csrf

                <!-- Offer Title -->
                <div class="form-group mt-3">
                  <label for="title">Offer Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter offer title" data-parsley-required="true">
                </div>

                <!-- Offer Description -->
                <div class="form-group mt-3">
                  <label for="description">Offer Description</label>
                  <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter offer description" data-parsley-required="true"></textarea>
                </div>

                <!-- Start Date -->
                <div class="form-group mt-3">
                  <label for="start_date">Start Date</label>
                  <input type="datetime-local" name="start_date" id="start_date" class="form-control" data-parsley-required="true">
                </div>

                <!-- End Date -->
                <div class="form-group mt-3">
                  <label for="end_date">End Date</label>
                  <input type="datetime-local" name="end_date" id="end_date" class="form-control" data-parsley-required="true">
                </div>

                <!-- Discount Percentage -->
                <div class="form-group mt-3">
                  <label for="discount">Discount Percentage</label>
                  <input type="number" name="discount" id="discount" class="form-control" placeholder="Enter discount" data-parsley-required="true" min="0" max="100">
                </div>

                <!-- Offer Status -->
                <div class="form-group mt-3">
                  <label for="status">Offer Status</label>
                  <select name="status" id="status" class="form-control" data-parsley-required="true">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="expired">Expired</option>
                  </select>
                </div>

                <!-- Card Selection -->
                <div class="form-group mt-3">
                  <label for="card_id">Select Card for Offer</label>
                  <select name="card_id" id="card_id" class="form-control" data-parsley-required="true">
                    <option value="">Select Card</option>
                    <!-- Assuming you are passing the list of cards to the view -->
                    @foreach($cards as $card)
                    <option value="{{ $card->id }}">{{ $card->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="d-flex justify-content-end mt-3">
                  <button type="submit" class="btn btn-teal">Save</button>
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
