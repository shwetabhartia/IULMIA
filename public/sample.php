<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/data/db_config.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
$username = ""; ?>

<?php include("../includes/templates/header.php"); ?>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="50%">
  <tbody>
      <tr>
        <td bgcolor="#990000">
          <table width= 100% class="deviceWidth" align="center" border="0" cellpadding="0" cellspacing="0">
            <tbody>
              <tr bgcolor="#333333">
                <td style="text-align: center;">
                  <h1>ADMIN SIGN IN</h1>
                </td>
              </tr>
            </tbody>
          </table>
          <table>
            <tbody>
              <form></form>
            </tbody>
          </table>
        </tr>
        <tr>
          <td>
            <form action="admin.php" method="post">
              <td>
                <input type="text" name="username" placeholder="Username" value=""/><?php echo htmlentities($username); ?>
              </td>
              <td>
                <input type="password" name="password" placeholder="Password" value="" />
              </td>
              <td>
                <button type="submit" name="submit" id="submit-icon"><img src="../public/images/SubmitN.png"/></button>
              </td>
            </form>
        </td>
      </tr>
  </tbody>
</table>


<?php include("../includes/templates/footer.php"); ?>