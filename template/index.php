<?php
const URL = "https://localhost/test_avholding/";



$data = init_array();
show_template($data);


function init_array() : array
{
    $data = array();
   
    $ctx = stream_context_create(array(
        'ssl' => array( 
            "verify_peer"=>false,
            "verify_peer_name"=>false
            )
        )
    );
    $json = file_get_contents(URL.'template/data.json',true, $ctx);
    if($json)
        $data[] = json_decode($json, true);
  
    return $data;
}

function show_template(array $data){
   require_once("template.php");
 

}


