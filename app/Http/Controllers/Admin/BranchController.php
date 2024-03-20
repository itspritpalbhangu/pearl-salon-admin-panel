<?php

namespace App\Http\Controllers\Admin;


use App\Models\Branch;
use Yajra\DataTables\DataTables;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    public function __construct()
    {     
        $this->branch = new Branch();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $branchList = $this->branch->getBranchList();         
        if ($request->ajax()) 
        {
            return DataTables::of($branchList)
            ->addIndexColumn()
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('email', function ($row) {
                return $row->email;
            })
            ->addColumn('address', function ($row) {
                return $row->address;
            })
            ->addColumn('contact', function ($row) {
                return $row->address;
            })
            ->addColumn('opened_on', function ($row) {
                return $row->address;
            })
            ->editColumn('action', 'admin.branch.action')
            ->rawColumns(['name','email','address','contact','opened_on','action'])
            ->make(true);
        }
        return view('admin.branch.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchRequest $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
