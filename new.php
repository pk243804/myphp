<?php    
 $filename = "seo.csv";    
 $delimiter = ',';

if (file_exists($filename) || is_readable($filename)) {
    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    } echo "<pre>";
   print_r($data);
     
}   
   



/* $open_hour_row_dat='Tuesday    8:30?am�5:30?pm          Wednesday    8:30?am�5:30?pm          Thursday    8:30?am�5:30?pm          Friday    8:30?am�5:30?pm          Saturday    Closed          Sunday    Closed          Monday    8:30?am�5:30?pm
    '; 
    echo '<br>';
    $res=open_hour_filter($open_hour_row_dat);
    echo json_encode($res);
    function open_hour_filter($date)
    {
        
        $string = str_replace(' ', ' ', $date);
        $date = str_replace('?', ':', $date);
        $date = str_replace('�', '-', $date);
        $date = str_replace('pm ', 'pm |', $date);
        $date = str_replace('Closed  ', 'Closed |', $date);
        $data=explode("|",$date); 
        $opening_hour=[];
        foreach ($data as $value) {
          $string = str_replace('day ', 'day_', $value);
          $day_time=explode("_",$string);
          $time=$day_time[1];
          $time=explode("-",$time);
          $day=$day_time[0];
          $open_time=$time[0];
          $close_time=$time[1];
          $open_time = str_replace(' ', '', $open_time);
          $close_time = str_replace(' ', '', $close_time);
          $day = str_replace(' ', '', $day);
          if($open_time=='Closed')
          {
            $close_time='-';
        }
        $opening_hour[]=['day'=>$day,'open_time'=>$open_time,'close_time'=>$close_time];
    }
    $count=count($opening_hour);
    return $opening_hour_data['result']=['total'=>$count,'data'=>$opening_hour];
}
}  */
?>