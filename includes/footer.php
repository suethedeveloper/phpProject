      <div id="footer" class="cf">
        <div class="column three">
          <strong>Phone</strong>
          888.888.8888
        </div>
        <div class="column three">
          <strong>Location</strong>
          123 Any Street <br>
          My Town, MT
        </div>
        <div class="column three last">
          <strong>Hours</strong>
          <em>Tuesday - Thursday</em> <br>
          1:00pm - 9:00pm <br><br>

          <em>Friday - Saturday</em> <br>
          4:00pm - 11:00pm <br><br>

          <em>Sunday - Monday</em> <br>
          Closed <br><br>

          <?php include('includes/store-hours.php');?>

        </div>                
      </div><!-- end of footer -->
      <small>&copy;<?php echo date('Y'); ?> <?php echo $compmayName; ?></small>
    </div><!-- end of content -->
  </div><!-- end of wrapper -->
  <div id="copyright-info">
    <?php include('../assets/copyright.php'); ?>
  </div>
  
</body>
</html>