<div class="col-lg-12 col-md-12  mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-12 col-12">
            <h6>Slider Section</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1">Upload </span> Sliding Image 
            </p>
          </div>
         
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Slide Info</th>
                <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($sliders as $slider)  
              <tr>
                  <td >
                      <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('storage/' . $slider->slider_img) }}" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$slider->title }}</h6>
                            <p class="text-xs text-secondary mb-0">{{$slider->slug}}</p>
                          </div>
                        </div>
                  </td>
                  <td><button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#slider_modal_{{$slider->id}}">
                      <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                    <span class="btn-inner--text">Edit</span>
                  </button></td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @foreach ($sliders as $slider)  
  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="slider_modal_{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="slider_modal_{{$slider->id}}_title" aria-hidden="true">
      <form action="{{route('admin.sliders.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Your Slider Info</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="slider_img" class="col-form-label">Image</label>
                <input type="file" name="slider_img" class="form-control"  >
              </div>
              <div class="form-group">
                <label for="title" class="col-form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$slider->title}}" >
              </div>
              <div class="form-group">
                <label for="slug" class="col-form-label">Slug</label>
                <input type="text" class="form-control" name="slug" value="{{$slider->slug}}" >
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
