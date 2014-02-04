<footer class="footer clearfix" role="contentinfo">
    <div class="row">
      <div class="large-12 columns">
      <div class="colgroup">
      <div class="col-1-2">
        <a href="http://studentlife.uiowa.edu" class="hide-print"><img src="images/dosl-uiowa.png" alt="Division Of Student Life" style="margin-top: -20px;"></a><br>

          <p>The Division of Student Life fosters student success by creating and promoting inclusive educationally purposeful services and activities within and beyond the classroom.</p>
    
        <p>$SiteConfig.Address<br>
        Phone: $SiteConfig.PhoneNumber
        
      </div>
      <div class="col-1-4 hide-print">
        <div class="colgroup">
          <ul class="footer-nav">

            <li><a href="$SiteConfig.FacebookLink" target="_blank"><i class="icon-facebook"></i> Facebook</a></li>
            <li><a href="$SiteConfig.TwitterLink" target="_blank"><i class="icon-twitter"></i> Twitter</a></li>
          </ul>
          <ul class="footer-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#events">Events</a></li>
        
            <li><a href="#photos">Photos</a></li>
            <li><a href="#photos">Join</a></li>
            <li><a href="#photos">More...</a></li>

          </ul>
        </div>
      </div>
      <div class="col-1-4 hide-print">
        <h4>Support The Division</h4>
        
        <a href="https://www.givetoiowa.org/GiveToIowa/WebObjects/GiveToIowa.woa/wa/goTo?area=studentlife" class="appt-btn">Give Online Now</a>
      </div>
        </div>
        <hr>
        <p>&copy; 2014 <a href="http://www.uiowa.edu/" target="_blank">The University of Iowa</a>. All Rights Reserved.</p>
      </div>
    </div>
</footer>


    <script src="js/build/main.min.js"></script>
    <script type="text/javascript">
      function css3FilterFeatureDetect(enableWebkit) {
          //As I mentioned in my comments, the only render engine which truly supports
          //CSS3 filter is webkit. so here we fill webkit detection arg with its default
          if(enableWebkit === undefined) {
              enableWebkit = false;
          }
          //creating an element dynamically
          el = document.createElement('div');
          //adding filter-blur property to it
          el.style.cssText = (enableWebkit)?'-webkit-':'' + 'filter: blur(2px)';
          //checking whether the style is computed or ignored
          //And this is not because I don't understand the !! operator
          //This is because !! is so obscure for learning purposes! :D
          test1 = (el.style.length != 0);
          //checking for false positives of IE
          //I prefer Modernizr's smart method of browser detection
          test2 = (
              document.documentMode === undefined //non-IE browsers, including ancient IEs
              || document.documentMode > 9 //IE compatibility moe
          );
          //combining test results
          return test1 && test2;
      }

      if(document.body.style.webkitFilter !== undefined){
        $("html").addClass("blur-supported");
      }else{
        $("html").addClass("no-blur-supported");
      }

    </script>
  </body>
</html>