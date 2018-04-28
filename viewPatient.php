<!DOCTYPE html>
<html lang="en">
<head>
  <title>Patients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="capstone.css" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

 <body> <!--- Navigation bar -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" href="#" src="img/w3newbie.png"></a>
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="landingPage.html">Home</a> </li>
					<li> <a href="loginsignupForm.html">Log out</a> </li>
				</ul>
			</div>
		</div>
	</nav>
	
	<h5 style="float: right; padding-right: 8px;">Welcome Dr. George Washington</h5>
	<header>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar"  style="margin: 0 !important; padding: 0 !important; background-color: #F0F8FF">
					<ul class="nav navbar-nav">
						<li><a href="dashboard.html">Dashboard</a></li>
						<li><a href="createReminder.html">Create Reminders</a></li>
						<li><a href="#">View Patients</a></li>
						<li><a href="report.html">Reports</a></li>
					</ul>	
				</div>
			</nav>
		</div>
	</header>
	
	<div class="container">
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6">
				<div class="container-fluid" id= "#msg">
					<table class="table table-striped" style="padding-top: 5px;">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Mobile Number</th>
								<th>Status</th>
								<th>Reminders</th>
							</tr>
						</thead>
						<tbody>
							<script type="text/javascript">
 
									$(document).ready(function(){
									var url="patient_table_api.php";
									$.getJSON(url,function(json){
									// loop through the members here
									$.each(json,function(i,dat){
									$("#msg").append(
										  '<table class="patientTable">'+
											'<tr class="tableHeading">'+
											  '<th>ID</th>'+
											  '<th>First Name</th>'+
											  '<th>Last Name</th>'+
											  '<th>Phone Number</th>'+
											  '<th colspan=2>View</th>'+
											'</tr>'+
											'<tr>'+
											  '<td data-th="ID">'+dat.id+'</td>'+
											  '<td data-th="First Name">'+dat.first_name+'</td>'+
											  '<td data-th="Last Name">'+dat.last_name+'</td>'+
											  '<td data-th="Phone Number">'+dat.phone_number+'</td>'+
											  '<td data-th="Status">'+dat.status+'</td>'+
											  '<td data-th="View">'+"<a href='viewpatient.php'>View</a>"+'</td>'+
											'</tr>'+

										  '</table>'
										jQuery(function($) 
									{
									$("form input[id='check_all']").click(function() 
									{   
										var inputs = $("form input[type='checkbox']");
										for(var i = 0; i < inputs.length; i++) 
										{ 
											var type = inputs[i].getAttribute("type");
											if(type == "checkbox") 
											{
												if(this.checked) 
												{
													inputs[i].checked = true;
												} 
												else 
												{
													inputs[i].checked = false;
												}
											} 
										}
									});

									/*
									ajax to select multiple checkboxes
									$("form input[id='submit']").click(function() 
									{  var inputs = $("form input[type='checkbox']");
										var vals=[];
										var res;
										for(var i = 0; i < inputs.length; i++) 
										{ 
											var type = inputs[i].getAttribute("type");
											if(type == "checkbox") 
											{
												if(inputs[i].id=="data"&&inputs[i].checked){
													vals.push(inputs[i].value);
												}
											} 
										}

										var count_checked = $("[name='data[]']:checked").length; 
										if(count_checked == 0) 
										{
											alert("Please select a product(s) to delete.");
											return false;
										} 
										if(count_checked == 1) 
										{
											res= confirm("Are you sure you want to delete these product?");   
										} 
										else 
										{
											res= confirm("Are you sure you want to delete these products?");  
										}       
										if(res){

										$.post("delete.php", {data:vals}, function(result){
											$("#table_data").html(result);
										 }); 
										}
									});
										****/
									  );
									});
									});
									});
								 
								</script>		
						</tbody>	
					</table>
				</div>
			</div>
			
		</div>
	</div>
	</div>
		
	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-4">
				<p>Copyright &copy; 2018 ForgetMedNot<br>
				Powered by JHM Web Development, Ltd</p>
			</div>
			<div class="col-lg-6">
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="contactus.html">Contact us</a> </li>
					<li> <a href="#">Terms & Conditions</a> </li>
					<li> <a href="contactus.html">Privacy Policy</a> </li>
				</ul>
			</div>
		</div>
	</footer>

</body>
</html>