<div class="col-lg-12 col-md-12  mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-12 col-12">
            <h6>More Quation Section</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1">FAQ </span> 
            </p>
          </div>
         
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FAQ Info</th>
                <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width:14rem">Action </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($faq as $f )    
              <tr>
                 
                  <td >
                      <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$f->question}}</h6>
                            <p class="text-xs text-secondary mb-2 text-wrap">{!! $f->ans !!}</p>
                          </div>
                        </div>
                  </td>
                  <td class="d-flex justify-content-between">
                    <button class="btn btn-icon btn-3 btn-primary btn-sm " type="button"  data-bs-toggle="modal" data-bs-target="#faq_modal_edit_{{ $f->id }}" >
                      <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                    <span class="btn-inner--text">Edit</span>
                  </button>

                  <form action="{{ route('admin.faqs.destroy', $f->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-gradient-danger btn-sm ">Delete</button>
                </form>
                
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr >
                <td style="border: none"></td>
                <td style="border: none" class="float-end"> <button  data-bs-toggle="modal" data-bs-target="#faq_modal_1"  class="btn btn-sm btn-success">Add New</button> </td>

              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="faq_modal_1" tabindex="-1" role="dialog" aria-labelledby="faq_modal_title" aria-hidden="true">
      <form action="{{ route('admin.faqs.store') }}" method="POST">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload FAQ </h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="slug" class="col-form-label">Question</label>
              <input type="text" class="form-control" name="question" id-name="question" value="{{ old('question') }}"/>

            </div>      
            @csrf      
            
              <div class="form-group">
                <label for="slug" class="col-form-label">Answer</label>
                <x-rich-text-editor name="ans" id-name="ans" value="{{ old('ans') }}" />
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
  @foreach ($faq as $f )    
  <div class="col-md-4">
    <!-- Modal -->
    <div class="modal fade" id="faq_modal_edit_{{ $f->id }}" tabindex="-1" role="dialog" aria-labelledby="faq_modal_title" aria-hidden="true">
      <form action="{{ route('admin.faqs.update',$f->id) }}" method="POST">
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
              <label for="question_edit" class="col-form-label">Question</label>
              <input type="text" class="form-control" name="question"  value="{{  $f->question }}"/>

            </div>      
               
            
              <div class="form-group">
                <label for="ans_edit" class="col-form-label">Answer</label>
                <x-rich-text-editor name="ans" id-name="ans_edit_{{ $f->id }}" value="{!! $f->ans !!}" />
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