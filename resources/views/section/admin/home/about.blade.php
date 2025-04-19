<div class="col-lg-12 col-md-12  mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-12 col-12">
            <h6>About Us Section</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1">Who I am </span>  
            </p>
          </div>
         
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <tbody>
              <tr>
                  <td  style="width:50%">
                    <div class="card h-100">
                      <div class="card-body p-3">
                        <h6 class="mb-0"> Your about</h6>
                        <p class="text-sm">
                        
                            {!! $about->about??'' !!}
                          
                        </p>
                        <hr class="horizontal gray-light my-4">
                        <h6 class="mb-0">Hire Toast </h6>
                        <p>{{$about->hire_toast??''}}</p>
                        <ul class="list-group">
                          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#about_modal">
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
    <div class="modal fade" id="about_modal" tabindex="-1" role="dialog" aria-labelledby="about_modal_title" aria-hidden="true">
      <form action="{{ route('abouts.update', $about->id) }}" method="POST">
      <div class="modal-dialog modal-dialog-centered" role="document">
          @csrf
          @method('PUT')
        <div class="modal-content overflow-scroll">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Your About Info</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Write your about</label>
                <x-rich-text-editor name="about" id-name="aboutEditor" value="{!!$about->about!!}" />
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Write Hire Toast </label>
                <input type="text" class="form-control" id="recipient-name" name="hire_toast" value="{{$about->hire_toast}}">
              </div>           
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn bg-gradient-primary">Update </button>
          </div>
        </div>
      </div>
    
    </div>
  </from>
  </div>



  
