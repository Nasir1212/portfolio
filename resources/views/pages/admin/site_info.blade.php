@extends('layout.admin.layout')

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card my-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Site Info</h6>
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#add_siteinfo_modal">Add Site Info</button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Profile Image</th>
                                <th>Logo</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siteInfos as $info)
                                <tr>
                                    <td>{{ $info->name }}</td>
                                    <td>{{ $info->slug }}</td>
                                    <td>
                                        @if($info->profile_img)
                                            <img src="{{ asset('storage/'.$info->profile_img) }}" alt="Profile" width="50">
                                        @endif
                                    </td>
                                    <td>
                                        @if($info->logo)
                                            <img src="{{ asset('storage/'.$info->logo) }}" alt="Logo" width="50">
                                        @endif
                                    </td>
                                    <td>{{ \Illuminate\Support\Str::limit($info->description, 50) }}</td>
                                    <td>
                                        <span class="badge bg-{{ $info->status ? 'success' : 'secondary' }}">
                                            {{ $info->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="d-flex">
                                        <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit_siteinfo_modal_{{ $info->id }}">Edit</button>
                                        <form action="{{ route('admin.siteinfo.destroy', $info->id) }}" method="POST" onsubmit="return confirm('Delete this site info?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                {{-- Edit Modal --}}
                                <div class="modal fade" id="edit_siteinfo_modal_{{ $info->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form action="{{ route('admin.siteinfo.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Site Info</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{-- @include('siteinfo.form', ['info' => $info]) --}}
                                                    @include('partials.admin.siteinfo_form', ['info' => $info])
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
        <div class="modal fade" id="add_siteinfo_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{ route('admin.siteinfo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Site Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @include('partials.admin.siteinfo_form', ['info' => null])
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
