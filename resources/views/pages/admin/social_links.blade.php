@extends('layout.admin.layout')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card my-4">
            <div class="card-header pb-0">
                <h6>Social Links</h6>
                <div class="text-end">
                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#add_social_link_modal">Add Social Link</button>
                </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>Facebook</th>
                                <th>WhatsApp</th>
                                <th>YouTube</th>
                                <th>LinkedIn</th>
                                <th>Instagram</th>
                                <th>Twitter</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($socialLinks as $link)
                                <tr>
                                    <td>{{ $link->facebook }}</td>
                                    <td>{{ $link->whatsapp }}</td>
                                    <td>{{ $link->youtube }}</td>
                                    <td>{{ $link->linkedin }}</td>
                                    <td>{{ $link->instagram }}</td>
                                    <td>{{ $link->twitter }}</td>
                                    <td>{{ $link->email }}</td>
                                    <td>{{ $link->phone }}</td>
                                    <td>{{ $link->address }}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit_social_link_modal_{{ $link->id }}">Edit</button>

                                        <form action="{{ route('admin.social-links.destroy', $link->id) }}" method="POST" onsubmit="return confirm('Delete this?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                {{-- Edit Modal --}}
                                <div class="modal fade" id="edit_social_link_modal_{{ $link->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form action="{{ route('admin.social-links.update', $link->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Social Link</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    @include('partials.admin.social-link-form', ['link' => $link])
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

        {{-- Add Modal --}}
        <div class="modal fade" id="add_social_link_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{ route('admin.social-links.store') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Social Link</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            @include('partials.admin.social-link-form', ['link' => null])
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
