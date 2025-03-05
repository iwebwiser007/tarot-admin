@extends('components.admin.layouts')
<style>
  .pagination .page-item.active .page-link {
    background-color: #04aa9e;
    color: rgb(236, 242, 242);
    border-color: #04aa9e;
    font-size: 0.8rem;
  }

  .pagination .page-item.disabled .page-link {
    background-color: #d3d3d3;
    color: #888;
    border-color: #d3d3d3;
  }
</style>
@section('content')
<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash_header mt-4">
        <div class="dash_title">
          <h2>Category</h2>
        </div>
        <a href="{{ route('admin.category.add') }}" class="btn btn-teal" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#FFFFFF">
            <path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
          </svg>
          Add Category
        </a>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card mt-3">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <div class="form-div">
                    <form method="GET" action="{{ route('admin.categories') }}" class="d-flex align-items-center">
                      <div class="position-relative flex-grow-1 me-2">
                        <input type="search" name="search" id="searchInput" class="form-control" placeholder="Search..." value="{{ request()->query('search') }}" />
                      </div>
                      <button type="submit" class="btn btn-teal btn-sm">Search</button>
                    </form>
                  </div>
                  <a href="{{route('admin.category.export')}}" role="button" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
                      <g fill="#20c997" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <g transform="scale(5.33333,5.33333)">
                          <path d="M23.9707,5.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v19.17188l-2.58594,-2.58594c-0.50163,-0.52248 -1.24653,-0.73295 -1.94742,-0.55024c-0.70088,0.18271 -1.24823,0.73006 -1.43094,1.43094c-0.18271,0.70088 0.02776,1.44578 0.55024,1.94742l6,6c0.78106,0.78074 2.04706,0.78074 2.82812,0l6,-6c0.52248,-0.50163 0.73295,-1.24653 0.55024,-1.94742c-0.18271,-0.70088 -0.73006,-1.24823 -1.43094,-1.43094c-0.70088,-0.18271 -1.44578,0.02776 -1.94742,0.55024l-2.58594,2.58594v-19.17187c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495zM7.9707,30.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v3c0,3.29003 2.70997,6 6,6h24c3.29003,0 6,-2.70997 6,-6v-3c0.0102,-0.72127 -0.36875,-1.39216 -0.99175,-1.75578c-0.623,-0.36361 -1.39351,-0.36361 -2.01651,0c-0.623,0.36361 -1.00195,1.0345 -0.99175,1.75578v3c0,1.12797 -0.87203,2 -2,2h-24c-1.12797,0 -2,-0.87203 -2,-2v-3c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495z"></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </div>

                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                     <tbody>
                      @foreach($categories as $category)
                      <tr>
                        <td>
                          <div
                            class="plan_img align-content-center">
                            <img
                              src="{{ asset('storage/app/public/images/' . $category->image) }}"
                              alt="card image" />
                          </div>
                        </td>
                        <td>{{$category->title}}</td>
                        <td class="text-truncate">
                          {{$category->description}}
                        </td>
                        <td>
                          <div
                            class="d-flex align-items-start justify-content-center">
                            <a
                              href="{{ route('admin.category.edit' , $category['id']) }}"
                              class="btn float-end">
                              <img
                                src="{{asset('public/assets/icons/edit.svg')}}"
                                alt="edit button" />
                            </a>
                            <a
                              href="#"
                              role="button"
                              class="btn float-end"
                              data-bs-toggle="modal"
                              data-bs-target="#del_card-{{$category->id}}">
                              <img
                                src="{{asset('public/assets/icons/delete.svg')}}"
                                alt="delete button" />
                            </a>
                            <div class="modal fade" id="del_card-{{$category->id}}">
                              <div
                                class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-body">
                                    <button
                                      type="button"
                                      class="btn-close float-end"
                                      data-bs-dismiss="modal"></button>
                                    <div
                                      class="d-flex flex-column align-items-center justify-content-center gap-3 mb-3">
                                      <span>
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          x="0px"
                                          y="0px"
                                          width="50"
                                          height="50"
                                          viewBox="0,0,256,256">
                                          <g
                                            fill="#cc3333"
                                            fill-rule="nonzero"
                                            stroke="none"
                                            stroke-width="1"
                                            stroke-linecap="butt"
                                            stroke-linejoin="miter"
                                            stroke-miterlimit="10"
                                            stroke-dasharray=""
                                            stroke-dashoffset="0"
                                            font-family="none"
                                            font-weight="none"
                                            font-size="none"
                                            text-anchor="none"
                                            style="mix-blend-mode: normal;">
                                            <g
                                              transform="scale(5.33333,5.33333)">
                                              <path
                                                d="M12.5,6c-3.584,0 -6.5,2.916 -6.5,6.5v23c0,3.584 2.916,6.5 6.5,6.5h11.55664c-0.594,-0.927 -1.07687,-1.932 -1.42187,-3h-10.13477c-1.93,0 -3.5,-1.57 -3.5,-3.5v-18.5h30v5.63477c1.068,0.345 2.073,0.82883 3,1.42383v-11.55859c0,-3.584 -2.916,-6.5 -6.5,-6.5zM12.5,9h23c1.93,0 3.5,1.57 3.5,3.5v1.5h-30v-1.5c0,-1.93 1.57,-3.5 3.5,-3.5zM15.5,21c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5zM24,21c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5zM35.09375,24.0293c-6.075,0 -11,4.925 -11,11c0,6.075 4.925,11 11,11c6.075,0 11,-4.925 11,-11c0,-6.075 -4.924,-11 -11,-11zM35.09375,27.0293c0.552,0 1,0.448 1,1v6h6c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1h-6v6c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1v-6h-6c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1h6v-6c0,-0.552 0.448,-1 1,-1zM15.5,30c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5z"></path>
                                            </g>
                                          </g>
                                        </svg>
                                      </span>
                                      <div class="text-center">
                                        <h2 class="fs-6">
                                          Are you Sure?
                                        </h2>
                                        <p>
                                          Are you sure you want to
                                          delete this category?
                                        </p>
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center justify-content-end gap-2 mb-3">
                                      <form action="{{ route('admin.category.delete' , $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-light border" data-bs-dismiss="modal">
                                          Cancel
                                        </button>
                                        <button type="submit" class="btn cance-btn">
                                          Delete
                                        </button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody> 
                  </table>
                </div>
              </div>

              <div class="card-footer">
                <div>
                  <select
                    name="perPage" id="perPage" onchange="updatePagination()"
                    class="form-select custom-select">
                    <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>Show 10</option>
                    <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>Show 20</option>
                    <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>Show 50</option>
                  </select>
                </div>

                <div class="pagination-div">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      @if ($categories->onFirstPage())
                      <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                      </li>
                      @else
                      <li class="page-item">
                        <a class="page-link" href="{{ $categories->previousPageUrl() }}">Previous</a>
                      </li>
                      @endif

                      @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
                      <li class="page-item {{ $categories->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                      </li>
                      @endforeach

                      @if ($categories->hasMorePages())
                      <li class="page-item">
                        <a class="page-link" href="{{ $categories->nextPageUrl() }}">Next</a>
                      </li>
                      @else
                      <li class="page-item disabled">
                        <span class="page-link">Next</span>
                      </li>
                      @endif
                    </ul>
                  </nav>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function updatePagination() {
    const perPage = document.getElementById('perPage').value;
    window.location.href = `?perPage=${perPage}`;
  }
</script>
@endsection