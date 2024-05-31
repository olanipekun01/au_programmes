<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUO Programmes</title>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <a href="." class="logos_content">
            <img src="./assets/new_logo_black-1.png" alt="" class="logo" />
            <!-- <span>Achievers University</span> -->
        </a>

        <a href="https://www.achievers.edu.ng/" class="go_to_website">Go to Website</a>
    </header>

    <div class="card_wrapper">

        <?php 
            $json_data = file_get_contents("courses.json");
            $programmes = json_decode($json_data, true);

            if(count($programmes) != 0) {
                foreach($programmes as $programme) {
   
                    for ($i = 0; $i < count($programme["courses"]); $i++) {

                        ?>
                        <div class="card">
                            <div class="card_image">
                                <img src="./assets/<?php echo $programme["courses"][$i]["img"] ?>" alt="">
                            </div>
                
                            <div class="card_body">
                                <h2><?php echo $programme["courses"][$i]["course"] ?></h2>
                
                                <p class="card_text">Faculty: <?php echo $programme["faculty"] ?></p>
                
                                <p class="card_text_ii ">Session: 2024/2025</p>
                
                                <h5>Closes: 31/08/2024</h5>
                
                                <div class="btn_wrapper">
                                    <a href="https://apply.achievers.edu.ng">Apply Now</a>
                                    <a href="" class="learn_more">Learn More</a>
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                }
            }
        ?>
        
    </div>


    <footer>&copy Achievers programme website | Developed and Managed by: Webmaster AU-ICT <i>Eyitayo Olonilua, oloniluaeyitayo@gmail.com</i></footer>
</body>
</html>