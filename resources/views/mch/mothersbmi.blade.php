@extends('layouts.master')

@section('content')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="black">

                            </div>
                            <div class="card-header" data-background-color="black">

                            </div>


                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        PUBLIC HEALTH
                                    </H3>
                                </div>
                                <div class="col-m-3 offset-md-2">
                                    <H3 class="mt-20 ">
                                        BMI INDEX CALCULATOR
                                    </H3>
                                </div>
                                <table class="table-responsive">
                                    <thead>
                                    <tr>
                                        <th>BMI INDEX CALCULATOR</th>
                                    </tr>
                                    </thead>
                                    <tbody>




                                    </tr>
                                    <tr>
                                        <td>  <p>Enter your height: <input type="float" id="height" name="height"/>

                                                <select type="multiple" id="heightunits">

                                                    <option value="metres" selected="selected">metres</option>

                                                    <option value="inches">inches</option>

                                                    <option value="cm">cm</option>

                                                </select>

                                            </p></td>
                                        <td> <p>Enter your weight: <input type="float" id="weight" name="weight"/>

                                                <select type="multiple" id="weightunits">

                                                    <option value="kg" selected="selected">kilograms</option>

                                                    <option value="lb">pounds</option>

                                                </select>

                                            </p></td>


                                        </body>

                                    </tr>

                                    </tbody>
                                </table>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value="computeBMI" onclick="computeBMI();">Compute</button>
                                </div>



                                <strong>Status:<span id="output"></span></strong><br>





                           <strong>This means you are: <span id="comment"></span> </strong>
                            </div>
                            <script type="text/javascript">

                                function computeBMI()

                                {

                                    //Obtain user inputs

                                    var height=Number(document.getElementById("height").value);

                                    var heightunits=document.getElementById("heightunits").value;

                                    var weight=Number(document.getElementById("weight").value);

                                    var weightunits=document.getElementById("weightunits").value;









                                    //Convert all units to metric

                                    if (heightunits=="inches") height/=39.3700787;

                                    if (weightunits=="lb") weight/=2.20462;

                                    if (heightunits=="cm") height/=100;





                                    //Perform calculation

                                    var BMI=weight/Math.pow(height,2);





                                    //Display result of calculation

                                    document.getElementById("output").innerText=Math.round(BMI*100)/100;





                                    var output =  Math.round(BMI*100)/100

                                    if (output<18.5)

                                        document.getElementById("comment").innerText = "Underweight";

                                    else   if (output>=18.5 && output<=25)

                                        document.getElementById("comment").innerText = "Normal";

                                    else   if (output>=25 && output<=30)

                                        document.getElementById("comment").innerText = "Obese";

                                    else   if (output>30)

                                        document.getElementById("comment").innerText = "Overweight";

                                    // document.getElementById("answer").value = output;

                                }

                            </script>

                        </div>
                    </div>
                </div>
            </div>



    <br>






@endsection