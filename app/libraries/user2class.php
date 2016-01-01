
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class User2class {

    public function tranAll($data)
    {
        $temp=array();
        foreach ($data as $value) {
            $temp[]= $this->tran($value);
        }
        return $temp;
    }
    public function tran($data)
    {
        return [
        "ID"=>$data->id,
		"FNAME"=>$data->fname,
		"MNAME"=>$data->mname,
		"LNAME"=>$data->lname,
		"SAL"=>$data->sal,
		"MOBILENO"=>$data->mobileno,
		/*"CREATEAT"=>$data->createat,
		"UPDATEAT"=>$data->updateat,
		"DELETEAT"=>$data->deleteat,*/
        ];
    }
    public function rtran($data)
    {
        return [
		'fname'=>$data["FNAME"],
		'mname'=>$data["MNAME"],
		'lname'=>$data["LNAME"],
		'sal'=>$data["SAL"],
		'mobileno'=>$data["MOBILENO"]
        ];

    }
}