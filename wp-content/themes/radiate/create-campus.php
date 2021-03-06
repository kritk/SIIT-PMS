<?php
/**
 * Template Name: create-campus
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */



if(get_the_title() == 'create-campus'  )
{
get_header('admin');
}
else
{
get_header();
}
?>
<div class="sidenav" id="sidebarslide">
	<h3 style="text-align: center; color: white; padding: 5px;">Campus</h3>
  <a class="slidesidebar active" >Properties</a>
  <a class="slidesidebar" href="#">Contract and Reservation Form</a>
  <a class="slidesidebar" href="#">User</a>
  <a class="slidesidebar" href="#">Expends</a>
</div>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("sidebarslide");
var a = header.getElementsByClassName("slidesidebar");
for (var i = 0; i < a.length; i++) {
  a[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<div class="container int" style="font-weight: bold; height: 599px;">
	<h2 style="padding: 10px;">Create Campus</h2>
	<div style="border: 1px solid gray"></div>
		<form class="form-horizontal" action="" style="margin-top: 20px; ">
		<div class="form-group">
	      <label class="control-label col-sm-2">ชื่อเต็ม :</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control"  style="width: 60%;">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2 ">ตัวย่อ :</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control"  style="width: 60%;">
	      </div>
	    </div>
	     <div class="form-group">
	      <label class="control-label col-sm-2 ">คำอธิบายย่อ :</label>
	      <div class="col-sm-10">
	       <textarea style="width: 60%; height:80px;" ></textarea>
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2 "> Upload picture :</label>
	      <div class="col-sm-10">
	        <img src="<?php bloginfo('template_url'); ?>/images/header/camera.png" style="height: 200px; width: 200px; border: 2px solid gray;">
	      </div>
	    </div>
	    <button type="submit" class="btn submit-button" style="margin-left: 30%">Add</button>
  		<a href="http://localhost/property/campus-menu/" class="btn submit-button" style="margin-left: 5%">Cancel</a>
	  </form>
</div>
  