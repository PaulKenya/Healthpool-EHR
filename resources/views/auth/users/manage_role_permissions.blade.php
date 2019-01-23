@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">Manage user role permissions :&nbsp;<b>{!! $role->role_name !!}</b></div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="post" enctype="multipart/form-data" action="{{route('us_assign_permissions')}}" >
                    {{csrf_field()}}
                    <input type="hidden" name="role_id" value="{!! $role->id !!}">
                    <table class="table table-striped" id="">
                        <thead>
                        <tr>
                            <th rowspan="2">Link</th>
                            <th colspan="4">Permissions</th>
                        </tr>
                        <tr>
                            <th>Add</th>
                            <th>Edit/Update</th>
                            <th>Delete</th>
                            <th>All</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($links))
                            @foreach($links as $link)
                                <tr>
                                    <td><a>{{$link->descriptive_name}}</a></td>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="{{$link->id}}_1" id="{{$link->id}}_1" value="{{$link->id}}_1" onclick="reset_last({{$link->id}})"
                                                       @if(array_key_exists($link->id,$checked_links)&&str_contains($checked_links[$link->id],'1'))
                                                            checked
                                                       @else
                                                       @endif
                                                >
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="{{$link->id}}_2" id="{{$link->id}}_2" value="{{$link->id}}_2" onclick="reset_last({{$link->id}})"
                                                        @if(array_key_exists($link->id,$checked_links)&&str_contains($checked_links[$link->id],'2'))
                                                            checked
                                                        @else
                                                        @endif
                                                >
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="{{$link->id}}_3" id="{{$link->id}}_3" value="{{$link->id}}_3" onclick="reset_last({{$link->id}})"
                                                        @if(array_key_exists($link->id,$checked_links)&&str_contains($checked_links[$link->id],'3'))
                                                            checked
                                                        @else
                                                        @endif
                                                >
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="{{$link->id}}_4" id="{{$link->id}}_4" value="{{$link->id}}_4" onclick="check_all(this,'{{$link->id}}')"
                                                        @if(array_key_exists($link->id,$checked_links)&&str_contains($checked_links[$link->id],'4'))
                                                            checked
                                                        @else
                                                        @endif
                                                >
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        <script>
                            function check_all(all,id) {
                                var row = id;
                                if(all.checked){
                                    document.getElementById(row+'_1').checked = true;
                                    document.getElementById(row+'_2').checked = true;
                                    document.getElementById(row+'_3').checked = true;
                                }else{
                                    document.getElementById(row+'_1').checked = false;
                                    document.getElementById(row+'_2').checked = false;
                                    document.getElementById(row+'_3').checked = false;
                                }
                            }

                            function reset_last(id) {
                                document.getElementById(id+'_4').checked = false;
                                if(document.getElementById(id+'_1').checked
                                    &&document.getElementById(id+'_2').checked&&
                                    document.getElementById(id+'_3').checked){
                                    document.getElementById(id+'_4').checked = true;
                                }
                            }
                        </script>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-info">@if(isset($checked_links) && !empty($checked_links))Update @else Assign @endif new permissions</button>
                </form>
            </div>
        </div>
    </div>
@endsection
