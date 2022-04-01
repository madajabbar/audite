<?php

namespace App\Http\Controllers\Admin\RiskAssessment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\RiskAssessment;
class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $risk_assessment = RiskAssessment::latest();
            return DataTables::of($risk_assessment)
                ->addColumn('action', function ($content) {
                    return '
                    <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$content->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="icon dripicons-search"></i></a>
                    ';
                })
                // ->removeColumn('id')
                ->addIndexColumn()
                ->editColumn('updated_at',function($content){
                    return $content->updated_at->format('d-m-Y');

                 })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = 'Risk Assessment';
        $data['subtitle'] = 'Daftar Risk Assessment';
        // $data['team'] = LfsTeam::all();
        return view('admin.risk_assessment.assessment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
