@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Patient Order Form</h3>
        </div>
        <div class="card-body">
            <div class="col-md-9 mx-auto">
                <form action="{{route('new_order_post',['patient_id'=>$patient_id])}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input name="administration_patient_informations_id" type="text" class="form-control d-none" value="{{$patient_id}}">
                    <input name="institution_id" type="text" class="form-control d-none" value="{{ Auth::user()->institution->id }}">
                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" class="form-control d-none">
                    <div class="row">
                        <div class="form-group">
                            <label for="order_date">Order Date: </label>
                            <input type="date" name="order_date" id="order_date" class="form-control" placeholder="" value="{!! date('Y-m-d') !!}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="cust_name">Patient Name</label>
                            <input type="text" name="cust_name" id="cust_name" class="form-control" placeholder="" value="{{$patient->name}}" required>
                        </div>
                    </div>
                    @if($role->role_name == 'Finance')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Patient Costs
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Drug Name</th>
                                                    <th>Quantity Ordered</th>
                                                    <th>Unit Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(isset($drugs))

                                                    @for($i=0;$i<count($drugs);$i++)
                                                        <tr>
                                                            <td>{{$drugs[$i]->product_name}}</td>
                                                            <td>{{$drug_quantities[$i] }}</td>
                                                            <td>KES {{$drugs[$i]->product_price}}</td>
                                                        </tr>
                                                    @endfor

                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="total">Total Amount (KES)</label>
                                <input type="number" name="total" id="total" class="form-control" placeholder="" value="{{$total_price}}" readonly required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gst">Taxation (16%) (KES)</label>
                                <input type="number" name="gst" id="gst" class="form-control" placeholder="Click to load tax" onclick="show_tax()" required readonly>
                                <script>
                                    function show_tax() {
                                        document.getElementById('gst').value = document.getElementById('total').value * 0.16;
                                    }
                                </script>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="net_total">Net Total (KES)</label>
                                <input type="number" name="net_total" id="net_total" class="form-control" placeholder="Click to load net total" onclick="show_net_total()" required readonly>
                                <script>
                                    function show_net_total() {
                                        document.getElementById('net_total').value = parseInt(document.getElementById('gst').value)
                                            + parseInt(document.getElementById('total').value);
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="paid">Paid</label>
                                <input type="number" name="paid" id="paid" class="form-control" placeholder="" onmouseleave="due_subtract()" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="due">Due</label>
                                <input type="number" name="due" id="due_input" class="form-control" placeholder="" onclick="due_subtract()">
                                <script>
                                    function due_subtract(){
                                        num1 = document.getElementById("paid").value;
                                        num2 = document.getElementById("net_total").value;
                                        // document.getElementById("due").innerHTML = num2-num1;
                                        document.getElementById("due_input").value = num2-num1;
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="payment_type">Payment Method</label>
                                <select class="form-control" name="payment_type" id="payment_type">
                                    <option value="cash">Cash</option>
                                    <option value="card">Card</option>
                                    <option value="draft">Draft</option>
                                    <option value="cheque">Cheque</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info">Process Payment</button>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Drug name</th>
                                        <th>Drug Quantity Remaining</th>
                                        <th>Quantity to issue</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr data-row-id="0">
                                        <td>
                                            <div class="form-group">
                                                <select class="form-control med-select" name="name[]" id="name" >
                                                    @foreach($all_products as $all_product)
                                                        <option value="{{$all_product->id}}">{{$all_product->product_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>{{$all_products[0]->product_qty}}</td>
                                        <td>
                                            <div class="form-group">
                                                <label for="quantity"></label>
                                                <input type="number" name="quantity[]" id="quantity" class="form-control" placeholder="">
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success button_add_row" title="Add new row">
                                                <b>+</b>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Place Order</button>
                        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                        <script>
                            $(document.body).on('click','.button_delete_row',function () {
                                $(this).parent().parent().remove();
                            });
                            $(document.body).on('click','.button_add_row',function () {
                                var current_row_id = parseInt($(this).parent().parent().attr('data-row-id'));
                                var tbody = $(this).parent().parent().parent();
                                tbody.append('<tr data-row-id="'+(current_row_id+1)+'">\n' +
                                    '                                          <td>\n' +
                                    '                                              <div class="form-group">\n' +
                                    '                                                  <select class="form-control med-select" name="name[]" id="name" >\n' +
                                    '                                                      @foreach($all_products as $all_product)\n' +
                                    '                                                          <option value="{{$all_product->id}}">{{$all_product->product_name}}</option>\n' +
                                    '                                                      @endforeach\n' +
                                    '                                                  </select>\n' +
                                    '                                              </div>\n' +
                                    '                                          </td>\n' +
                                    '                                          <td>{{$all_products[0]->product_qty}}</td>\n' +
                                    '                                          <td>\n' +
                                    '                                              <div class="form-group">\n' +
                                    '                                                  <label for="quantity"></label>\n' +
                                    '                                                  <input type="number" name="quantity[]" id="quantity" class="form-control" placeholder="">\n' +
                                    '                                              </div>\n' +
                                    '                                          </td>\n' +
                                    '                                          <td>\n' +
                                    '                                              <button type="button" class="btn btn-success button_add_row" title="Add new row">\n' +
                                    '                                                  <b>+</b>\n' +
                                    '                                              </button>\n' +
                                    '                                              <button type="button" class="btn btn-danger button_delete_row" title="Delete row">\n' +
                                    '                                                  x\n' +
                                    '                                              </button>\n' +
                                    '                                          </td>\n' +
                                    '                                      </tr>');
                                $(this).fadeOut();
                            });
                        </script>
                        <script>
                            $(document.body).on('change',".med-select",function(e){
                                var element = $(this);
                                var current_row = parseInt($(this).parent().parent().parent().attr('data-row-id'));
                                e.preventDefault();
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                    }
                                });
                                jQuery.ajax({
                                    url: "{{ url('/stores_get_quantity') }}"+"/"+element.val(),
                                    method: 'get',
                                    success: function(result){
                                        element.parent().parent().parent().children().eq(1).text(result.quantity);
                                    }});
                            });
                        </script>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection