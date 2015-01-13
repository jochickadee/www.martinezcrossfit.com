  <?php $title = 'Martinez CrossFit | Contact Us'; include("header.php"); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <div class="contact-icons">

            <div class="col-xs-3"><a href="tel:9255863108"><span class="glyphicon glyphicon-earphone"></span><p>Call Ralphie <br>(925) 586&ndash;3108</p></a></div>

            <div class="col-xs-3"><a href="mailto:martinezcrossfit@yahoo.com?Subject=Email%20From%20MartinezCrossFit.com" target="_top"><span class="glyphicon glyphicon-send"></span><p>Email<br>MCF</p></a></div>

            <div class="col-xs-3"><a href="https://www.facebook.com/MartinezCrossFit"><span class="icon-facebook2"></span><p>Like Us<br>On Facebook</p></a></div>

            <div class="col-xs-3"><a href="http://instagram.com/martinezcrossfit/"><span class="icon-instagram"></span><p>Follow Us<br>On Instagram</p></a></div>

          </div><!--/.contact-icons -->
        </div><!--/.col-md-12 -->
        <div class="col-md-12">
          <div class="contact-form">
            <h3>Have a question/comment? Fill out the form below and we will contact you.</h3>
            <form method="post" action="contact.php">

                <label>Name</label>
                <input name="name" placeholder="Type Here">
                  <br>
                <label>Email</label>
                <input name="email" type="email" placeholder="Type Here">
                  <br>
                <label>Phone</label>
                <input name="phone" type="tel" placeholder="Type Here">
                  <br>
                <label>Message</label>
                <textarea name="message" placeholder="Type Here"></textarea>
                  <br>
                <label>*What is 2+2? (Anti-spam)</label>
                <input name="human" placeholder="Type Here">
                  <br>
                <input id="submit" name="submit" type="submit" value="Submit">

            </form>
          </div><!--/.contact-form -->
        </div><!--/.col-md-12 -->
      </div><!--/.row -->
  <?php include 'footer.php';?>
