   <!-- popular route new section added here -->


   <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    // Append the host(domain name, ip) to the URL.   
    $url .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL   
    $url .= $_SERVER['REQUEST_URI'];


    $state_name = explode('/', $url);

    if ($state_name[count($state_name) - 1] == "") {
        $state_name = $state_name[count($state_name) - 2];
    } else {
        $state_name = $state_name[count($state_name) - 1];
    }



    ?>


   <section class="popular-routes">
       <div class="popular-routes-main-heading-container">
           <p class="services-main-heading-big">SHIP YOUR CAR TO AND FROM THE <?= ucfirst($state_name) ?></p>
           <div class="popular-routes-main-heaading-grid">
               <div class="popular-routes-grid-left-part">

                   <?php



                    $array = [];


                    for ($i = 0; $i < count($state_name_array); $i++) {
                        if ($state_name_array[$i] != strtolower($state_name)) {
                            array_push($array, $state_name_array[$i]);
                        }
                    }

                    for ($i = 0; $i < count($array); $i++) {  ?>


                       <div class="popular-routes-names-container-box">
                           <pre>
                           <a href="#"><?= ucwords(str_replace('-', ' ', $state_name)) . "          " . "to" . "          " . $array[$i]  ?></a>
                           
                       </div>

                   <?php  } ?>

               </div>
               <div class="popular-routes-grid-right-part">


                   <?php



                    $array = [];


                    for ($i = 0; $i < count($state_name_array); $i++) {
                        if ($state_name_array[$i] != strtolower($state_name)) {
                            array_push($array, $state_name_array[$i]);
                        }
                    }

                    for ($i = 0; $i < count($array); $i++) {  ?>


                       <div class="popular-routes-names-container-box  popular-routes-grid-right-part-container">

                           <pre>
                           <a href="#"><?= $array[$i] .  "       " . " from" . "        "  . ucwords(str_replace('-', ' ', $state_name))  ?></a>
</pre>
                       </div>

                   <?php  } ?>

               </div>
           </div>
       </div>
       </div>
   </section>