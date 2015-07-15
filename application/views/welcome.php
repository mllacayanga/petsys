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
          <a href="https://www.facebook.com/savemrtph"><img src="<?php echo base_url(); ?>assets/images/fb.png"></a>
         <a href="https://twitter.com/savemrt"><img src="<?php echo base_url(); ?>assets/images/twi.png"></a>
         <a href="https://instagram.com/savemrt"><img src="<?php echo base_url(); ?>assets/images/insta.png"></a>
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
      <div class="one-half column info-holder">
        <h2>Bring Back Sumitomo!</h2>
        <p>Petitioning the Department of Transportation and Communication of the Philippines and H.E. President of the Republic of the Philippines Benigno Aquino III. <br>
          Bring back Sumitomo as the maintenance provider of the MRT-3!<br>
          We, the undersigned, concerned citizens from the Philippines as well as supporters from around the world, appeal for the total rehabilitation of the MRT-3 Philippines to, first but not the only appeal, ensure the safety of its passengers.<br>
          We are asking the different offices in-charge of the upcoming bidding for a three year maintenance contract of the MRT-3 to BRING BACK SUMITOMO!<br>
          Sumitomo Corp. provided maintenance service to MRT-3 from 1997 to 2012 and those were the best days we’ve seen of the trains. Regular news has well documented the deterioration of our metro trains since Sumitomo was kicked out.
          BRING BACK SUMITOMO because they are perfectly knowledgeable on how to manage the MRT-3; they are a part of the team which constructed our trains and therefore, they know the MRT-3 from inside and out.<br>
          We do not need to grant the award to the lowest bidder. We do not need any more cheaper but poor quality service. We need an effective maintenance provider. The government has more than enough budget to spend on our trains; this we know.<br>
          BRING BACK SUMITOMO!
        </p>
      </div>
      <div class="one-half column">
        <div class="form-holder">
             <?php echo form_open('petition/validation');?>




                <div class="row">
                  <div class="twelve columns">
                    <h2>Join Our Petition.</h2>
                    <label for="exampleEmailInput">Name:</label>
                    <input type="text" name="name" placeholder="First Name, Last Name" value=""/>
                    <?php echo form_error('name', '<div  style="margin: -17px 20% 11px 0;color: white;background-color:#f93e3f;border-radius: 4px;">', '</div>'); ?>


                    <label for="exampleEmailInput">Location:</label>
                    <input type="text" name="location" placeholder="City, Country" value=""/>
                    <?php echo form_error('location', '<div  style="margin: -17px 20% 11px 0;color: white;background-color:#f93e3f;border-radius: 4px;">', '</div>'); ?>


                    <label for="exampleEmailInput">Contact Info:</label>
                    <input type="text" name="contact" placeholder="Email Address, Phone Number" value=""/>
                    <?php echo form_error('contact', '<div  style="margin: -17px 20% 11px 0;color: white;background-color:#f93e3f;border-radius: 4px;">', '</div>'); ?>


                  
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

                <input class="button-primary" type="submit" value="Submit">
               <?php  echo form_close();
                ?>
              
          </div>
      </div>
    </div>

    <div class="row">
      <div class="one-half column petitioners">
        <h2>Save Mrt Petitioners</h2>
      </div>
      <div class="one-half column petitioner-count">
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


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>