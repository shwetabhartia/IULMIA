<?php
session_start();
include("../includes/templates/header.php");
//echo $_SESSION["movieid"];
?>


<form action="form_request.php" method="post" style="position:relative; display:inline-block; padding:20px; width: 50%; margin:20px; border:2px solid #ccc;">
  <h2 style="text-align:center;">Loan Request Form</h2>
  <div class = "form-container">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First Name" required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last Name" required>

    <label for="street">Street Address</label>
    <input type="text" id="street" name="street" placeholder="Enter Street Address" required>
<!-- street city state zipcode region country  -->
    <label for="city">City</label>
    <input type="text" id="city" name="city" placeholder="Enter City" required>

    <label for="state">State Code</label>
    <input type="text" id="state" name="state" placeholder="Enter two-letter State Code" required>

    <label for="zipcode">Zipcode</label>
    <input type="text" id="zipcode" name="zipcode" placeholder="Enter Zipcode" required>

    <label for="region">Region/County</label>
    <input type="text" id="region" name="region" placeholder="Enter County for USA/ Region for non-USA" required>

    <label for="country">Country</label>
    <input type="text" id="country" name="country" placeholder="Enter Country" required>

    <label for="areacode">Area Code</label>
    <input type="text" id="areacode" name="area_code" placeholder="3-digit Area Code" required>

    <label for="phoneno">Phone Number</label>
    <input type="text" id="phoneno" name="phone_no" placeholder="7-digit Phone Number" required>

    <label for="organisation">Organisation</label>
    <select id="organisation" name="organisation">
      <option value="IU">IU</option>
      <option value="IULMIA">IULMIA</option>
      <option value="MoMa">MoMA</option>
      <option value="Cinematheque Francaise">Cinematheque Francaise</option>
    </select>

    <label for="purpose">Purpose of Loan</label>
    <textarea id="purpose" name="purpose" placeholder="Enter a one-line purpose of loan. For eg. 'Screening for class studies on rise of Totaltarianism.'" style="height:100px"></textarea>

    <input type="submit" value="Submit">
  </div>
</form>

<?php include("../includes/templates/footer.php"); ?>