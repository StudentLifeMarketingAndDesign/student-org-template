// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();


// Function that detects if the blur effect is available. If it isn't we are going to display:none the effect class.

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

// Perform the test
if(document.body.style.webkitFilter !== undefined){
	$("html").addClass("blur-supported");
}else{
	$("html").addClass("no-blur-supported");
}