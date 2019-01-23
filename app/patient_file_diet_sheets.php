<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_file_diet_sheets extends Model
{
    protected $fillable=['op_ip_no','name','age','address','clinic_ward','date_of_admission','date_of_discharge','comments','mondayBREAKFAST','tuesdayBREAKFAST','wednesdayBREAKFAST','thursdayBREAKFAST','fridayBREAKFAST','saturdayBREAKFAST','sundayBREAKFAST','mondaySNACK','tuesdaySNACK','wednesdaySNACK','thursdaySNACK','fridaySNACK','saturdaySNACK','sundaySNACK','mondayLUNCH','tuesdayLUNCH','wednesdayLUNCH','thursdayLUNCH','fridayLUNCH','saturdayLUNCH','sundayLUNCH','mondaySNACK1','tuesdaySNACK1','wednesdaySNACK1','thursdaySNACK1','fridaySNACK1','saturdaySNACK1','sundaySNACK1','mondayDINNER','tuesdayDINNER','wednesdayDINNER','thursdayDINNER','fridayDINNER','saturdayDINNER','sundayDINNER','mondayBEDTIME','tuesdayBEDTIME','wednesdayBEDTIME','thursdayBEDTIME','fridayBEDTIME','saturdayBEDTIME','sundayBEDTIME'];
    public function patient(){
        return $this->belongsTo(administration_patient_information::class);
    }
}
