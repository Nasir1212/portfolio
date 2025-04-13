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
              <tr>
                 
                  <td >
                      <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/images/img_bg_1.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">I am <br>
                              a Marketer</h6>
                            <p class="text-xs text-secondary mb-0">100% html5 bootstrap templates Made by colorlib.com</p>
                          </div>
                        </div>
                  </td>
                  <td><button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalMessage">
                      <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                    <span class="btn-inner--text">Edit</span>
                  </button></td>
              </tr>
              <tr>
                 
                  <td >
                      <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/images/img_bg_1.jpg')}}" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Frelancer Tasfia</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                  </td>
                  <td><button class="btn btn-icon btn-3 btn-primary" type="button">
                      <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                    <span class="btn-inner--text">Edit</span>
                  </button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Your Slider Info</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Image</label>
                <input type="file" class="form-control"  >
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Title</label>
                <input type="text" class="form-control" value="Creative Tim" >
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Slug</label>
                <input type="text" class="form-control" value="Creative Tim" >
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-primary">Upload</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
