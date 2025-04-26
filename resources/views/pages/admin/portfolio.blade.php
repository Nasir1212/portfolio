@extends('layout.admin.layout')
@section('content')

<div class="row">
  <div class="col-lg-12 col-12">
    <div class="row my-4">
      <div class="col-lg-12 col-md-12 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-12 col-12">
                <h6>Portfolio</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-check text-info" aria-hidden="true"></i>
                  <span class="font-weight-bold ms-1">My Portfolios</span>
                </p>
              </div>
            </div>
          </div>

          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <div class="float-end">
                <button class="btn btn-success btn-sm pr-1" type="button" data-bs-toggle="modal" data-bs-target="#portfolio_add_modal_1">Add Portfolio</button>
              </div>

              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($portfolios as $portfolio)
                  <tr>
                    <td>
                        <img style="width: 150px; height: 100px;" src="{{ asset('storage/'.$portfolio->image) }}" alt="">
                    </td>
                    <td>{{ $portfolio->title }}</td>
                    <td>{{ $portfolio->description }}</td>
                    <td style="max-width:14rem;" class="d-flex justify-content-between float-end w-100">
                      <button class="btn btn-icon btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#portfolio_edit_modal_{{ $portfolio->id }}">
                        <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                        <span class="btn-inner--text">Edit</span>
                      </button>

                      <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this portfolio?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>

      {{-- Add Modal --}}
      <div class="col-md-4">
        <div class="modal fade" id="portfolio_add_modal_1" tabindex="-1" role="dialog" aria-labelledby="portfolio_add_modal_1" aria-hidden="true">
          <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Upload Portfolio</h5>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

                <div class="modal-body">
                  @csrf
                  <div class="form-group">
                    <label for="image" class="col-form-label">Image</label>
                    <input type="file" class="form-control" name="image" required/>
                  </div>

                  <div class="form-group">
                    <label for="title" class="col-form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}" required/>
                  </div>

                  <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Enter Description">{{ old('description') }}</textarea>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn bg-gradient-primary">Upload</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      {{-- Edit Modals --}}
      @foreach ($portfolios as $portfolio)
      <div class="col-md-4">
        <div class="modal fade" id="portfolio_edit_modal_{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="portfolio_edit_modal_title" aria-hidden="true">
          <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Portfolio</h5>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

                <div class="modal-body">
                  <div class="form-group">
                    <label>Current Image</label><br>
                    <img style="width: 150px; height: 100px;" src="{{ asset('storage/'.$portfolio->image) }}" alt="">
                  </div>

                  <div class="form-group">
                    <label for="image" class="col-form-label">Change Image (optional)</label>
                    <input type="file" class="form-control" name="image"/>
                  </div>

                  <div class="form-group">
                    <label for="title" class="col-form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $portfolio->title) }}" required/>
                  </div>

                  <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description', $portfolio->description) }}</textarea>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn bg-gradient-primary">Update</button>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>

@endsection
