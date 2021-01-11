<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

use Maatwebsite\Excel\Concerns\ToModel;

class Bulk extends Model
{
	
	
    protected $table = 'tbl_tenders';
    protected $guarded = [];
    protected $fillable = [
        'tenderId', 'InvitingAuthority','BidSubmissionEndDate','StartTime','EndTime','TenderValue','EMD_Ammount','TenderFee','Website','NIT','Schedule','BOQ','MoreInfo','WorkDescription','department','trn','location','product_category','keawords',
    ];
}