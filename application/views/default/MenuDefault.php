<?php if(isset($mobile) && !empty($mobile) && $mobile == TRUE){?>
aezae
<?php }else{?>
<!-- |MENU| -->
<nav id="header" class="navbar navbar-fixed-top">
  <div id="header-container" class="container navbar-container">
    <div class="navbar-header">
     <a id="brand" class="navbar-brand navbar-brand-centered" href="#">Project name</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- |END_MENU| -->
<?php } ?>
