<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<body>
<!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column social-media">
        <div class="social-media-show">
          <a href="https://www.facebook.com/savemrtph" target="_blank"><img src="<?php echo base_url(); ?>assets/images/fb.png"></a>
         <a href="https://twitter.com/savemrt" target="_blank"><img src="<?php echo base_url(); ?>assets/images/twi.png"></a>
         <a href="https://instagram.com/savemrt" target="_blank"><img src="<?php echo base_url(); ?>assets/images/insta.png"></a>
        </div>
        <div class="tagline2">
          
           <h1>#SaveMrt</h1>
        </div>
      </div>
      <div class="one-half column">
        <div class="tagline">
           
           <h1>#SaveMrt</h1>
        </div>
         <div class="social-media-hide">
          <a href="https://www.facebook.com/savemrtph"><img src="<?php echo base_url(); ?>assets/images/fb.png"></a>
          <a href="https://twitter.com/savemrt"><img src="<?php echo base_url(); ?>assets/images/twi.png"></a>
          <a href="https://instagram.com/savemrt"><img src="<?php echo base_url(); ?>assets/images/insta.png"></a>
        </div>
      </div>
    </div>

    <div class="row background">
      <div class="twelve column info-holder">
        <div class="form-holder"> 
             <?php echo form_open('petition/validation');?>

                <div class="row">
                  <div class="twelve columns">
                    <h2>Join Our Petition</h2>
                    <label for="exampleEmailInput">Name:</label>
                    <input type="text" name="name" placeholder="First Name, Last Name" value=""/>
                    <?php echo form_error('name', '<div  style="margin: -13px 21% 12px 0;color: white;background-color:#f93e3f;border-radius: 4px;">', '</div>'); ?>


                    <label for="exampleEmailInput">Location:</label>
                    <input type="text" name="location" placeholder="City, Country" value=""/>
                    <?php echo form_error('location', '<div  style="margin: -13px 21% 12px 0;color: white;background-color:#f93e3f;border-radius: 4px;">', '</div>'); ?>


                    <label for="exampleEmailInput">Contact Info:</label>
                    <input type="text" name="contact" placeholder="Email Address, Phone Number" value=""/>
                    <?php echo form_error('contact', '<div  style="margin: -13px 21% 12px 0;color: white;background-color:#f93e3f;border-radius: 4px;">', '</div>'); ?>

                  
                <label for="exampleMessage">Message</label>
                  <?php 
                    $data = array(
                      'name'        => 'message',
                      'id'          => 'message',
                      'placeholder'       => 'Add a comment...',
                    );
                    
                echo form_textarea($data); ?>
                <?php echo form_error('message', '<div  style="margin: -17px 20% 11px 0;color: white;background-color:#f93e3f;border-radius: 4px;">', '</div>'); ?>
                </div>
                  
                </div>

                <div style="width:95%; text-align:right;">
                  <input class="button-primary" type="submit" value="Submit">
                </div>
                
               <?php  echo form_close();
                ?>
              
          </div>

        </p>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns petition">
        <h2>Rehabilitate MRT now!</h2>
         <p>Petitioning the Department of Transportation and Communication of the Philippines (DOTC) and H.E. President of the Republic of the Philippines Benigno Aquino III</p><p>
        We, the undersigned, concerned citizens from the Philippines as well as supporters from around the world, appeal for the total rehabilitation of the MRT-3 Philippines to, first but not the only appeal, ensure the safety of its passengers.</p><p>
        This is a petition calling for more coaches to result to shorter train intervals, calling for new rail tracks for a more steady ride, calling for functioning elevators and escalators for the PWDS, pregnant women, elders, and the like, calling for all the MRT functions to be changed, overhauled NOT only refurbished from its current state; all these to ensure effectivity and efficiency for the riding public.</p><p>
        After the overhauling, we are petitioning that the different offices-in-charge of the upcoming bidding for a three (3) year maintenance contract of the MRT-3 to bring back Sumitomo Corp., the first and most effective maintenance provider that handled MRT-3.<br>
        Read Sumitomo’s legacy on the maintenance of MRT-3:<br>
        If for legal reasons, the Sumitomo cannot be awarded as the maintenance provider, we call for a maintenance provider as trustworthy, knowledgeable, and competent as Sumitomo.</p><p>
        Lastly, we are petitioning that all the contracts regarding the MRT-3 shall not be awarded to any company affiliated to or with members affiliated to Philippine Trans Rail Management and Services Corporation-Comm Builders and Technology Philippines Corporation (PH Trams-CB&T) and Global-APT—example but not limited to Global Epcom, Future Logic, former DOTC Secretary Mar Roxas (currently DILG Secretary), DOTC Secretary Joseph Emilio Aguinaldo Abaya, former MRT General Manager Al Vitangcol III, DOTC Bids and Awards Committee (BAC) members, Members of the negotiating team Misael Narca, Engr. Joel Magbanua, Arnel Manresa, Natividad Sansolis, Engr. Gina Rodriguez, Eugene Cecilio, Engr. Raphael Lavides, Atty.  Geronimo Quintos, Representatives from the joint venture of the PH Trams-CB&T Wilson de Vera, Arturo Soriano, Marlo dela Cruz, Manolo Maralit, and Federico Remo.</p><p>
        The MRT-3 commuters have already suffered a lot because of the incompetencies of these companies and their members and we want that to stop now.</p><p>
        This is our petition. Our vision for MRT-3 may be limited as of the moment but we are open for communication to improve our calls, and pleas.<br>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns petitioner-count">
        <h2>Total count: <br><?php echo $this->db->count_all_results('petitioners'); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <div class="petitioner-holder">
          <div class="petitioner-container">
            <table class="u-full-width form-content">
              <thead>
                <tr>
                  <th style="width:3%;">Name</th>
                  <th style="width:3%;">Location</th>
                  <th style="width:3%;">Contact Information</th>
                  <th>Message</th>
                </tr>
              </thead>

              <tbody>
                  <?php foreach($records as $rec) {?>
                  <tr>
                    <td style="width:2%;"><?php echo $rec->name;?></td>
                    <td style="width:2%;"><?php echo $rec->location;?></td>
                    <td style="width:5%;"><?php echo $rec->contact;?></td>
                    <td style="width:5%;"><?php echo $rec->message;?></td>
                  </tr>

                  <?php }?>
              </tbody>

              </table>
          
          </div>
      
        </div>
      </div>
    </div>


  </div>

<script type="text/javascript">
    $(document).ready(function(){
     window.onload = function() {
     $('html, body').animate({
        scrollTop: $(".petitioner-count").offset().top
      }, 2000);
    };

  });

</script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>