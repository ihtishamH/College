<?php session_start();
include "header.php";
?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
		<div style="width: 50%; margin: 0 auto;">

<?php include  "connect.php"; ?>

	<form  action="order.php" method="post">

		<table align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
          <tr>
			<th> <h3 align="center" style="font-size: 1.3em;">Fill Up Details To Deliver Your Item</h3> </th>
		<br>
            </tr>
			    <tr align="center">

			    	<td style="color: red">  Enter your name  <br>
			        <input type="text" name="nm" placeholder="Enter your name" style="width: 100%; padding: 10px; color: orange; background-color: black" required="" pattern="[a-z,A-Z,]*"></td>

			    </tr>

			    <tr align="center">
			    	<td style="color: red">Enter Mobile no <br>
			        <input type="no" name="mo"   placeholder="Enter Mobile no" required:"" style="width: 100%; padding: 10px; color: orange; background-color: black" title="Enter only 10 Number" pattern="[1-9]{1}[0-9]{9}" ></td>
			    </tr>
				<!--title="Enter 10 Number" / required="" / pattern="\d{10}"/ title="Not Valid" / pattern="[1-9]{1}[0-9]{9}"  title="Enter only 10 Number" -->
			    <tr align="center">
			    	<td style="color: red">   Enter Email address <br>
			        <input type="Email" name="em"  placeholder="Enter email address" required style="width: 100%; padding: 10px; color: orange; background-color: black"></td>
			    </tr>

                <tr align="center">
                	<td style="color: red"> Enter address <br>
                 <input type="text" name="ad"  placeholder="enter your address" required="" style="width: 100%; padding: 50px; color: orange; background-color: black">
                </tr>

                <tr align="center">
                	<td colspan="4" > <input type="submit" name="s" value="Confirm Order"  style="height: 50px; background-color:lightgreen; color: black; padding: 10px; width: 30%;"> </td>
<!--onclick="validate()"  -->
                </tr>

                		    </table>
			</form>
		           <br> <br>



	</div>
</div>


<?php include "footer.php"; ?>
<!--<script>
	var input = document.getElementById("mo");
	input.oninvalid=function(event){
		event.target.setCustomValidity("");
	}
</script>-->
