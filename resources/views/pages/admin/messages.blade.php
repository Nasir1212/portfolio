@extends('layout.admin.layout')
@section('content')
<div class="container">
    <h5>Messages</h5>
<div class="card">
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->subject }}</td>
                <td>
                    <!-- View Button -->
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#messageModal{{ $message->id }}">
                        View
                    </button>

                    <!-- Delete Button (optional) -->
                    <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1" aria-labelledby="messageModalLabel{{ $message->id }}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="messageModalLabel{{ $message->id }}">Message from {{ $message->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p><strong>Email:</strong> {{ $message->email }}</p>
                            <p><strong>Subject:</strong> {{ $message->subject }}</p>
                            <hr>
                            <p>{{ $message->message }}</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
