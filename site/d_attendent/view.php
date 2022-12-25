<link rel="shortcut icon" href="img/icons/favicon.png" />
<title>Animals of Selected User</title>
<?php
	include 'Database.php';

	$user_id=$_GET['uid'];
	$query="SELECT * from animal where user_id=$user_id";
	$data= mysqli_query($connect,$query);
?>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</head>
<body>
<table id="table_id">
	<thead>
	<tr>
		<th>Animal Id</th>
		<th>Animal Type</th>
	</tr>
	</thead>
	<tbody>
	<?php
	while ($result=mysqli_fetch_assoc($data)) {
		echo "
		<tr>
			<td>".$result['animal_id']."</td>
			<td>".$result['animal_type']."</td>
		</tr>
		";
	}
	?>
	</tbody>
</table>
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
});
</script>
</body>
</html>
<style>
	<style>
   body {
 counter-reset: my-sec-counter;
 font-family: 'Open Sans', sans-serif;
 font-size: 12px;
}

#DataTable {
 position:relative;
 padding: 15px;
 box-sizing: border-box;
}

table { 
 width: 100%; 
 border-collapse: collapse; 
}

th { 
 background: #0096FF; 
 color: white; 
 font-weight: bold; 
 cursor: cell;
}
table th:first-child{
  border-radius:10px 0 0 10px;
}

table th:last-child{
  border-radius:0 10px 10px 0;
}

table td:first-child{
  border-radius:10px 0 0 10px;
}

table td:last-child{
  border-radius:0 10px 10px 0;
}
td, th { 
	
font-size: 13.9px;
 padding: 6px; 
 border: 1px solid #ccc; 
 text-align: left; 

}

tr:nth-of-type(even) { 
 background-color: White;
}

   @media
	 only screen 
   and (max-width: 760px), (min-device-width: 768px) 
   and (max-device-width: 1024px)  {

	 table {
	   margin-top: 106px;
	 }
	   /* Force table to not be like tables anymore */
	   table, thead, tbody, th, td, tr {
		   display: block;
	   }

	   /* Hide table headers (but not display: none;, for accessibility) */
	   thead tr {
		   position: absolute;
		   top: -9999px;
		   left: -9999px;
	   }

   tr {
	 margin: 0 0 1rem 0;
	 overflow: auto;
	 border-bottom: 1px solid #ccc;
   }
	 
	 
	 
	 tbody tr:before {
	   counter-increment: my-sec-counter;
	   content: "";
	   background-color:#333;
	   display: block;
	   height: 1px;
	 }

	 
   tr:nth-child(odd) {
	 background: #ccc;
   }
   
	   td {
		   /* Behave  like a "row" */
		   border: none;
		   border-bottom: 1px solid #eee;
	 margin-right: 0%;
	 display: block;
	 border-right: 1px solid #ccc;
	 border-left: 1px solid #ccc;
	 box-sizing:border-box;
	   }

	   td:before {
		   /* Top/left values mimic padding */
	 font-weight: bold;
		   width: 50%;
	 float:left;
	 box-sizing:border-box;
	 padding-left: 5px;
	   }

	   /*
	   Label the data
   You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
	   */
	   td:nth-of-type(1):before { content: "Animal ID"; }
	   td:nth-of-type(2):before { content: "Animal Type"; }
   
   
   .box ul.pagination {
	 position: relative !important;
	 bottom: auto !important;
	 right: auto !important;
	 display: block !important;
	 width: 100%;
   } 
	 
   .box {
	 text-align: center;
	 position: fixed;
	 width: 100%;
	 background-color: #fff;
	 top: 0px;
	 left:0px;
	 padding: 15px;
	 box-sizing: border-box;
	 border-bottom: 1px solid #ccc;
   }
	 
   .box ul.pagination {
	 display: block;
	 margin: 0px;
   }
	 
	.box .dvrecords {
	 display: block;
	  margin-bottom: 10px;
   }
   .pagination>li {
	   display: inline-block;
   }
   }

.top-filters {
 font-size: 0px;
}

.search-field {
 text-align: right;
 margin-bottom: 5px;
}

.dd-number-of-recoeds {
 font-size: 12px;
}

.search-field,
.dd-number-of-recoeds {
 display: inline-block;
 width: 50%;
}

.box ul.pagination {
 position: absolute;
 bottom: -45px;
 right: 15px;
}

.box .dvrecords {
 padding: 5px 0;
}

.box .dvrecords .records{
 margin-right: 5px;
}
</style>
