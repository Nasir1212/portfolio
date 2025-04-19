<div class="col-lg-12 col-md-12  mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-12 col-12">
            <h6>WorkFlow Section</h6>
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
           
              <tbody>
                <tr>
                    <td  style="">
                      <div class="card h-100">
                        <div class="card-body p-3">
                          <h6 class="mb-0">Workflow Banner</h6>
                           <div >
                            <img  src="{{asset('assets/images/img_bg_1.jpg')}}" style="max-width: 600px;width:100%;height:200px" alt="">
                           </div>
                          <hr class="horizontal gray-light my-4">
                          <div class="d-flex">
                            <div>Got tips: <strong> 50 </strong></div>
                            <div>Projects: <strong> 760 </strong></div>
                            <div>Clients: <strong> 340 </strong></div>
                            <div>Partners: <strong> 50 </strong></div>
                          </div>
                         
                          <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#work_flow_modal_{{$work_flow->id}}">
                              <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                            <span class="btn-inner--text">Edit</span>
                          </button></li>
                           
                          </ul>
                        </div>
                      </div>
                    </td>
                 
                </tr>
            
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="work_flow_modal_{{$work_flow->id}}" tabindex="-1" role="dialog" aria-labelledby="work_flow_modal_{{$work_flow->id}}_title" aria-hidden="true">
      <form action="{{route('workflows.update',$work_flow->id)}}" method="POST" enctype="multipart/form-data">
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
                <label for="slider_img" class="col-form-label">Banner</label>
                <input type="file" name="banner" class="form-control"  >
              </div>
              <div class="form-group">
                <label for="title" class="col-form-label"> Got tips </label>
                <input type="text" class="form-control" name="got_tips" value="{{$work_flow->got_tips}}" >
              </div>
              <div class="form-group">
                <label for="slug" class="col-form-label">Projects</label>
                <input type="text" class="form-control" name="projects" value="{{$work_flow->projects}}" >
              </div>
              <div class="form-group">
                <label for="slug" class="col-form-label">Clients</label>
                <input type="text" class="form-control" name="clients" value="{{$work_flow->clients}}" >
              </div>
              <div class="form-group">
                <label for="slug" class="col-form-label">Partners</label>
                <input type="text" class="form-control" name="partners" value="{{$work_flow->partners}}" >
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

