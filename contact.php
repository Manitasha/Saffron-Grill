<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>

<div class="container">


<div class="about">

<div id="map" style="width: 400px; height: 400px;"></div>



</div> <!--end about-->

<div class ="aboutContent">
<div class="matter">
<h2>Get In Touch</h2>

<form action="formhandler.php" method="post">

<label>Name</label>
<input type="text" name="name" placeholder="Name" required >

<label> Email </label>
<input type="email" name="email"  placeholder="Email">


<label>Enquiry/Suggestions/Feedback</label>
<textarea name="comments" rows="10" placeholder="Comments"> </textarea>

<input id="submit" type="submit" value="SUBMIT">

</form>


</div> <!--end matter-->

</div> <!--end aboutcontent-->






<?php include("includes/footer.php"); ?>






</div> <!--end wrapper-->
</body>
</html>
