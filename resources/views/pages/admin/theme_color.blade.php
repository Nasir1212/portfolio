@extends('layout.admin.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header pb-0 d-flex justify-content-between">
                <h6>Theme Colors</h6>
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addThemeModal">Add Theme</button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Primary</th>
                                <th>Secondary</th>
                                <th>Base</th>
                                <th>Accent</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($themes as $theme)
                            <tr>
                                <td>{{ $theme->name }}</td>
                                <td><span style="background:{{ $theme->primary }};" class="badge">{{ $theme->primary }}</span></td>
                                <td><span style="background:{{ $theme->secondary }};" class="badge">{{ $theme->secondary }}</span></td>
                                <td><span style="background:{{ $theme->base }};" class="badge">{{ $theme->base }}</span></td>
                                <td><span style="background:{{ $theme->accent }};" class="badge">{{ $theme->accent }}</span></td>
                                <td>
                                    <span class="badge {{ $theme->status ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $theme->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="d-flex">
                                    <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editThemeModal{{ $theme->id }}">Edit</button>
                                    <form action="{{ route('admin.theme-colors.destroy', $theme->id) }}" method="POST" onsubmit="return confirm('Delete this theme?');">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editThemeModal{{ $theme->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <form method="POST" action="{{ route('admin.theme-colors.update', $theme->id) }}">
                                        @csrf @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Theme</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                @include('partials.admin.theme_color_form', ['theme' => $theme])
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
        <div class="modal fade" id="addThemeModal" tabindex="-1">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('admin.theme-colors.store') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Theme</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @include('partials.admin.theme_color_form', ['theme' => null])
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
