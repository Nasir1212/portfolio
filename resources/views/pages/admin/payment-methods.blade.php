@extends('layout.admin.layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h6>Payment Methods</h6>
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#add_payment_method_modal">Add Payment Method</button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Var</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($methods as $method)
                                <tr>
                                    <td>{{ $method->name }}</td>
                                    <td>
                                        @if($method->logo)
                                            <img src="{{ asset('storage/' . $method->logo) }}" alt="logo" width="50">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ $method->var }}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit_payment_method_modal_{{ $method->id }}">Edit</button>

                                        <form action="{{ route('admin.payment-methods.destroy', $method->id) }}" method="POST" onsubmit="return confirm('Delete this payment method?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="edit_payment_method_modal_{{ $method->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form action="{{ route('admin.payment-methods.update', $method->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Payment Method</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $method->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Var</label>
                                                        <textarea name="var" class="form-control">{{ $method->var }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Logo</label>
                                                        <input type="file" class="form-control" name="logo">
                                                        @if($method->logo)
                                                            <img src="{{ asset('storage/' . $method->logo) }}" alt="logo" width="50" class="mt-2">
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="add_payment_method_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{ route('admin.payment-methods.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Payment Method</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Var</label>
                                <textarea name="var" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
