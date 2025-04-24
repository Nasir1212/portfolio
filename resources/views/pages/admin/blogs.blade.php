@extends('layout.admin.layout')
@section('content')
<div class="row">
  <div class="col-lg-12 col-12">
    <div class="row my-4">
    
    
      <div class="col-lg-12 col-md-12  mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-12 col-12">
                <h6>Blog</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-check text-info" aria-hidden="true"></i>
                  <span class="font-weight-bold ms-1">My Blog</span> 
                </p>
              </div>
             
            </div>
          </div>
          <div class="card-body px-0 pb-2">
           
            <div class="table-responsive">
                <div class="float-end">
                    <button class="btn btn-success btn-sm pr-1" type="button" data-bs-toggle="modal" data-bs-target="#blog_add_modal_1">Add Blogs</button>
    
                </div>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <td>Image/Video</td>
                    <td>Title</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                @foreach ($blog as $b )    
                  <tr>
                    @if($b->type ==0)
                    <td>
                        <iframe width="150" height="100" src="{{ $b->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </td>
                    @else
                    <td>
                        <img style="width: 150px;height:100px" src="{{ asset($b->image) }}" alt="">
                    </td>
                    @endif
                    <td>
                        {{ $b->title }}
                    </td>
             
                      <td style="max-width:14rem;" class="d-flex justify-content-between float-end w-100">
                        
                          <button class="btn btn-icon btn-primary btn-sm " type="button" data-bs-toggle="modal" data-bs-target="#blog_edit_modal_{{ $b->id }}">
                          <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                        <span class="btn-inner--text">Edit</span>
                      </button>
                      <form action="{{route('admin.blogs.destroy',$b->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete this experience?');">
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
    

   
      {{-- @push("mymodal") --}}
      <div class="col-md-4">
        <!-- Modal -->
        <div class="modal fade" id="blog_add_modal_1" tabindex="-1" role="dialog" aria-labelledby="blog_add_modal_1" aria-hidden="true">
          <form action="{{ route('admin.blogs.store')}}" method="POST" enctype="multipart/form-data">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Your Blog </h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="form-group">
                  <label for="" class="col-form-label">Image Or Video</label>
                  <select class="form-control" name="type" onchange="handle_video_img(this)">
                    <option> select</option>
                    <option selected="{{ old('type')==0?true:false }}" value="0">Youtube </option>
                    <option  selected="{{ old('type')==1?true:false }}" value="1">Image </option>
                  </select>
                </div>  

                <div class="form-group d-none">
                  <label for="" class="col-form-label">Image</label>
                  <input type="file" class="form-control" name="image"/>
                </div>  

                <div class="form-group d-none">
                  <label for="" class="col-form-label">Youtube Link</label>
                  <input type="text" class="form-control"  placeholder="Enter Embed youtube link" name="video"  value="{{ old('video') }}"/>
                </div>  
                <div class="form-group ">
                  <label for="" class="col-form-label">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Enter Title"  value="{{ old('title') }}"/>
                </div>                  
                @csrf                
                <div class="form-group">
                    <label for="slug" class="col-form-label"> Blog </label>
                <x-rich-text-editor name="blog" id-name="blog" value="{!! old('blog')!!}" />
    
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

       
      @foreach ($blog as $b)    

        <div class="col-md-4">
            <!-- Modal -->
            <div class="modal fade" id="blog_edit_modal_{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="blog_edit_modal_title" aria-hidden="true">
              <form action="{{ route('admin.blogs.update',$b->id)}}" method="POST" enctype="multipart/form-data">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Your Blog </h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div> 
                    @if($b->type ==0)
                        <iframe width="150" height="100" src="{{ $b->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @else
                        <img style="width: 150px;height:100px" src="{{ asset($b->image) }}" alt="">
                    @endif
                     </div>
                     @php
                  
                 @endphp
                 
                 <div class="form-group">
                     <label class="col-form-label">Image Or Video</label>
                     <select class="form-control" name="type" onchange="handle_video_img_update(this,'{{ $b->id }}')">
                         <option value="">Select</option>
                         <option value="0" {{ $b->type == 0 ? 'selected' : '' }}>Youtube</option>
                         <option value="1" {{ $b->type == 1 ? 'selected' : '' }}>Image</option>
                     </select>
                 </div>
    
                    <div id="imageInput_{{ $b->id }}" class="form-group {{ $b->type == 1 ? '' : 'd-none' }}">
                      <label for="" class="col-form-label">Image</label>
                      <input type="file" class="form-control" name="image"/>
                    </div>  
    
                    <div id="videoInput_{{ $b->id }}" class="form-group {{ $b->type == 0 ? '' : 'd-none' }}">
                      <label for="" class="col-form-label">Youtube Link</label>
                      <input type="text" class="form-control"  placeholder="Enter Embed youtube link" name="video"  value="{{$b->video}}"/>
                    </div>  
                    <div class="form-group ">
                      <label for="" class="col-form-label">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title"  value="{{ old('title',$b->title) }}"/>
                    </div>                  
                    @csrf
                    @method('PUT')                
                    <div class="form-group">
                        <label for="slug" class="col-form-label"> Blog </label>
                    <x-rich-text-editor name="blog" id-name="blogs_id_{{ $b->id }}" value="{!! $b->blog!!}" />
        
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
  
      @endforeach
     
      {{-- @endpush  --}}

      </div>
    </div>
  
  </div> 

  @endsection

  @push('scripts')
  <script>
    function handle_video_img(el){
      let v = el.value;
      document.querySelector('input[name="image"]').closest('.form-group').classList.toggle('d-none', v !== '1');
      document.querySelector('input[name="video"]').closest('.form-group').classList.toggle('d-none', v !== '0');
    }
    document.addEventListener('DOMContentLoaded', () => handle_video_img(document.querySelector('select[name="type"]')));

    function handle_video_img_update(selectElement,id) {
        const selectedType = selectElement.value;

        const imageInput = document.getElementById(`imageInput_${id}`);
        const videoInput = document.getElementById(`videoInput_${id}`);

        if (selectedType === '1') {
            imageInput.classList.remove('d-none');
            videoInput.classList.add('d-none');
        } else if (selectedType === '0') {
            videoInput.classList.remove('d-none');
            imageInput.classList.add('d-none');
        } else {
            imageInput.classList.add('d-none');
            videoInput.classList.add('d-none');
        }
    }

    // On page load, trigger it based on existing value
    // window.addEventListener('DOMContentLoaded', function () {
    //     const selectElement = document.getElementById('typeSelect');
    //     if (selectElement) {
    //         handle_video_img_update(selectElement);
    //     }
    // });
    </script>
    
  @endpush