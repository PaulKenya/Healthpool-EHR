<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('checkin');
            $table->text('checkout');
            $table->text('wname');
            $table->text('workaddress');
            $table->text('department');
            $table->text('worklocation');
            $table->text('job');
            $table->text('workemail');
            $table->text('manager');
            $table->text('workmobile');
            $table->text('coach');
            $table->text('workphone');
            $table->text('workinghours');
            $table->text('information');
            $table->text('nameb');
            $table->text('company');
            $table->text('address');
            $table->text('jobposition');
            $table->text('Street');
            $table->text('phone');
            $table->text('city');
            $table->text('mobile');
            $table->text('state');
            $table->text('email');
            $table->text('zip');
            $table->text('website');
            $table->text('country');
            $table->text('title');
            $table->text('tin');
            $table->text('language');
            $table->text('tags');
            $table->text('internalnotes');
            $table->text('info');
            $table->text('contactname');
            $table->text('titleb');
            $table->text('phoneno');
            $table->text('mobileno');
            $table->text('notes');
            $table->text('namec');
            $table->text('status');
            $table->text('emailadd');
            $table->text('phonenob');
            $table->text('mobilenob');
            $table->text('badgeno');
            $table->text('manualattendance');
            $table->text('named');
            $table->text('days');
            $table->text('workfrom');
            $table->text('workto');
            $table->text('startingdate');
            $table->text('enddate');
            $table->text('nationality');
            $table->text('idno');
            $table->text('passno');
            $table->text('acno');
            $table->text('privateaddress');
            $table->text('gender');
            $table->text('dob');
            $table->text('maritalstatus');
            $table->text('visano');
            $table->text('workpermitno');
            $table->text('visaexdate');
            $table->text('customer');
            $table->text('salesperson');
            $table->text('vendor');
            $table->text('vendorb');
            $table->text('intreference');
            $table->text('accreceivable');
            $table->text('accpayable');
            $table->text('cuspaymentterms');
            $table->text('venpaymentterms');
            $table->text('fiscalpositon');
            $table->text('accrec');
            $table->text('accpayb');
            $table->text('code');
            $table->text('namee');
            $table->text('type');
            $table->text('defaulttaxes');
            $table->text('tagsb');
            $table->text('group');
            $table->text('allowrecon');
            $table->text('depreciated');
            $table->text('codeb');
            $table->text('namef');
            $table->text('typeb');
            $table->text('deftaxes');
            $table->text('tagsc');
            $table->text('groupc');
            $table->text('allowrec');
            $table->text('dep');
            $table->text('pname');
            $table->text('companyb');
            $table->text('addresb');
            $table->text('jobpos');
            $table->text('streetb');
            $table->text('phonef');
            $table->text('cityc');
            $table->text('moblef');
            $table->text('stateb');
            $table->text('emailc');
            $table->text('zipb');
            $table->text('websiteg');
            $table->text('countryc');
            $table->text('titlez');
            $table->text('tinx');
            $table->text('lang');
            $table->text('tagsp');
            $table->text('intnots');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administration_attendances');
    }
}
