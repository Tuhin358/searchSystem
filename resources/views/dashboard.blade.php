@extends('backend.master')
@section('content')

    <body>
        <div class="container pt-5">
            <h4 class="text-center text-success mt-5 mb-5"><b>Dashboard</b></h4>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3 mb-1">
                            <input type="date" class="form-control input-daterange" id="startDate">
                        </div>
                        <div class="col-md-3 mb-1">
                            <input type="date" class="form-control input-daterange" id="endDate">
                        </div>


                        <div class="col-md-3 mb-1">
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-info btn-sm" type="button" id="filter">Filter</button>
                                <button class="btn btn-info btn-sm" type="button" id="refresh">Refresh</button>
                                <a href="{{ route('data.create') }}" class="btn btn-success">Create</a>

                            </div>
                        </div>
                        <div class="col-md-3 mb-1">
                            <div class="d-flex justify-content-around">

                                <!-- Settings Dropdown -->
                                <div class="hidden sm:flex sm:items-center sm:ms-6">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ms-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="daterange_table">
                        <thead>
                            <tr>
                                <th>{{ 'SL' }}</th>
                                <th>{{ 'Title' }}</th>
                                <th>{{ 'Image' }}</th>
                                <th>{{ 'Created At' }}</th>
                                <th>{{ 'Status' }}</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
@endsection
