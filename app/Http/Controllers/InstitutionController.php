<?php

namespace App\Http\Controllers;

use App\department;
use App\Institution;
use App\Link;
use App\Permission;
use App\roles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Faker\Generator as Faker;

use Illuminate\Support\Facades\Route;
use Image;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $institution= new Institution(
            [
            'name'=> request('name'),
            'email'=> request('email'),
            'telephone'=> request('telephone'),
            'registration_number'=> request('registration_number'),
            'type'=> request('type'),
            'keph_level'=> request('keph_level'),
            'facility_type'=> implode(',',request('facility_type')),
            'owner' => request('owner'),
            'regulatory_body' => implode(',',request('regulatory_body')),
            'bed_capacity'=> request('bed_capacity'),
            'branches'=> request('branches'),
            'working_days'=>implode(',',request('working_days' )),
            'brief_description_of_services'=> request('brief_description_of_services'),
            'insurance'=> implode(',',request('insurance')),
            'company_name'=> request('company_name'),
            'legal_name'=> request('legal_name'),
            'cots'=> request('cots'),
            'tax_id'=> request('tax_id'),
            'street_address'=> request('street_address'),
            'city'=> request('city'),
            'county'=> request('county'),
            'address'=> request('address'),
            'sub_county'=> request('sub_county'),
            'ward'=> request('ward'),
        ]);
        $institution->save();


        if(Link::all()->count() == 0){
            $routeCollection = Route::getRoutes();
            $all_GET_routes = $routeCollection->get('GET');

            foreach ($all_GET_routes as $all_GET_route){
                if(isset($all_GET_route->action['pretty_name'])){
                    $new_link = new Link();
                    $new_link->descriptive_name=$all_GET_route->action['pretty_name'];
                    $new_link->url=$all_GET_route->action['as'];
                    $new_link->save();
                }
            }

            $permission = new Permission();
//        $permission->id = 1;
            $permission->name = "Add";
            $permission->save();
            $permission = new Permission();
//        $permission->id = 2;
            $permission->name = "Edit/Update";
            $permission->save();
            $permission = new Permission();
//        $permission->id = 3;
            $permission->name = "Delete";
            $permission->save();
            $permission = new Permission();
//        $permission->id = 4;
            $permission->name = "All";
            $permission->save();

        }

        User::create([
            'name' => 'super_admin',
            'email' =>$institution->email ,
            'institution_id' => $institution->id,
            'is_admin' => 1,
            'role' => '1',
            'telephone' =>$institution->telephone,
            'id_number' => mt_rand( 10000000, 99999999),
            'password' => Hash::make('12345678'),
        ]);

        return redirect('/');
    }

 public function store(Request $request){

 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_hospital_profile(Request $request)
    {
        //
        {
            $institution=Auth::user()->institution;

            $institution->name=request('name');
            $institution->email=request('email');
            $institution->telephone=request('telephone');
            $institution->registration_number=request('registration_number');
            $institution->type=request('type');
            $institution->keph_level=request('keph_level');
            $institution->facility_type=implode(',',request('facility_type'));
            $institution->owner=request('owner');
            $institution->regulatory_body= implode(',',request('regulatory_body'));
            $institution->bed_capacity=request('bed_capacity');
            $institution->branches=request('branches');
            $institution->working_days=implode(',', request('working_days'));
            $institution->brief_description_of_services=request('brief_description_of_services');
            $institution->insurance=implode(',',request('insurance'));
            $institution->company_name=request('company_name');
            $institution->legal_name=request('legal_name');
            $institution->tax_id=request('tax_id');
            $institution->cots=request('cots');
            $institution->street_address=request('street_address');
            $institution->city=request('city');
            $institution->county=request('county');
            $institution->address=request('address');
            $institution->sub_county=request('sub_county');
            $institution->ward=request('ward');
     
            $institution->save();
            session()->flash('message','hospital info edited successfully');

        return redirect(route('hospital_profile'));
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */

    public function hospital_profile()
    {
        return view('auth.admin.hospital_settings');
    }

    public function delete_profile($user_id)
    {
        $user = User::find($user_id);

        $user->delete();
        session()->flash('message', 'User deleted successfully!');
        return redirect(route('manage_users'));
    }

    public function make_admin($user_id)
    {
        $user = User::find($user_id);

        $user->is_admin=1;

        $user->save();
        session()->flash('message', 'admin added successful!');
        return redirect(route('manage_users'));
    }

    public function remove_admin($user_id)
    {
        $user = User::find($user_id);

        $user->is_admin=0;

        $user->save();

        session()->flash('message', 'admin removed successfully!');
        return redirect(route('manage_users'));
    }

    public function manage_users()
    {
        $institutions=DB::table('institutions')->latest()->get();
        $roles=DB::table('roles')->latest()->get();

        return view('auth.admin.manage_users' , ['institutions'=>$institutions, 'roles'=>$roles]);
    }

    public function admin_update_profile($user_id, Request $request)
    {
        $selected_user=User::find($user_id);
        $selected_user->name=request('name');
        $selected_user->email=request('email');
        $selected_user->institution_id=request('institution_id');
        $selected_user->role=request('role');

        $selected_user->save();
        session()->flash('message','profile edited successfully');

        return redirect(route('manage_users'));
    }



    public function set_logo(Request $request)
    {
        if ($request->hasFile('cover')) {
            $logo = $request->file('cover');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize(300, 300)->save(public_path('/uploads/logos/' . $filename));
            //Image::make($logo)->save(public_path('/uploads/logos/' . $filename));
            $institution = Auth::user()->institution;
            $institution->avatar = $filename;
            $institution->save();
        }

        return redirect(route('hospital_profile'));
    }

    public function show(Institution $institution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        //
    }


    public function register_institution(){


        return view('auth.institution_register');
    }

    public function user_settings(){

        $user_roles = DB::table('roles')->get();
        return view('auth.users.home',[
            'user_roles'=>$user_roles,
        ]);
    }

    public function add_user_role(){

        return view('auth.users.add_roles');

    }

    public function add_user_role_post(){

        $new_role = new roles(Input::all());
        $new_role->save();

        session()->flash('add_role_success',"Role <b>".$new_role->role_name."</b> has been successfully added.");

        return redirect(route('us_home'));
    }
    public function add_department(){

        $new_deopartment = new department(Input::all());
        $new_deopartment->save();

        session()->flash('add_role_success',"Role <b>".$new_deopartment->department_name."</b> has been successfully added.");

        return redirect(route('us_home'));
    }
    public function edit_department(Request $request, $department_id){

        $department = department::find($department_id);
        $department->role_name=$request->input('department_name');
        $department->save();

        session()->flash('add_role_success',"Role <b>".$department->department_name."</b> has been successfully added.");

        return redirect(route('us_home'));
    }
    public function edit_user_role_post(Request $request, $role_id){

        $edit_role = roles::find($role_id);
        $edit_role->role_name=  $request->input('role_name');
        $edit_role->role_description=  $request->input('role_description');
        $edit_role->department_id=  $request->input('department_id');
        $edit_role->save();

        session()->flash('add_role_success',"Role <b>".$edit_role->role_name."</b> has been successfully edited.");

        return redirect(route('us_home'));
    }

    public function manage_role_permissions(Request $request){

        $role = DB::table('roles')->find($request->post('role_id'));
        $links = DB::table('links')->get();
        $edit_links = DB::table('link_roles')->where('role_id',$role->id)->get(['link_id','permissions'])->toArray();
        $checked_links = [];
        foreach ($edit_links as $edit_link){
            $checked_links[$edit_link->link_id] = $edit_link->permissions;
        }

        return view('auth.users.manage_role_permissions',[
            'role'=>$role,
            'links'=>$links,
            'checked_links'=>$checked_links,
        ]);
    }

    public function manage_role_permissions_get(){
        return redirect(route('us_home'));
    }

    public function assign_permissions(){
        $role_id = request()->post('role_id');
        $permissions = array_keys(request()->post());
        $post_permissions = [];

        for($i=2;$i<count($permissions);$i++){
            if(
            array_key_exists(explode('_',$permissions[$i])[0],$post_permissions)
            ){
                $post_permissions[explode('_',$permissions[$i])[0]] = $post_permissions[explode('_',$permissions[$i])[0]]
                    ."-"
                    .explode('_',$permissions[$i])[1];
            }else{
                $post_permissions[explode('_',$permissions[$i])[0]] = explode('_',$permissions[$i])[1];
            }
        }

        DB::table('link_roles')->where('role_id',$role_id)->delete();

        foreach ($post_permissions as $key=>$value){
            DB::insert("INSERT INTO `link_roles`(`link_id`, `role_id`, `permissions`)VALUES($key,$role_id,'"
                .strval($value)
                ."');");
        }

        session()->flash('add_permissions_success',"Successfully updated permissions.");
        return redirect(route('us_home'));
    }

}
