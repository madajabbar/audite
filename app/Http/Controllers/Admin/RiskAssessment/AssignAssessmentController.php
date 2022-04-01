<?php

namespace App\Http\Controllers\Admin\RiskAssessment;

use App\Http\Controllers\Controller;
use App\Models\RiskAssessment;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AssignAssessmentController extends Controller
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
                             <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$content->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm editProduct"><i class="fa fa-pencil-square-o"></i></a>
                             <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$content->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i></a>
                             ';
                })
                // ->removeColumn('id')
                ->addIndexColumn()

                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = 'Risk Assessment';
        $data['subtitle'] = 'Daftar Perencanaan Risk Assessment';
        return view('admin.risk_assessment.assign_assessment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Risk Assessment';
        $data['subtitle'] = 'Daftar Perencanaan Risk Assessment';
        return view('backend.risk_assessment.assign_assessment.__form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = new RiskAssessment();
        // $data->periode = $request->periode;
        // $data->auditee = $request->auditee;
        // $data->jenis_assessment = $request->jenis_assessment;
        // $data->jenis_assessment = $request->jenis_assessment;
        // $data->pka = $request->pka;
        // $data->auditor = $request->auditor;
        // dd($data->slug);
        // $data->save();
        RiskAssessment::updateOrCreate(
            ['id' => $request->id],
            [
                'periode' => $request->periode,
                'auditee' => $request->auditee,
                'jenis_assessment' => $request->jenis_assessment,
                'pka' => $request->pka,
                'auditor' => $request->auditor,
            ]
        );
        return response()->json(['success'=>'Saved successfully.']);
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
        $data = RiskAssessment::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RiskAssessment $data)
    {
        $data->update($request->all());
        $data->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RiskAssessment::find($id)->delete();
        return response()->json(['message', 'deleted success']);
    }
}
