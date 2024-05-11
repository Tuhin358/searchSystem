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
                        <form id="" class="form form-vertical" action="{{ route('data.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="title" class="form-label"><span class="required"> * </span>
                                                Title</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                value="{{ old('title') }}" placeholder="" required>
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
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-3 mt-4">
                                    <div class="form-group">
                                        <label for="status" class="form-label"><span class="required">* </span>
                                            Status</label>
                                        <div class="btn-group ms-2" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="status" value="1"
                                                id="active" autocomplete="off" required checked>
                                            <label class="btn btn-outline-primary" for="active">ACTIVE</label>

                                            <input type="radio" class="btn-check" name="status" value="0"
                                                id="inactive" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="inactive">INACTIVE</label>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('status')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>




                            <div class="row mt-5">
                                <div class="col-6 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>
                                        Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
