<footer class="row bg-dark" style="height: auto;color:white; text-align: center;">

        <div class="col-md-4"><h3>Pages</h3><hr>
            <div>HOME</div>
            <div>cocks</div>
            <div>hens</div>
            <div>all catheories</div>
    </div>
        <div class="col-md-4"><h3>Our Services</h3><hr>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
    
    </div>
        <div class="col-md-4"><h3>Quick Link</h3><hr>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
            <div>Items 1</div>
    
    </div>
        <div class="container-fluid" style="padding: 20px; text-align: center; color: white; background: black; font-weight: bold; size: 16px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                This system was designed by Group 8 &copy;right 2019 All rights reserved
                    </div>
                </div>
</footer>


        <script>
(function(){
 
  $("#cart").on("click", function() {
    $(".shopping-cart-items").fadeToggle( "fast");
  });
  
})();
        </script>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
 var slideIndex = 0;   
    
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 4000); // Change image every 4 seconds
}
</script>