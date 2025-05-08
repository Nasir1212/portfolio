@extends('layout.admin.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between my-4">
        <h2>Services</h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addServiceModal">Add Service</button>
    </div>
<div class="card">
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Toast</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>
                    @if($service->image)
                        <img src="{{ asset('storage/'.$service->image) }}" width="100" alt="">
                    @endif
                </td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->price }}</td>
                <td>{{ $service->toast }}</td>
                <td>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editServiceModal_{{ $service->id }}">Edit</button>
                    
                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this service?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editServiceModal_{{ $service->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control my-2" name="title" value="{{ old('title', $service->title) }}" placeholder="Title">
                                <input type="text" class="form-control my-2" name="price" value="{{ old('price', $service->price) }}" placeholder="Price">
                                <input type="text" class="form-control my-2" name="toast" value="{{ old('toast', $service->toast) }}" placeholder="Toast">
                               
                                <x-rich-text-editor name="details" placeholder="Enter Here" id-name="details-update-{{ $service->id }}" value="{{ old('details',$service->details) }}" />

                                <input type="file" class="form-control my-2" name="image">
                                @if($service->image)
                                    <img src="{{ asset('storage/'.$service->image) }}" width="100" alt="">
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update Service</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>
    <!-- Add Modal -->
    <div class="modal fade modal-xl" id="addServiceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control my-2" name="title" placeholder="Title">
                        <input type="text" class="form-control my-2" name="price" placeholder="Price">
                        <input type="text" class="form-control my-2" name="toast" placeholder="Toast">
                        <div class="mb-3">
                            <label for="details-update-{{ $service->id }}" class="form-label">Details</label>
                            
                            <x-rich-text-editor name="details" id-name="details-add" value="{{ old('details') }}" />
                        </div>

                        <input type="file" class="form-control my-2" name="image">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save Service</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
