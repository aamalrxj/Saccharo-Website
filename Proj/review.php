<style>
body {
 
      background: #E5E7E9;
}
.button1 {
    background: #ABB2B9; /* background color */
}

.button1:hover {
    background: #fff;
}

.button1 {
    color: #1d1d1d; /* text color */
    display: inline-block;
    border-radius: 0; /* square corners */
    padding: 0px 15px; /* space around text */
    text-transform: uppercase; /* all capital letters */
    font-weight: 700;
    letter-spacing: 1px;
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    margin: 8px;
}
</style>
<form action="reviewsave.php" method="post" accept-charset="utf-8">
    <fieldset><legend>Rate User</legend>
    <label for="email2">User Email: <span>*</span></label>
    <input id="email" type="text"  name="email2" />	<br><br>
    <label for="email">Donor Email: <span>*</span></label>
      <input id="email" type="text"  name="email" />	
    <p><label for="rating">Rating: </label><input type="radio" name="rating"
      value="5" /> 5 <input type="radio" name="rating" value="4" /> 4
      <input type="radio" name="rating" value="3" /> 3 <input type="radio"
      name="rating" value="2" /> 2 <input type="radio" name="rating" value="1" /> 1</p>
    <p><label for="review">Review: </label><textarea name="review" rows="8" cols="40">
       </textarea></p>
    <p><input type="submit" value="Submit Review"></p>
    <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
    <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
</fieldset>
</form>
<a style="text-decoration:none" href="homepage_ngo.php" class="button1"><h4>Go Back</h4></a>
