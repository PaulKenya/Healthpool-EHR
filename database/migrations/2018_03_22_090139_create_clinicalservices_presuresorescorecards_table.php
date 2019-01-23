<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalservicesPresuresorescorecardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalservices_presuresorescorecards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dateofadmission')->nullable();
            $table->string('dateofdischarge')->nullable();
            $table->string('scorea')->nullable();
            $table->string('average')->nullable();
            $table->string('aboveaverage')->nullable();
            $table->string('obese')->nullable();
            $table->string('belowaverage')->nullable();
            $table->string('healthy')->nullable();
            $table->string('soft')->nullable();
            $table->string('dry')->nullable();
            $table->string('oedematous')->nullable();
            $table->string('coldandclammy')->nullable();
            $table->string('discoloured')->nullable();
            $table->string('score')->nullable();
            $table->string('brokenskin')->nullable();
            $table->string('fourteenfortyfour')->nullable();
            $table->string('ffsf')->nullable();
            $table->string('sixtyfive')->nullable();
            $table->string('completecatheterised')->nullable();
            $table->string('occasionalincontinence')->nullable();
            $table->string('catheterised')->nullable();
            $table->string('doublyincontinence')->nullable();
            $table->string('averageb')->nullable();
            $table->string('poor')->nullable();
            $table->string('ngtubetpn')->nullable();
            $table->string('nbmanorexic')->nullable();
            $table->string('fully')->nullable();
            $table->string('restlessfidgety')->nullable();
            $table->string('restricted')->nullable();
            $table->string('inerttractionpostop')->nullable();
            $table->string('chairbound')->nullable();
            $table->string('terminalillness')->nullable();
            $table->string('cardiacfailure')->nullable();
            $table->string('PeripheralVascularDisease')->nullable();
            $table->string('anaemia')->nullable();
            $table->string('smoking')->nullable();
            $table->string('motoesensoryparaplegia')->nullable();
            $table->string('diabetesmscva')->nullable();
            $table->string('steroidscytotoxics')->nullable();
            $table->string('antiinflamatorydrugs')->nullable();
            $table->string('totalscore')->nullable();
            //add to migrations
            $table->integer('administration_patient_informations_id')->references('id')->on('administration_patient_informations');
            $table->string('institution_id');
            $table->string('user_id');
            //the above three
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
        Schema::dropIfExists('clinicalservices_presuresorescorecards');
    }
}
