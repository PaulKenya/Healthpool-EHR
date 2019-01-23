<?php

namespace App\Http\Controllers;

use App\administration_patient_information;
use App\bmi;
use App\childhealthcard;
use App\childhealthcard1;
use App\childhealthcard2;
use App\childhealthcard3;
use App\childhealthcard4;
use App\childhealthcard5;
use App\childhealthcard6;
use App\childmonitoring;
use App\childtemperature;
use App\createchild;
use App\maternal;
use App\mothersbloodpressure;
use App\motherstemperature;
use App\mothersweight;
use App\physical;
use App\present_pregnancy;
use App\previous_pregnancy;
use App\surgical;
use App\weight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class MCHController extends Controller
{


    public function maternal($patient_id)
{
    $maternalreport_results=administration_patient_information::find($patient_id)->maternal;
    $patient=administration_patient_information::find($patient_id);
    return view('mch.maternal',[
        'maternalreport_results'=>$maternalreport_results,'patient_id'=>$patient_id, 'patient'=>$patient
    ]);
}
    public function mch_booklet()
    {
        return view('mch.mchbooklet');
    }

    public function maternal_post($patient_id)
    {
        $maternal = new maternal(Input::all());
        $maternal->save();


        return redirect(route('maternal',['patient_id' => $patient_id] ));
    }



    public function physicalexamination($patient_id)
    {
        $physicalexaminationreport_results=ad::find($patient_id)->physical;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.physicalexamination',[
            'physicalexaminationreport_results'=>$physicalexaminationreport_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }

    public function physicalexamination_post($patient_id)
    {
        $physicalexamination = new physical(Input::all());
        $physicalexamination->save();


        return redirect(route('physicalexamination',['patient_id' => $patient_id] ));
    }

    public function weight($patient_id)
    {
        $weight_results=administration_patient_information::find($patient_id)->weight;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.weight',[
            'weight_results'=>$weight_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function childmonitoring($patient_id)
    {
        $childmonitoring_results=administration_patient_information::find($patient_id)->childmonitoring;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childmonitoring',[
            'childmonitoring_results'=>$childmonitoring_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }



    public function childhealthcard($patient_id)
    {
        $childhealthcard_results=administration_patient_information::find($patient_id)->childhealthcard;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childhealthcard',[
            'childhealthcard_results'=>$childhealthcard_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function childhealthcard_post($patient_id)
    {
        $child1 = new childhealthcard(Input::all());
        $child1->save();


        return redirect(route('childhealthcard',['patient_id' => $patient_id] ));
    }
    public function childhealthcard1($patient_id)
    {
        $childhealthcard1_results=administration_patient_information::find($patient_id)->childhealthcard1;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childhealthcard1',[
            'childhealthcard1_results'=>$childhealthcard1_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function childhealthcard1_post($patient_id)
    {
        $child2 = new childhealthcard1(Input::all());
        $child2->save();


        return redirect(route('childhealthcard1',['patient_id' => $patient_id] ));
    }
    public function childhealthcard2($patient_id)
    {
        $childhealthcard2_results=administration_patient_information::find($patient_id)->childhealthcard2;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childhealthcard2',[
            'childhealthcard2_results'=>$childhealthcard2_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function childhealthcard2_post($patient_id)
    {
        $child3 = new childhealthcard2(Input::all());
        $child3->save();


        return redirect(route('childhealthcard2',['patient_id' => $patient_id] ));
    }
    public function childhealthcard3($patient_id)
    {
        $childhealthcard3_results=administration_patient_information::find($patient_id)->childhealthcard3;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childhealthcard3',[
            'childhealthcard3_results'=>$childhealthcard3_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function childhealthcard3_post($patient_id)
    {
        $child4 = new childhealthcard3(Input::all());
        $child4->save();


        return redirect(route('childhealthcard3',['patient_id' => $patient_id] ));
    }
    public function childhealthcard4($patient_id)
    {
        $childhealthcard4_results=administration_patient_information::find($patient_id)->childhealthcard4;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childhealthcard4',[
            'childhealthcard4_results'=>$childhealthcard4_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function childhealthcard4_post($patient_id)
    {
        $child5 = new childhealthcard4(Input::all());
        $child5->save();


        return redirect(route('childhealthcard4',['patient_id' => $patient_id] ));
    }
    public function childhealthcard5($patient_id)
    {
        $childhealthcard5_results=administration_patient_information::find($patient_id)->childhealthcard5;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childhealthcard5',[
            'childhealthcard5_results'=>$childhealthcard5_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }

    public function childhealthcard6($patient_id)
    {
        $childhealthcard6_results=administration_patient_information::find($patient_id)->childhealthcard6;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childhealthcard6',[
            'childhealthcard6_results'=>$childhealthcard6_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }


    public function childhealthcard5_post($patient_id)
    {
        $child6 = new childhealthcard5(Input::all());
        $child6->save();


        return redirect(route('childhealthcard5',['patient_id' => $patient_id] ));
    }


    public function childhealthcard6_post($patient_id)
    {



        $child7 = new childhealthcard6(Input::all());
        $child7->save();


        return redirect(route('childhealthcard6',['patient_id' => $patient_id] ));
    }
    public function previous($patient_id)
    {

        $previousreport_results=administration_patient_information::find($patient_id)->previous_pregnancy;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.previous',[
            'previousreport_results'=>$previousreport_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }

    public function previous_post($patient_id)
    {
        $previous = new previous_pregnancy(Input::all());
        $previous->save();


        return redirect(route('previous',['patient_id' => $patient_id] ));
    }
    public function surgical($patient_id)
    {
        $surgicalreport_results=administration_patient_information::find($patient_id)->surgical;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.surgical',[
            'surgicalreport_results'=>$surgicalreport_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);


    }



    public function surgical_post($patient_id)
    {
        $surgical = new surgical(Input::all());
        $surgical->save();


        return redirect(route('surgical',['patient_id' => $patient_id] ));
    }
    public function bmi()
    {
        return view('mch.mothersbmi');

    }
    public function bmi_post()
    {
        $bmi = new bmi(Input::all());
        $bmi->save();


        return redirect(route('bmi'));
    }



    public function childmonitemp($patient_id)
    {
        $childtemperature_results=administration_patient_information::find($patient_id)->childtemperature;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.childtemperature',[
            'childtemperature_results'=>$childtemperature_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);

    }
    public function mothersbp($patient_id)
    {
        $mothersbloodpressure_results=administration_patient_information::find($patient_id)->mothersbloodpressure;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.mothersbloodpressure',[
            'mothersbloodpressure_results'=>$mothersbloodpressure_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);


    }
    public function motherstemp()
    {
        $motherstemperature_results=administration_patient_information::find($patient_id)->motherstemperature;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.motherstemperature',[
            'motherstemperature_results'=>$motherstemperature_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function mothersweight($patient_id)
    {
        $motherweight_results=administration_patient_information::find($patient_id)->motherweight;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.motherweight',[
            'motherweight_results'=>$motherweight_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }
    public function weight_post($patient_id)
    {
        $weight = new weight(Input::all());
        $weight->save();


        return redirect(route('weight',['patient_id' => $patient_id] ));
    }
    public function childmonitemp_post($patient_id)
    {
        $childmonitemp = new childtemperature(Input::all());
        $childmonitemp->save();


        return redirect(route('weight',['patient_id' => $patient_id] ));
    }
    public function childmonitoring_post($patient_id)
    {
        $childmonitoring = new childmonitoring(Input::all());
        $childmonitoring->save();


        return redirect(route('childmonitoring',['patient_id' => $patient_id] ));
    }
    public function mothersbp_post($patient_id)
    {
        $mothersbloodpressure = new mothersbloodpressure(Input::all());
        $mothersbloodpressure->save();


        return redirect(route('mothersbp',['patient_id' => $patient_id] ));
    }
    public function motherstemp_post($patient_id)
    {
        $motherstemp = new motherstemperature(Input::all());
        $motherstemp->save();


        return redirect(route('motherstemp',['patient_id' => $patient_id] ));
    }
    public function mothersweight_post($patient_id)
    {
        $mothersweight = new mothersweight(Input::all());
        $mothersweight->save();


        return redirect(route('mothersweight'));
    }
    public function create_child($patient_id)
    {   $create_child_results=administration_patient_information::find($patient_id)->createchild;
        $patient=administration_patient_information::find($patient_id);
        return view('mch.createchild',[
            'create_child_results'=>$create_child_results,'patient_id'=>$patient_id, 'patient'=>$patient
        ]);
    }

    public function create_child_post($patient_id)
    {
        $create_child = new createchild(Input::all());
        $create_child->save();


        return redirect(route('create_child',['patient_id' => $patient_id] ));
    }
    public function maternal_delete(Request $request, $id) {
        $maternalreport_results = maternal::where('id', $id);

        $maternalreport_results->delete();
        return redirect(route('maternal'));
    }
    public function previous_delete(Request $request, $id) {
        $previousreport_results = previous_pregnancy::where('id', $id);

        $previousreport_results->delete();
        return redirect(route('previous'));
    }
    public function surgical_delete(Request $request, $id) {
        $surgicalreport_results = surgical::where('id', $id);

        $surgicalreport_results->delete();
        return redirect(route('surgical'));
    }
    public function physicalexamination_delete(Request $request, $id) {
        $physicalexaminationreport_results = physical::where('id', $id);

        $physicalexaminationreport_results->delete();
        return redirect(route('physicalexamination'));
    }
    public function childhealthcard_delete(Request $request, $id) {
        $childhealthcard_results = childhealthcard::where('id', $id);

        $childhealthcard_results->delete();
        return redirect(route('childhealthcard'));
    }
    public function childhealthcard1_delete(Request $request, $id) {
        $childhealthcard1_results = childhealthcard1::where('id', $id);

        $childhealthcard1_results->delete();
        return redirect(route('childhealthcard1'));
    }
    public function childhealthcard2_delete(Request $request, $id) {
        $childhealthcard2_results = childhealthcard2::where('id', $id);

        $childhealthcard2_results->delete();
        return redirect(route('childhealthcard2'));
    }
    public function childhealthcard3_delete(Request $request, $id) {
        $childhealthcard3_results = childhealthcard3::where('id', $id);

        $childhealthcard3_results->delete();
        return redirect(route('childhealthcard3'));
    }
    public function childhealthcard4_delete(Request $request, $id) {
        $childhealthcard4_results = childhealthcard4::where('id', $id);

        $childhealthcard4_results->delete();
        return redirect(route('childhealthcard4'));
    }
    public function childhealthcard5_delete(Request $request, $id) {
        $childhealthcard5_results = childhealthcard5::where('id', $id);

        $childhealthcard5_results->delete();
        return redirect(route('childhealthcard5'));
    }
    public function childhealthcard6_delete(Request $request, $id) {
        $childhealthcard6_results = childhealthcard6::where('id', $id);

        $childhealthcard6_results->delete();
        return redirect(route('childhealthcard6'));
    }
    public function create_child_delete(Request $request, $id) {
        $create_child_report_results = createchild::where('id', $id);

        $create_child_report_results->delete();
        return redirect(route('create_child'));
    }

}
