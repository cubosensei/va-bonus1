<?php
  $output = array();
  $months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
  if (($handle = fopen("assets/data/GLB.Ts.csv", "r")) !== FALSE) {
    $header = array();
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      if(empty($header)){
        $header = $data;
      }else{
        $d = array();
        $row = array();
        foreach ($data as $key => $value) {
          $d[$header[$key]] = $value;
        }
        foreach ($d as $key => $value) {
          if(in_array($key, $months) && $value != "***"){
            $row["year"] = $d["Year"];
            $row["temp"] = sanitize($value);
            $row["date"] = $key." ".$d["Year"];
            $output[] = $row;
          }
        }
      }
    }
    fclose($handle);

    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($output));
    fclose($fp);
  }

  function sanitize($temp){
    $temp = str_replace('-.', '-0.', $temp);
    if($temp[0] == '.'){
      $temp = str_replace('.', '0.', $temp);
    }
    return $temp;
  }
?>
<pre><?php print_r($output); ?></pre>