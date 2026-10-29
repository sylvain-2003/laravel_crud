@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!--Page Header-->
                <div class="d-flex justify-content-between align-items-center mb-4 pb-3">
                    <div>
                        <h2 class="text-dark-emphasis m-0 nb-1">Create Note</h2>
                        <P class="text-muted m-0">Update your note détails</P>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body p-4">
                        <form action="{{route('notes.update', $note->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="nb-4">
                                <label for="title" class="form-label">Title</label>
                                <input 
                                type="text"
                                name="title"
                                id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title', $note->title)}}"
                                placeholder="Entrer a description title"
                                autofocus>
                                @error('title')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="nb-4">
                                <label for="content" class="form-label">Content</label>
                                <textarea 
                                id="content" 
                                name="content"
                                class="form-control"
                                rows="8"
                                placeholder="Write your note content here...">{{ old('content', $note->content)}}</textarea>
                                @error('content')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-info" type="submit">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection