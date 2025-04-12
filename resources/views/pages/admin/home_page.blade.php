@extends('layout.admin.layout')
@section('content')
<div class="row">
  <div class="col-lg-12 col-12">
    <div class="row my-4">
      
      @include('section.admin.home.slider')
      @include('section.admin.home.about')
        @include('section.admin.home.workflow')
        @include('section.admin.home.specialty')
        @include('section.admin.home.faq')
        @include('section.admin.home.experience')
      </div>
    
    </div>
  
  </div>
 
 

<div class="col-md-4">
   

    <!-- Modal -->
    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" value="Creative Tim" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn bg-gradient-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  

 
  @endsection