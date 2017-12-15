<h2>this is form</h2>
<?php 
    $data=$result;
  //  print_r($data);
    foreach($data as $value)
        {
        echo 'name=  '.$value->name.'<br>';
        echo 'Add= '.$value->address.'<br>';
        }
    ?>