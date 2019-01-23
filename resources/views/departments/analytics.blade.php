@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Analytics</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    @php
        $transactions_results=\App\send_department_link::all()->where('is_paid',1)->where('institution_id',\Illuminate\Support\Facades\Auth::user()->institution_id);
        $number_of_patients=\App\administration_patient_information::all()->count();
        $count=0;
        foreach ($transactions_results as $transactions_result){
            $count=$count+$transactions_result->price;
        }
    @endphp
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Profit and Loss</h4>
                </div>
                <div class="card-body">
                    <h3 class="mb-0">Kshs {{$count}}</h3>
                    <h6>TOTAL AMOUNT MADE</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Number of Patients Served</h4>
                </div>
                <div class="card-body">
                    <h3 class="mb-0">{{$number_of_patients}} Patients</h3>
                    <h6>NUMBER OF PATIENTS</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Patients in Departments</h4>
                </div>
                <div class="card-body">
                    <canvas id="department_pie_charts" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('charts')
    // New chart
    @php
        $departments=Illuminate\Support\Facades\DB::table('administration_patient_informations')->select('current_department')->groupBy('current_department')->get();
    @endphp
    <script>
        new Chart(document.getElementById("department_pie_charts"), {
            type: 'pie',
            data: {
                labels: [
                    @if(isset($departments))
                    @foreach($departments as $department)
                        @php
                            $the_department=\App\department::find($department->current_department);
                        @endphp
                            '{{ $the_department->department_name }}',
                    @endforeach
                    @endif
                ],
                datasets: [{
                    label: "Cases",
                    backgroundColor: [
                        @if(isset($departments))
                                @foreach($departments as $department)
                                @php
                                    $letters = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];
                                    $color = '#';
                                    for ($i = 0; $i < 6; $i++) {
                                        $count=random_int(0,15);
                                        $color= $color.$letters[$count];
                                    }
                                @endphp
                            "{{ $color }}",
                        @endforeach
                        @endif
                    ],
                    data: [
                        @if(isset($departments))
                        @foreach($departments as $department)
                        @php
                            $the_department=\App\administration_patient_information::where('current_department',$department->current_department)->count();
                        @endphp
                        {{$the_department}},
                        @endforeach
                        @endif
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Patients in each Department'
                }
            }
        });
    </script>
@endsection