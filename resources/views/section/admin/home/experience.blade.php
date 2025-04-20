<div class="col-lg-12 col-md-12  mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-12 col-12">
            <h6>Experience</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1">Work Experience </span> 
            </p>
          </div>
         
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
        
            <tbody>
            @foreach ($experience as $e )    
              <tr>
                  <td >
                      <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center text-wrap">
                            <h6 class="mb-0 text-sm">{{$e->title}}</h6>
                            <p class="text-xs text-secondary mb-0">{!!$e->details!!}</p>
                            <p> <strong>{{$e->sub_title_or_time}}</strong></p>
                          
                          </div>
                        </div>
                  </td>
                  <td style="max-width:40rem;width:100%" class="d-flex justify-content-between">
                    
                      <button class="btn btn-icon btn-primary btn-sm " type="button" data-bs-toggle="modal" data-bs-target="#experience_modal_edit_{{ $e->id }}">
                      <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                    <span class="btn-inner--text">Edit</span>
                  </button>
                  <form action="{{ route('experiences.destroy', $e->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this experience?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
                
                  </td>
              </tr>
            @endforeach
            <tfoot>
              <tr>
                <td></td>
                <td class="float-end"><button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#experience_modal_1">Add Skill</button></td>

              </tr>
            </tfoot>
           
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  
  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="experience_modal_1" tabindex="-1" role="dialog" aria-labelledby="experience_modal_1" aria-hidden="true">
      <form action="{{ route('experiences.store') }}" method="POST">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Experiences </h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="slug" class="col-form-label">Title</label>
              <input type="text" class="form-control" name="title" id-name="title" value="{{ old('title') }}"/>

            </div>      
            @csrf      
            
              <div class="form-group">
                <label for="slug" class="col-form-label">sub title or time </label>
                <input type="text" class="form-control" name="sub_title_or_time" id-name="sub_title_or_time" value="{{ old('sub_title_or_time') }}"/>

              </div>            
              <div class="form-group">
                <label for="slug" class="col-form-label"> Details </label>
                <x-rich-text-editor name="details" id-name="details" value="{{ old('details') }}" />

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
  @foreach ($experience as $e )    
  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="experience_modal_edit_{{ $e->id }}" tabindex="-1" role="dialog" aria-labelledby="faq_modal_title" aria-hidden="true">
      <form action="{{ route('experiences.update',$e->id) }}" method="POST">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update FAQ </h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            @csrf  
            @method('PUT')
            <div class="form-group">
              <label for="question_edit" class="col-form-label">Title</label>
              <input type="text" class="form-control" name="title"  value="{{  $e->title }}"/>

            </div>      
               
            
              <div class="form-group">
                <label for="ans_edit" class="col-form-label">Sub title Or Time</label>
                  <input type="text" class="form-control" name="sub_title_or_time"  value="{{  $e->sub_title_or_time }}"/>

                </div> 

              <div class="form-group">
                <label for="ans_edit" class="col-form-label">Details</label>
                <x-rich-text-editor name="details" id-name="details_edit{{ $e->id }}" value="{!! $e->details !!}" />
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