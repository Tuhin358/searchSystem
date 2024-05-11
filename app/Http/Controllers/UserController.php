<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;
// use DataTables;

class UserController extends Controller
{

     public function loginPage() {
      
        return view('user.login');
       
    }

    /**
     * Display a listing of the resource.
     */
    // public function indexaa(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = User::select('*');

    //         if ($request->startDate && $request->endDate) {
    //             $data = $data->whereDate('created_at', '>=', $request->startDate)
    //                 ->whereDate('created_at', '<=', $request->endDate);
    //         }

    //         return DataTables::of($data)->addIndexColumn()->make(true);
    //     }
    //     return view('user');
    // }

    public function index(Request $request) {
        try {

            if ($request->ajax()) {
                $data = User::query();
                if ($request->startDate && $request->endDate) {
                    $data = $data->whereDate('created_at', '>=', $request->startDate)
                        ->whereDate('created_at', '<=', $request->endDate);
                }

                // if (!empty($request->patientId)) {
                //     $data = $data->where('patient_id', $request->patientId);
                // }

                $data = $data->get();

                return DataTables::of($data)->editColumn('name', function ($row) {
                    return $row->name ?? 'N/A';
                })
                    ->editColumn('email', function ($row) {

                        return $row->email;
                    })

                    ->editColumn('created_at', function ($row) {

                        return $row->created_at->format('d-m-Y h:i A');
                    })
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '';

                        // if (in_array(auth()->user()->role_id, ['1', '2'])) {

                        // }
                        $btn .= '<a href="" class="btn btn-primary btn-table me-1"><i
                            class="fa fa-edit f-16"></i></a>';

                        $btn .= '<a href="" class="btn btn-info btn-table me-1"><i
                                    class="fa fa-eye f-16"></i></a>';

                        // if (in_array(auth()->user()->role_id, ['1', '2'])) {
                        //     $btn .= '<button data-bs-toggle="modal" data-bs-target="#danger" onclick="onDelete(this)" id="' . route('p_sell.destroy', $row->id) . '" name="delBtn"
                        //             class="btn btn-danger f-16 del btn-table "><i class="fa fa-trash-o f-16"></i></button>';
                        // }

                        return $btn;
                    })
                    ->rawColumns(['action', 'name', 'email', 'created_at'])
                    ->make(true);
            }

            $user = User::get();
            return view('user');
            // return view('pharmacy.sell.index', compact('patient'));
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}