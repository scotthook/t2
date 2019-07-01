<?php 
class Cms5d15eb03c1ac7004904249_d4b06195070bd406beabbe7052480a56Class extends Cms\Classes\PageCode
{
public function getCityState($zip){
    $data = Db::table('zipBase')->where('zip', $zip)->first();
    header('Content-Type: application/json');
    echo json_encode($data);
}
public function onStart(){
     $this['zip'] = $this->getCityState($this->param('zip'));   
     
}
}
