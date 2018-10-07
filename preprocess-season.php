<?php
  $output = array();
  $months = ["DJF","MAM","JJA","SON"];
  if (($handle = fopen("assets/data/GLB.Ts+dSST.csv", "r")) !== FALSE) {
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
            $output[] = array(
              "year" => $d["Year"]."-01-01T05:00:00.000Z",
              "season" => $key,
              "temp" => sanitize($value)
            );
          }
        }
      }
    }
    fclose($handle);

    $fp = fopen('assets/data/land-ocean-season.json', 'w');
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
  function getMonth($month){
    switch ($month) {
      case 'Jan': return "01";
      case 'Feb': return "02";
      case 'Mar': return "03";
      case 'Apr': return "04";
      case 'May': return "05";
      case 'Jun': return "06";
      case 'Jul': return "07";
      case 'Aug': return "08";
      case 'Sep': return "09";
      case 'Oct': return "10";
      case 'Nov': return "11";
      case 'Dec': return "12";
    }
  }
?>
<pre><?php print_r($output); ?></pre>