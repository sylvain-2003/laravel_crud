@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!--Page Header-->
                <div class="d-flex justify-content-between align-items-center nb-4">
                    <div>
                        <h2 class="text-dark-emphasis m-0 nb-1">View Notes</h2>
                        <p class="text-muted nb-0">Note details and content</p>
                    </div>
                    <a href="{{ route('notes.index')}}" class="btn btn-warning">
                        Back to Notes
                    </a>
                </div>

                <div class="card">
                    <div class="card-body p-4">
                        {{-- Note Title --}}
                        <div class="nb-4 pb-3 border-bottom" style="border-color: #30363d !important">
                            <label class="text-muted text-uppercase small nb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Title</label>
                            <h3 class="text-dark-emphasis m-0">{{ $note->title }} </h3>
                        </div>

                        <div class="nb-4">
                            <label class="text-muted text-uppercase small nb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Content</label>
                            <p class="text-dark-emphasis m-0" style="line-height: 1.7; white-space: pre-wrap;">{{ $note->content }} </p>
                        </div>

                        <div class="pt-3 border-top" style="border-color: #30363d !important">
                            <div class="row g-3">
                                <div col-md-6>
                                    <small class="text-muted d-block">Created</small>
                                    <small class="text-dark-emphasis">
                                        {{ $note->created_at ->diffForHumans()}}
                                    </small>
                                </div>

                                <div col-md-6>
                                    <small class="text-muted d-block">Last Updated</small>
                                    <small class="text-dark-emphasis">
                                        {{ $note->updated_at ->diffForHumans()}}
                                    </small>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
