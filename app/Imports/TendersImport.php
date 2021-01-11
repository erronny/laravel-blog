<?php

namespace App\Imports;

use App\Tenders;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class TendersImport implements ToModel, WithHeadingRow
{


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
       use Importable;


    public function model(array $row)
    {
        return new Tenders([
            //'id'       =>$row['id'],
            'tenderId'     => $row['tenderid'],
            'InvitingAuthority'    => $row['invitingauthority'],
            'BidSubmissionEndDate'    => $row['bidsubmissionenddate'],
            'StartTime'    => $row['starttime'],
            'EndTime'    => $row['endtime'],
            'TenderValue'    => $row['tendervalue'],
            'EMD_Ammount'    => $row['emd_ammount'],
            'TenderFee'    => $row['tenderfee'],
            'Website'    => $row['website'],
            'NIT'    => $row['nit'],
            'Schedule'    => $row['schedule'],
            'BOQ'    => $row['boq'],
            'MoreInfo'    => $row['moreinfo'],
            'WorkDescription'    => $row['workdescription'],
            'department'    => $row['department'],
            'trn'    => $row['trn'],
            'location'    => $row['location'],
            'product_category'    => $row['product_category'],
            'keawords'    => $row['keawords']
        ]);
    }
}
