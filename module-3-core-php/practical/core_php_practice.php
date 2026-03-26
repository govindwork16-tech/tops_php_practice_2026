<?php 

// $team = [
//     "name" => "Govind",
//     "position" => "Frontend Developer",
//     "experience" => 5
// ];

// foreach ($team as $key => $value) {
//     echo $key. ":" . $value ."<br>";  
// }

// $services = [
//     "Web Design",
//     "SEO",
//     "WordPress Development",
//     "UI Design"
// ];

// foreach ($services as $service_name => $value) {
//     echo "Services:" . $value . "<br>";
// }

// $team = [
//     [
//         "name" => "Govind",
//         "role" => "Developer"
//     ],
//     [
//         "name" => "Harsh",
//         "role" => "Designer"
//     ],
//     [
//         "name" => "Rahul",
//         "role" => "SEO Expert"
//     ]
// ];

// foreach ($team as $key => $value) {
//     echo $key . ":" . $value . "<br>";
// }

// date_default_timezone_get('Asia/calcutta');

$date_wrapper = mktime(00,00,00,date('m'),date('d'),date('y'));

echo "Current Date is: ". date("d/m/y", $date_wrapper);

?>