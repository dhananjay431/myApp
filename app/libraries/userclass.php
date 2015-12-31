<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Userclass {

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
        "USERID"=> $data->id,
        "NAME"=>$data->name,
        "SAL"=>$data->sal,
       // "TIME"=>$data->time
        ];
    }
    public function rtran($data)
    {
        return [
        "name"=>$data['NAME'],
        "sal"=>$data['SAL'],
        'time'=> date("Y-m-d H:i:s")
        ];
    }
}