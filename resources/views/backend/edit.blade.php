@extends('backend.master')
@section('content')
    <div class="page-content">
        @if (session('success'))
            <x-alert type="success" message="{{ session('success') }}"></x-alert>
        @endif
        @if (session('danger'))
            <x-alert type="danger" message="{{ session('danger') }}"></x-alert>
        @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                            <a href=" "></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="" class="form form-vertical" action="{{ route('data.update', $dashboard->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="title" class="form-label"><span class="required"> * </span>
                                                Title</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                value="{{ $dashboard->title }}" placeholder="" required>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">
                                                Image</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                            @if ($dashboard->image)
                                                <a href="{{ asset($dashboard->image) }}" target="_blank">View
                                                    Invoice</a>
                                            @else
                                                No invoice
                                            @endif
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-6 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>
                                        Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
