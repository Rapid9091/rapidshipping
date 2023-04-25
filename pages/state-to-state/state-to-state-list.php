<?php include_once "../../init.php";

$query_to_fetch_state = "SELECT * FROM `state_to_state`";
$state_list = fetch_all_data($query_to_fetch_state);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>State to state list</title>
    <meta name="description" content="Rapid Auto Shipping provides a fast, easy way to ship cars state to state. Our services include door-to-door pickup and delivery of your car along with a free rental vehicle." />

    <!--     Google Analytics Code Start -->


    <!--     Google Analytics Code Ends -->

    <?php include head; ?>
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_home.css">
    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_contactus.css">
    <!-- animation css link   -->

    <link rel="stylesheet" href="<?= get_css(); ?>PAGE_state_to_state_list.css">


</head>

<body>
    <!-- this is header -->
    <?php include header; ?>
    <main>
        <h1>State to state auto transport List</h1>

        <div class="breadcumb-search-parent">
            <div class="breadcumb">
                <a href="<?= home_path() ?>">Home</a>><a href="#">State-to-state</a>
            </div>
            <div class="search">
                <input type="text" id="search" placeholder="Search" onkeyup="serach_data(this.value)">
                <div class=" search-img">
                    <img src="<?= get_img() ?>icons8-search-60.png" alt="search icon">
                </div>
            </div>
        </div>

        <div class="table-box">
            <div class="box-table">
                <div class="table-parent">
                    <div class="div">
                        <p>State</p>
                    </div>
                    <div class="div">
                        <p>To</p>
                    </div>
                    <div class="div">
                        <p>State</p>
                    </div>
                    <div class="div">
                        <p>Slug</p>
                    </div>
                    <div class="div">
                        <p>Action</p>
                    </div>

                </div>
                <div class="state-to-state-list" id="state-to-state-list">
                    <?php

                    if ($state_list) {

                        for ($i = 0; $i < count($state_list); $i++) {
                            $state = $state_list[$i];

                    ?>

                            <div class="table-child">
                                <div>
                                    <p> <?= $state['state_form']  ?></p>
                                </div>
                                <div>
                                    <p>to</p>
                                </div>
                                <div>
                                    <p> <?= $state['state_to']  ?></p>
                                </div>
                                <div>

                                    <p> <?= $state['slug'] ?></p>
                                </div>

                                <div>
                                    <a style="text-decoration:underline;" href="<?= home_path()."state-to-state/".$state['slug'];?>" class="btn-yellow-1">View More</a>
                                </div>

                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>

        </div>

    </main>


    <?php include_once page_bottom ?>

    <script>
        function serach_data(data) {
            data = data.toLowerCase();
            let perant = document.getElementById('state-to-state-list');
            for (let index = 0; index < perant.children.length; index++) {
                const element = perant.children[index];
                let dd = element.children[3].children[0].innerHTML;
                dd = dd.toLowerCase()
                if (data != "" && dd.indexOf(data) == -1) {
                    element.style.display = "none";
                } else {
                    element.style.display = "grid";
                }
            }
        }
    </script>

</body>

</html>
<!-- <?php

// if ($state_list) {

//     for ($i = 0; $i < count($state_list); $i++) {
//         $state = $state_list[$i];

//         echo home_path() . "state-to-state/" . $state['slug'];
//         echo  "<br>";
//     }
// }

?> -->