<!-- <?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Get the value of 'id' parameter from the URL

if (!isset($table_data_desc[$id])) {
    $table_data_desc[$id] = [
      'tabledesc' => '', 
    ];
  }
?>   -->


<?php

// Get the current URI
$currentUrl = $_SERVER['REQUEST_URI'];

// Parse the URL to get the path
$urlParts = parse_url($currentUrl);

// Get the path from the URL parts
$path = $urlParts['path'];

// Get the last segment of the path using basename
$lastSegment = basename($path);

// Output the last segment
// echo "Last URI segment: " . $lastSegment;

switch ($lastSegment) {
  case 'jaw-crushers':
    $id = 0;
    break;
  case 'cone-crushers':
    $id = 1;
    break; 
  case 'sander-cone':
    $id = 2;
    break;
  case 'vertical-shaft-impactor':
    $id = 3;
    break;
  case 'high-frequency-screens':
    $id = 4;
    break;
  case 'grizzly-feeders':
    $id = 5;
    break;
  case 'vibrating-screen':
    $id = 6;
    break;
  default:
    $id = 0;
    break;
}


// Get the id parameter from the URL
// $id = isset($_GET['id']) ? $_GET['id'] : null;

// // Define empty values if $id is not set or not valid
// if (!isset($Prod_Banner[$id])) {
//   $Prod_Banner[$id] = [
//     'image' => '',
//     'title' => '',
//     'subtitle' => '',
//     'description' => ''
//   ];
// }

// if (!isset($successInEveryHardness[$id])) {
//   $successInEveryHardness[$id] = [
//     'h1' => '',
//     'd1' => '',
//     // Repeat for other elements...
//   ];
// }

// if (!isset($table_data[$id])) {
//   $table_data[$id] = [
//     'modal1' => '',
//     'modal2' => '',
//     'modal3' => '',
//     'modal1_data_1' => '',
//     'modal2_data_1' => '',
//     'modal3_data_1' => '',
//     'modal1_data_2' => '',
//     'modal2_data_2' => '',
//     'modal3_data_2' => '',
//     'modal1_data_3' => '',
//     'modal2_data_3' => '',
//     'modal3_data_3' => '',
//   ];
// }
?>

<?php if ($id === 0) { ?>
    <!-- JAw crusher-->
    <div class="table-data">
        <h1>Technical specification</h1>
        <p><?php echo $table_data_desc[$id]['tabledesc'] ?></p>

        <div class="elementor-widget-container">
            <div class="pp-table-container">
                <table class="tablesaw">
                    <colgroup>
                        <col span="1" class="">
                    </colgroup>
                    <thead>
                        <tr class="tab-heading">
                            <th>Model</span></th>
                            <th><span>J60</span></th>
                            <th><span>J70</span></th>
                            <th><span>1209</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class="tab-data"><span>Size</span></td>
                            <td class="tab-data"><span>30 x 42</span></td>
                            <td class="tab-data"><span>34 x 52</span></td>
                            <td class="tab-data"><span>36 x 48</span></td>
                        </tr>
                        <tr class="even-col">
                            <td class="tab-data"><span>Feeding Size</span></td>
                            <td class="tab-data"><span>600 mm</span></td>
                            <td class="tab-data"><span>700 mm</span></td>
                            <td class="tab-data"><span>900 mm</span></td>
                        </tr>
                        <tr class="even-col">
                            <td class="tab-data"><span>Motor Capacity (kw)</span></td>
                            <td class="tab-data"><span>110</span></td>
                            <td class="tab-data"><span>-</span></td>
                            <td class="tab-data"><span>-</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
<?php } elseif ($id === 1) { ?>
    <!-- Cone crusher -->
    <!-- t1 200-->
    <div class="table-data">
        <h1>Technical specification SH 200 Cone</h1>
        <p>The Core SH 200 Cone boasts cast top and bottom shells for enduring crushing loads, a hydraulically supported forged alloy main shaft assembly with push-button control, and specially designed mantle and concave profiles for consistent feed opening retention. Its all-roller bearing design ensures high load capacity and constant alignment, reducing frictional losses and enabling variable operational speeds. The built-in hydraulic rotary feed distributor optimizes material distribution for increased wear life and enhanced capacity.</p>

        <div class="elementor-widget-container">
            <div class="pp-table-container table-responsive">
                <table class="tablesaw">
                    <colgroup>
                        <col span="1" class="">
                    </colgroup>
                    <thead>
                        <tr class="tab-heading">
                            <th>Max Feed Size (mm)</th>
                            <th>Motor Size Kw/HP</th>
                            <th>Crusher Weight (MT)</th>
                            <th colspan="9">Closed Side Setting (mm), Throughput capacity (mtph)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class=" "> </td>
                            <td class=" "> </td>
                            <td class=" "> </td>
                            <td class=" ">14</td>
                            <td class=" ">16</td>
                            <td class=" ">18</td>
                            <td class=" ">20</td>
                            <td class=" ">22</td>
                            <td class=" ">25</td>
                            <td class=" ">28</td>
                            <td class=" ">30</td>
                            <td class=" ">32</td>
                        </tr>
                        <tr class="even-col">
                            <td style="color: red;">Coarse Concave-165</td>
                            <td rowspan="2"> Up to 150/200</td>
                            <td rowspan="2">13</td>
                            <td class=" "> </td>
                            <td class=" "> </td>
                            <td class=" "> </td>
                            <td class=" ">140-150</td>
                            <td class=" ">150-160</td>
                            <td class=" ">175-185</td>
                            <td class=" ">200-210</td>
                            <td class=" ">210-220</td>
                            <td class=" ">220-230</td>
                        </tr>
                        <tr class="even-col">
                            <td>Medium Concave-115</td>
                            <!-- <td rowspan="2"> Up to 150/200</td>
                            <td rowspan="2">13</td> -->
                            <td class=" ">105-110</td>
                            <td class=" ">110-120</td>
                            <td class=" ">120-130</td>
                            <td class=" ">130-140</td>
                            <td class=" ">140-150</td>
                            <td class=" ">165-175</td>
                            <td class=" "> </td>
                            <td class=" "> </td>
                            <td class=" "> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- t2 400 -->
    <div class="table-data">
        <h1>SH 400 Cone Crusher </h1>
        <p>The Core SH 400 Cone Crusher is built to withstand tough quarry and mining conditions. Featuring anti-friction roller bearings, a 37 kW motor, and a cartridge-type design for easy access to components, it offers enhanced crushing power and serviceability. With a compact, balanced design and no speed limitations, it ensures superior productivity and flexibility. Its hydraulically operated rotary feed distributor optimizes material distribution, while optional extras provide added customisation.</p>

        <div class="elementor-widget-container">
            <div class="pp-table-container table-responsive">
                <table class="tablesaw">
                    <colgroup>
                        <col span="1" class="">
                    </colgroup>
                    <thead>
                        <tr class="tab-heading">
                            <th>Max Feed Size (mm)</th>
                            <th>Motor Size Kw/HP</th>
                            <th>Crusher Weight (MT)</th>
                            <th colspan="10">Closed Side Setting (mm), Throughput capacity (mtph)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class="">12</td>
                            <td class="">14</td>
                            <td class="">16</td>
                            <td class="">18</td>
                            <td class="">20</td>
                            <td class="">22</td>
                            <td class="">25</td>
                            <td class="">30</td>
                            <td class="">40</td>
                            <td class="">50</td>
                        </tr>
                        <tr class="even-col">
                            <td>EC Bowl (-) 280mm</td>
                            <td></td>
                            <td rowspan="2">30</td>
                            <!-- <td></td> -->
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>300-360</td>
                            <td>330-450</td>
                            <td>380-500</td>
                        </tr>
                        <tr class="even-col">
                            <td>Coarse Bowl (-) 200mm</td>
                            <td>Up to 315/400</td>
                            <!-- <td></td> -->
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td></td> -->
                            <td>260-330</td>
                            <td>280-350</td>
                            <td>300-400</td>
                            <td></td>
                        </tr>
                        <tr class="even-col">
                            <td>Medium Bowl (-) 120mm</td>
                            <td></td>
                            <td rowspan="2">28.5</td>
                            <td></td>
                            <td></td>
                            <td>200-250</td>
                            <td>220-280</td>
                            <td>240-300</td>
                            <td>260-320</td>
                            <td>260-340</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="even-col">
                            <td>Medium Fine Bowl (-) 70mm</td>
                            <td></td>
                            <!-- <td></td> -->
                            <td>160-190</td>
                            <td>175-215</td>
                            <td>190-240</td>
                            <td>205-260</td>
                            <td>220-280</td>
                            <td>230-290</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php } elseif ($id === 2) { ?>
    <!-- Sander cone -->
    <div class="table-data">
        <h1>Technical specification</h1>
        <p>Setting new standards in precision and performance.</p>

        <div class="elementor-widget-container">
            <div class="pp-table-container">
                <table class="tablesaw">
                    <colgroup>
                        <col span="1" class="">
                        <col span="1" class="">
                    </colgroup>
                    <thead>
                        <tr class="tab-heading">
                            <th>Model</th>
                            <th>SH200F</th>
                            <th>SH400F</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class="tab-data">Through-put</td>
                            <td class="tab-data">200 TPH</td>
                            <td class="tab-data">400 TPH</td>
                        </tr>
                        <tr class="even-col">
                            <td class="tab-data">Sand Production </td>
                            <td class="tab-data">50- 70 TPH</td>
                            <td class="tab-data">110- 135 TPH</td>
                        </tr>
                        <tr class="even-col">
                            <td class="tab-data">Motor Capacity (kw)</td>
                            <td class="tab-data">160</td>
                            <td class="tab-data">250</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
<?php } elseif ($id === 3) { ?>
    <!-- Vertical Shift impact crusher --> 
    <div class="table-data">
        <h1>Technical specification</h1>
        <p>Advanced crusher design with durable rotor wear parts, balanced for high-speed operation.</p>

        <div class="elementor-widget-container">
            <div class="pp-table-container">
                <table class="tablesaw">
                    <!-- <colgroup>
                        <col span="1" class="">
                        <col span="1" class="">
                    </colgroup> -->
                    <thead>
                        <tr class="tab-heading">
                            <th>Model</th>
                            <th>1400R</th>
                            <th>1300R</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class="tab-data">Max.Capacity</td>
                            <td class="tab-data">220-320 TPH</td>
                            <td class="tab-data">132-160 TPH</td>
                        </tr>
                        <tr class="even-col">
                            <td class="tab-data">Max Power </td>
                            <td class="tab-data">220-320kW</td>
                            <td class="tab-data">132-160kW</td>
                        </tr>
                        <tr class="even-col">
                            <td class="tab-data">Total Weight</td>
                            <td class="tab-data">9.5 T</td>
                            <td class="tab-data">6 T</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
<?php } elseif ($id === 4) { ?>
    <!-- High Frequency Screen -->
    <div class="table-data">
        <h1>Technical specification</h1>
        <p>Elevate screening efficiency with our High Energy Direct Excitation Screen, featuring a unique spring knocker system for optimal performance.</p>

        <div class="elementor-widget-container">
            <div class="pp-table-container">
                <table class="tablesaw"> 
                    <thead>
                        <tr class="tab-heading">
                            <th>Capacity</th>
                            <th>Number of Decks</th>
                            <th>Cut Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class="tab-data">25 TPH to 100 TPH</td>
                            <td class="tab-data">1 Deck to 4 Deck</td>
                            <td class="tab-data">100 microns</td>
                        </tr> 
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
<?php } elseif ($id === 5) { ?>
    <!-- Grizzly Feeders -->
    <div class="table-data">
        <h1>Technical specification</h1>
        <p>Core's Vibrating Grizzly Feeders seamlessly combine scalping and feeding functions, handling high volumes of materials for uniform, controlled feed, and optimizing crushing efficiency in any setup.</p>

        <div class="elementor-widget-container">
            <div class="pp-table-container">
                <table class="tablesaw"> 
                    <thead>
                        <tr class="tab-heading">
                            <th>Feeder size Width x Length (mm) </th>
                            <th>Grizzly Section Length (mm)</th>
                            <th>Bottom deck Area (Sq.m)</th>
                            <th>Inclination (deg)</th>
                            <th>Capacity (mtph)</th>
                            <th>Max Feed Size (mm)</th>
                            <th>Speed (rpm)</th>
                            <th>Max Power</th>
                            <th>Total weight</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class="tab-data">1080 x 4300</td>
                            <td class="tab-data">1800</td>
                            <td class="tab-data">1.23</td>
                            <td class="tab-data">0-5 deg</td>
                            <td class="tab-data">200-350</td>
                            <td class="tab-data">600</td>
                            <td class="tab-data">875</td>
                            <td class="tab-data">15kw/ 20 hp</td>
                            <td class="tab-data">3.8 mt</td>
                        </tr> 
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
<?php } elseif ($id === 6) { ?>
    <!-- Vibrating screen -->
    <div class="table-data">
        <h1>Technical specification</h1>
        <p>Experience superior material handling with Core Crushing's innovative vibrating screens, designed for efficiency and reliability.</p>

        <div class="elementor-widget-container">
            <div class="pp-table-container">
                <table class="tablesaw"> 
                    <thead>
                        <tr class="tab-heading">
                            <th>Model</th>
                            <th>No of Decks</th>
                            <th>Application</th>
                            <th>Motor Capacity (Kw)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="even-col">
                            <td class="tab-data">1542</td>
                            <td class="tab-data">2D&3D</td>
                            <td class="tab-data">+60mm</td>
                            <td class="tab-data">11</td>
                        </tr> 
                        <tr class="even-col">
                            <td class="tab-data">1848</td>
                            <td class="tab-data">2D,3D&4D</td>
                            <td class="tab-data">-50/-40mm</td>
                            <td class="tab-data">11/15/18.5</td>
                        </tr> 
                        <tr class="even-col">
                            <td class="tab-data">2160</td>
                            <td class="tab-data">3D&4D</td>
                            <td class="tab-data">-50/-40mm</td>
                            <td class="tab-data">18.5/22</td>
                        </tr> 
                        <tr class="even-col">
                            <td class="tab-data">2460</td>
                            <td class="tab-data">3D&4D</td>
                            <td class="tab-data">-50/-40mm</td>
                            <td class="tab-data">22/30</td>
                        </tr> 
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
<?php } else { ?>
    <!--Add new -->
    <h1>Create your table in tables.php</h1>
<?php } ?>