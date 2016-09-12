<?php


require_once __DIR__ . '/../model/Item.php';


$input = json_decode(file_get_contents('php://input'), TRUE);

if( $input === NULL){
    throw new Exception('empty input not allow');
    return 'bad req\n';
}

$message = isset($input['msg']) ?
           trim($input['msg'])
           : NULL;
$dueDate = isset($input['due_date']) ?
           trim($input['due_date'],'/')
           : NULL;
$status = isset($input['status']) ?
          trim($input['msg'])
          : NULL;

$model = new \Models\Item();
$model->insert($message, $dueDate, $status);

return ;

?>
