<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Exception;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        try {

            if ($request->ajax()) {
                $data = Dashboard::query();
                if ($request->startDate && $request->endDate) {
                    $data = $data->whereDate('created_at', '>=', $request->startDate)
                        ->whereDate('created_at', '<=', $request->endDate);
                }

                // if (!empty($request->patientId)) {
                //     $data = $data->where('patient_id', $request->patientId);
                // }

                $data = $data->get();

                return DataTables::of($data)->editColumn('title', function ($row) {
                    return $row->title ?? 'N/A';
                })
                    ->editColumn('image', function ($row) {

                        return $row->image;
                    })

                    ->editColumn('created_at', function ($row) {

                        return $row->created_at->format('d-m-Y h:i A');
                    })
                    ->addColumn('status', function ($row) {

                        if ($row->status == 1) {
                            return '<span class="badge bg-success mb-1">' . ($row->status == 0 ? "Inactive" : "Active") . '</span>';
                        } else {
                            return '<span class="badge bg-danger mb-1">' . ($row->status == 0 ? "Inactive" : "Active") . '</span>';
                        }
                    })
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '';

                        // if (in_array(auth()->user()->role_id, ['1', '2'])) {

                        // }
                        $btn .= '<a href="' . route('data.edit', $row->id) . '" class="btn btn-primary btn-table me-1"><i
                            class="fa fa-edit f-16"></i></a>';

                        $btn .= '<a href="' . route('data.destroy', $row->id) . '" onclick="onDelete(this)" class="btn btn-danger btn-table me-1"><i class="fa fa-trash-o f-16"></i>
                        </a>';
                        return $btn;
                    })
                    ->rawColumns(['action', 'status', 'title', 'image', 'created_at'])
                    ->make(true);
            }

            $user = Dashboard::get();
            return view('dashboard');
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
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);
        try {

            $data = new Dashboard();
            if ($request->hasFile('image')) {
                $image_file = $request->file('image');

                if ($image_file) {
                    $img_gen   = hexdec(uniqid());
                    $image_url = 'images/';
                    $image_ext = strtolower($image_file->getClientOriginalExtension());

                    $img_name      = $img_gen . '.' . $image_ext;
                    $image = $image_url . $img_gen . '.' . $image_ext;

                    $image_file->move($image_url, $img_name);
                }
            }

            $data->title = $request->title;
            $data->status = $request->status;
            $data->image  = $image ?? '';
            $data->save();
            DB::commit();
            return redirect()->route('dashboard')->withSuccess('Data created successfully');
        } catch (Exception $th) {
            DB::rollBack();

            return back()->withSuccess($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = [];
        $data['dashboard'] = Dashboard::find($id);
        return view('backend.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $data = Dashboard::find($id);

        if ($request->hasFile('image')) {
            $image_file = $request->file('image');

            if ($image_file) {
                $img_gen   = hexdec(uniqid());
                $image_url = 'images/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name      = $img_gen . '.' . $image_ext;
                $image = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                $data->image = $image;
                $data->save();
            }
        }
        $data->title = $request->title;
        $data->save();
        DB::commit();
        return redirect()->route('dashboard')->withSuccess('Data Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datas = Dashboard::find($id);
        if ($datas->image !== null) {
            unlink(public_path($datas->image));
        }
        $datas->delete();
        return redirect()->back();
    }
}
