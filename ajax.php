<?php 

// class objectX{
//     public $target = 'My test task';
//     public $command = $_GET["command"];
//     //date("F j, Y, g:i a");
//    };
ini_set('display_errors', 1);

class dateCommand {
    public $target = "lorem";
    function getJsonResponse($param)  {
        $myArray =  array(
            "param" => $param,
            "date" => date("F j, Y, g:i a"),
            "target" => $this->target,
        );
        
        return(json_encode($myArray,JSON_PRETTY_PRINT));
    }
};
$param = NULL;
if(isset($_GET['command'])) {
    $param = $_GET["command"];
}
else    {
    $param = '';
}

$dateCommand = new dateCommand();
echo ($dateCommand->getJsonResponse($param));

   

