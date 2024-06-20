<?php

// Template Name: MainPage

get_header();

$Section_1 = get_field('first_section');
$Section_2 = get_field('second_section');
$Section_3_head = get_field('third_section_head');
$Section_3_cards = get_field('third_section_cards');
$Section_4_head = get_field('fourth_section_head');
$Section_4_card = get_field('fourth_section_cards');


$Section_6_head = get_field('next_trip_header');
$Section_6_cards = get_field('next_trip_card');
$Section_6_Greece = get_field('trip_to_greece_card');
$Section_7_Jeo =  get_field('jeo_stanlee');
$Section_8 = get_field('subscribe');
$Subscr = $Section_8['subsc_text'];
$url = $Section_8['url'];
$Section5_card = get_field('package');



// echo '<pre>';
// print_r($Section_8); 
// echo '</pre>';


?>

<section class="mainContent">
      
    <div class="section-1  container" >
             <h1> <?php echo $Section_1['main_title']?></h1>
              <p><?php echo $Section_1['main_paragraph']?></p>
            <?php echo myButton('Discover more', 'myBtn') ?>      
    </div>  
</section>

<section class="section-2 container">
     <h2><?php echo $Section_1['main_title_2']; ?></h2>
    <div class="ourServiceCards">
        <?php
          foreach ($Section_2 as $card) {
            echo '<div class="serviceCards">
                    <div class="cardImg">
                          <img src="' . $card['image'] . '" alt="">
                    </div>
                    <h3>' . $card['secondary_title'] . '</h3>
                    <p>' . $card['main_paragraph'] . '</p>
                  </div>';
          }
        ?>
    </div>
</section>

<section class="bestService">
  <div class="section-3 container">
    <div class="emptyBox"></div>
          <div class="section-3-content">
            <h1><?php echo $Section_3_head['main_title']; ?></h1>
            <p><?php echo $Section_3_head['main_paragraph']; ?> </p>
            <div class="bestServiceBox">
              <?php
                  for ($i = 1; $i <= sizeof($Section_3_cards); $i++) {
                    $card = 'card_' . $i;
                    echo '
                        <div class="bestServiceCards">
                            <div class="bestServiceImg">
                                <img src="' . $Section_3_cards[$card]['image'] . '" alt="">
                            </div>
                            <h3>' . $Section_3_cards[$card]['title'] . '</h3>
                            <p>' . $Section_3_cards[$card]['paragraph'] . '</p>
                        </div>';
                      }
                  ?>
            </div>
          </div>
  </div>
</section>

<section class="destination">
     <div class="destinationBox container">
          <h2><?php echo $Section_4_head['page_title']; ?></h2>
        <div class="destinationContent">
          <div class="destinationImg">
              <img src="<?php echo get_template_directory_uri() .'/assets/world-map.svg'?>" alt="">
          </div>
            <div class="destinationCards">
              <?php
                  for ($i = 1; $i <= sizeof($Section_4_card); $i++) {
                    $card = 'card_'. $i;
                    echo '
                      <div class="destinationCard">
                          <a href="' . $Section_4_card[$card]['url'] . '">
                            <div class="destImg">
                              <img src="' . $Section_4_card[$card]['image'] . '" alt="">
                            </div>
                          </a>
                              <div class="destinationText">
                                <h3>' . $Section_4_card[$card]['card_title'] . '</h3>
                                <p>' . $Section_4_card[$card]['card_description'] . '</p>
                              </div>
                            <div class="destinationNextIcon">
                              <img src="' . $Section_4_card[$card]['swipe'] . '" alt="">
                            </div> 
                      </div>';
                    }
                ?>
          </div>
        </div>
     </div> 
</section>

<section class="packages">
    <div class="packagesBox container">
        <h2>Best Packages For You</h2>
        <div class="packageBtn">
          <?php echo myButton('Hot Deals', 'myBtn') ?>
          <?php echo myButton('Backpack', 'myBtn2') ?>
          <?php echo myButton('South Asia', 'myBtn2') ?>
          <?php echo myButton('Honeymoon', 'myBtn2') ?>
          <?php echo myButton('Europe', 'myBtn2') ?>
          <?php echo myButton('More', 'myBtn2') ?>
        </div>
        <div class="packageCards">
              <?php
                foreach ($Section5_card as $card) {
                  echo '
                    <div class="packageCard">
                     <a href="'. $card['url'] .'"> 
                        <div class="packageImg">
                          <img src="'. $card['main_image'] .'" alt="image">
                        </div>
                      </a>
                        <div class="packageDescr">
                              <div class="descrText">
                                  <p>'. $card['secondary_title'] .'</p>
                                  <p>'. $card['price'] .'</p>
                              </div>
                              <p>'. $card['secondary_title_2'] .'</p>
                              <div class="descrMore">
                                    <div class="location">
                                        <div class="locationImg">
                                          <img src="'. $card['icon'] .'" alt="">
                                        </div>
                                        <h4>'. $card['title'] .'</h4>
                                    </div>
                                    <a href="'. $card['url'] .'">Know More</a>
                              </div>
                        </div>
                    </div>';
                }
              ?>
              </a>
        </div>
        <div class="packageButton">
          <?php echo myButton('Discover More', 'myBtn') ?>
        </div>
    </div>
</section>

<section class="nextTrip">
    <div class="nextTripBox container">
      <div class="nextTripDescrText">
            <h2><?php echo $Section_6_head['title']; ?></h2>
            <p><?php echo $Section_6_head['description']; ?></p>
      </div>
        <div class="TripContent">
          <div class="tripCards">
            <?php
            for($i =1; $i <= sizeof($Section_6_cards); $i++){
              $card = 'card_' . $i;
              echo '
                  <div class="tripDescr">
                  <div class="tripDescrImg">
                        <img src="' . $Section_6_cards[$card]['image'] . '" alt="">
                  </div>
                  <div class="tripText">
                        <h4>' . $Section_6_cards[$card]['card_text'] . '</h4>
                        <p>' . $Section_6_cards[$card]['card_description'] . '</p>
                  </div>
                </div>
              ';
            }
            ?>
          </div>
          
          <div class="tripGreece">
              <div class="greeceCard">
                  <?php 
                  foreach($Section_6_Greece as $greece) {
                    echo '
                      <div class="greeceImg">
                        <img src="'. $greece['main_image'] . '" alt="">
                      </div>
                      <div class="greeceText">
                            <h5>'. $greece['main_title'] . '</h5>
                            <p>'. $greece['main_description'] . '</p>
                            <div class="greeceIcons">
                              <img src="'. $greece['icon_1'] . '" alt="">
                              <img src="'. $greece['icon_2'] . '" alt="">
                              <img src="'. $greece['icon_3'] . '" alt="">
                            </div>
                            <div class="greeceStats">
                                <div class="greeceInfo">
                                  <img src="'. $greece['icon_4'] . '" alt="">
                                  <p>24 people going</p>
                                </div>
                                <div class="greeceInfoImg">
                                  <img src="'. $greece['icon_5'] . '" alt="">
                                </div>
                            </div>
                      </div>
                    ';
                  }
                  ?>
                  <div class="tripeRome">
                      <div class="romeImg">
                        <img src="<?php echo get_template_directory_uri() . '/assets/rome.svg'?>" alt="">
                      </div>
                      <div class="romeText">
                          <p>Ongoing</p>
                          <h4>Trip to rome</h4>
                          <h5><span>40%</span>completed</h5>
                          <div class="progress">
                            <div class="progress-bar"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</section>


<section class="JeoStanlee">
  <div class="JeoStanleeBox container">
    <div class="jeoTitle">
        <h2>What People Say About Us</h2>
    </div>
    <div class="slider">
          <div class="sliderImg">
            <img src="<?php echo get_template_directory_uri() . '/assets/Japan2.svg'?>" alt="">
          </div>
          <div class="jeoStanleeBox">
              <div class="jeoStanlee">
                <img src="<?php echo get_template_directory_uri() . '/assets/Jeo-Staniee.svg'?>" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor</p>
              <h4>-Jeo Stanlee</h4>
          </div>
    </div>
  </div>
</section>

<section class="subscribe">
    <div class="subscribeBox container">
      <div class="subscription">
        <div class="emptyBox2"></div>
            <h3><?php echo $Subscr ?> </h3>
           
              <form action="./footer-pages/subscribe.php" method="post" class="subscription-form">
                <div class="subInput">
                  <input type="email" name="email" placeholder="Your email" required class="email-input"/>
                  <?php echo mySumbit('Subscribe', 'myBtn3') ?>
                </div>
                <div class="greenSend">
                  <img src="<?php echo get_template_directory_uri() . '/assets/greenSend.svg'?>" alt="">
                </div>
                <div class="sparkles">
                  <img src="<?php echo get_template_directory_uri() . '/assets/sparkles.svg'?>" alt="">
                </div>
                <div class="circles">
                  <img src="<?php echo get_template_directory_uri() . '/assets/circles.svg'?>" alt="">
                </div>
              </form>
        </div>
    </div>
</section>



<?php
get_footer();