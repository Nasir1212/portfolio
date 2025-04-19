<style>
  .c_progress {
    width: 403px !important;
   
}
</style>

<div class="col-lg-12 col-md-12  mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-12 col-12">
            <h6> My Specialty</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1">My Skills</span>  
            </p>
          </div>
         
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
          
            <tbody>
              <tr>
                 <td >
                      <div class="d-flex px-2 py-1 row">
                          <div class="d-flex flex-column justify-content-center col-12 overflow-x-scroll">
                          <div class="d-flex justify-content-between"> 
                            <h5>Brief About My Skill</h5>
                            <button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#about_skill_1">
                              <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                            <span class="btn-inner--text">Edit</span>
                          </button>
                            </div>  
                            <div class="text-wrap">
                              {!!$specialty[0]->content!!}
                            </div>
                            </div>
                        </div> 
                  </td>
              </tr>
              <tr>
                  <td >
                    <ul class="list-group">

                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0 ">
                        <div style="max-width:30rem;width:100%" class="d-flex">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">80%</span>
                          </div>
                          <div>
                            <div class="progress progress-md c_progress">
                              <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <a href="" class="btn btn-sm btn-danger">delete</a>
                      </div>
                      </li>

                   
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0 ">
                        <div style="max-width:30rem;width:100%" class="d-flex">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">80%</span>
                          </div>
                          <div>
                            <div class="progress progress-md c_progress">
                              <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <a href="" class="btn btn-sm btn-danger">delete</a>
                      </div>
                      </li>

                  
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0 ">
                        <div style="max-width:30rem;width:100%" class="d-flex">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">80%</span>
                          </div>
                          <div>
                            <div class="progress progress-md c_progress">
                              <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <a href="" class="btn btn-sm btn-danger">delete</a>
                      </div>
                      </li>

                  
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0 ">
                        <div style="max-width:30rem;width:100%" class="d-flex">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">80%</span>
                          </div>
                          <div>
                            <div class="progress progress-md c_progress">
                              <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <a href="" class="btn btn-sm btn-danger">delete</a>
                      </div>
                      </li>

                  
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0 ">
                        <div style="max-width:30rem;width:100%" class="d-flex">
                        <div class="w-100">
                          <div class="d-flex mb-2">
                            <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                            <span class="ms-auto text-sm font-weight-bold">60%</span>
                          </div>
                          <div>
                            <div class="progress progress-md c_progress">
                              <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <a href="" class="btn btn-sm btn-danger">delete</a>
                      </div>
                      </li>

                    </ul>
                  </td>
                 
              </tr>
            </tbody>
            <footer>
              <tr>
                
                <td class="float-end"><button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#skill_adding_modal">Add Skill</button></td>
              </tr>
            </footer>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="about_skill_1" tabindex="-1" role="dialog" aria-labelledby="about_skill_title" aria-hidden="true">
      <form action="{{ route('specialties.update',$specialty[0]->id) }}" method="POST">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Briefing About Your Skill Info</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              @csrf
              @method('PUT')
            
              <div class="form-group">
                <label for="slug" class="col-form-label">About Your Skill</label>
                <x-rich-text-editor name="content" id-name="contentEditor" value="{!!$specialty[0]->content!!}" />
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

  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="skill_adding_modal" tabindex="-1" role="dialog" aria-labelledby="skill_adding_modal_title" aria-hidden="true">
      <form action="{{ route('specialties.store') }}" method="POST">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Briefing About Your Skill Info</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              @csrf
              <div class="form-group">
                <label for="slug" class="col-form-label">Skill Name</label>
                <input type="text" class="form-control" name="skill_name" value="" />
              </div>

              <div class="form-group">
                <label for="slug" class="col-form-label">Skill Range %</label>
                <input type="text" class="form-control" name="skill_range" value="" />
              </div>
              <div class="form-group">
                <label for="slug" class="col-form-label">Color</label>
                <input type="color" style="height: 7rem;width: 14rem;float: right;" class="form-control" name="skill_color" value="" />
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