@extends('layout.admin.layout')
@section('content')

<div class="row">
  <div class="col-lg-12 col-12">
    <div class="row my-4">
      <div class="col-lg-12 col-md-12 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-12 col-12">
                <h6>Orders</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-check text-info" aria-hidden="true"></i>
                  <span class="font-weight-bold ms-1">Customer Orders</span>
                </p>
              </div>
            </div>
          </div>

          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <div class="float-end mb-3 me-3">
                <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#order_add_modal_1">Add Order</button>
              </div>

              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Service</th>
                    <th>Price</th>
                    <th>File</th>
                    <th>Details</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->service }}</td>
                    <td>{{ $order->price }}</td>
                    <td>
                      @if($order->essential_file)
                        <a href="{{ asset('storage/'.$order->essential_file) }}" target="_blank">View File</a>
                      @else
                        No File
                      @endif
                    </td>
                    <td>{{ $order->details }}</td>
                    <td class="d-flex justify-content-between">
                      <button class="btn btn-icon btn-primary btn-sm me-2" type="button" data-bs-toggle="modal" data-bs-target="#order_edit_modal_{{ $order->id }}">
                        <i class="fas fa-edit"></i> Edit
                      </button>

                      <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                      </form>
                      <a href="{{route('admin.orders.show',$order->id)}}" class="btn btn-icon btn-primary btn-sm me-2" target="_blank" rel="noopener noreferrer"></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>

      {{-- Add Modal --}}
      <div class="modal fade" id="order_add_modal_1" tabindex="-1" role="dialog" aria-labelledby="order_add_modal_1" aria-hidden="true">
        <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Order</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="form-group mb-3">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group mb-3">
                  <label>Phone</label>
                  <input type="text" class="form-control" name="phone" required>
                </div>

                <div class="form-group mb-3">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group mb-3">
                  <label>Service</label>
                  <input type="text" class="form-control" name="service" required>
                </div>

                <div class="form-group mb-3">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" required>
                </div>

                <div class="form-group mb-3">
                  <label>Essential File (optional)</label>
                  <input type="file" class="form-control" name="essential_file">
                </div>

                <div class="form-group mb-3">
                  <label>Details</label>
                  <textarea class="form-control" name="details" rows="3" required></textarea>
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn bg-gradient-primary">Save Order</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      {{-- Edit Modals --}}
      @foreach ($orders as $order)
      <div class="modal fade" id="order_edit_modal_{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="order_edit_modal_{{ $order->id }}" aria-hidden="true">
        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Order</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="form-group mb-3">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{ old('name', $order->name) }}" required>
                </div>

                <div class="form-group mb-3">
                  <label>Phone</label>
                  <input type="text" class="form-control" name="phone" value="{{ old('phone', $order->phone) }}" required>
                </div>

                <div class="form-group mb-3">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email', $order->email) }}" required>
                </div>

                <div class="form-group mb-3">
                  <label>Service</label>
                  <input type="text" class="form-control" name="service" value="{{ old('service', $order->service) }}" required>
                </div>

                <div class="form-group mb-3">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" value="{{ old('price', $order->price) }}" required>
                </div>

                <div class="form-group mb-3">
                  <label>Change Essential File (optional)</label>
                  <input type="file" class="form-control" name="essential_file">
                  @if($order->essential_file)
                  <small>Current file: <a href="{{ asset('storage/'.$order->essential_file) }}" target="_blank">View</a></small>
                  @endif
                </div>

                <div class="form-group mb-3">
                  <label>Details</label>
                  <textarea class="form-control" name="details" rows="3" required>{{ old('details', $order->details) }}</textarea>
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn bg-gradient-primary">Update Order</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      @endforeach

    </div>
  </div>
</div>

@endsection
