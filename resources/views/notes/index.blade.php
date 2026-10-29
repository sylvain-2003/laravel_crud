@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                {{-- success message --}}
                @include('partials.success-message')
                <!--Page Header-->
                <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                    <div>
                        <h2 class="fw-bold mb-2">Notes</h2>
                        <p class="text-muted mb-0">Manage all your notes in on place</p>
                    </div>
                    <a href="{{ route('notes.create')}}" class="btn btn-info">
                        Create New Note
                    </a>
                </div>

                <!--Table displaying notes-->
                <table class="table table-striped table-hover table-bordered border border-info-subtle">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($notes as $note)
                        <tr>
                            <th scope="row">{{$note->id}}</th>
                            <td>{{$note->title}}</td>
                            <td>{{Str::limit($note->content, 30) }}</td>
                            <td class="d-flex">
                                <a href="{{ route('notes.show', $note->id)}}" class="btn btn-primary me-2">Show</a>
                                <a href="{{ route('notes.edit', $note->id)}}" class="btn btn-warning me-2">Edit</a>
                                <form action="{{ route('notes.destroy', $note->id)}}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this note?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="5" class="text-center">No note found !</td>
                        @endforelse
                    </tbody>
                </table>
                {{-- PAGINATION --}}
                <div class="d-flex justify-content-end mt-4">
                    {{ $notes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
