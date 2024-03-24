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
<form action="messageconnect.php" method="post" accept-charset="utf-8">
    <fieldset><legend>Message</legend>
    <label for="email2">Receiver Email: <span>*</span></label>
    <input id="email" type="text"  name="email2" />	<br><br>
    <label for="email">Sender Email: <span>*</span></label>
      <input id="email" type="text"  name="email" />	
    <p><label for="message">Message </label><textarea name="message" rows="8" cols="40">
       </textarea></p>
    <p><input type="submit" value="Send Message"></p>
    <input type="hidden" name="product_type" value="actual_product_type" id="product_type">
    <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
</fieldset>
</form>
<a style="text-decoration:none" href="homepage_donor.php" class="button1"><h4>Go Back</h4></a>
