<?php
	echo $this->ta;
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

	$this->extend('layout.html.php');

?>

<h3><?= $this->input("headline", ["width" => 540]); ?></h3>


<html>   
  <head>   
    <title>Pagination</title>   
    <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style> 
    
    *{
  	box-sizing: border-box;
	}
  
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }
        
        #myInput {
		  background-image: url('/static/icon/search.png');   /* Add a search icon to input */
		  background-position: 10px 12px;   /* Position the search icon */
		  background-repeat: no-repeat;     /* Do not repeat the icon image */
		  width: 200px;   /* width */
		  font-size: 16px;   /* Increase font-size */
		  padding: 12px 20px 12px 20px;   /* Add some padding */
		  border: 1px solid #ddd;   /* Add a grey border */
		  margin-bottom: 12px;   /* Add some space below the input */
		  float: right;
		  margin-right: 12px;
	}
   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
        </style>   
  </head>   
  
  <body> 
  
    <input type="text" id="myInput" onkeyup="searchProductByName()" placeholder="Search for names..">
	<!-- <button id="myBtn" onclick="myFunction()">Search</button> -->

	
	
  <center>  
    <?php  
         
    
        $per_page_record = 2;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
            
          if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {
          $page=1;    
           } 
    	echo $page;
    	echo "<br>";
        $start_from = ($page-1) * $per_page_record; 
        echo $start_from;
        //$start_from = 0;    
        
        $products = new \Pimcore\Model\DataObject\Products\Listing();
        
        //while($total_pages != $page)
        //{
        if($start_from>1){
        
        $products->setLimit($start_from+1);
        
        } else{
        $products->setLimit(1);
        //$query = "SELECT * FROM student LIMIT $start_from, $per_page_record";
        }
        //}
        
    ?>    
  
    <div class="container">   
      <br>   
      <div>   
        <h1>Product Listing Page</h1>   
        <p>This page demonstrates the basic    
           Pagination using PHP and MySQL.   
        </p>   
        <table id="myTable" class="table table-striped table-condensed    
                                          table-bordered">   
          <thead>   
            <tr>   
              <th width="10%">SKU</th>   
              <th onclick="sortTable(1)">ModelName</th>   
              <th onclick="sortTable(2)">Brand</th>  
              <th>Category</th>
              <th>Price</th>
              <th>Discount</th>
              <th>Rating</th>
              <th>Color</th>
              <th>Wifi</th>
              <th>Bluetooth</th> 
              <th>Image</th>
            </tr>   
          </thead>   
          <tbody>   
    <?php     
            	
    		foreach($products as $val=>$product)
    		{
	
		  echo "<tr>";
		  echo "<td>" . $product->getSku() . "</td>";
		  echo "<td>" . $product->getModelname() . "</td>";
		  echo "<td>" . $product->getBrand()->getName() . "</td>";
		  echo "<td>" . $product->getCategory()->getName() . "</td>";
		  echo "<td>" . $product->getPrice() . "</td>";
		  echo "<td>" . $product->getDiscount() . "</td>";
		  echo "<td>" . $product->getRating() . "</td>";
		  echo "<td>" . $product->getColor() . "</td>";
		  echo "<td>" . $product->getWifi() . "</td>";
		  echo "<td>" . $product->getBluetooth() . "</td>";
		  
		    $picture = $product->getImage();
		    if($picture instanceof \Pimcore\Model\Asset\Image):
			/** @var \Pimcore\Model\Asset\Image $Image */
		  echo "<td>" . $picture->getThumbnail()->getHtml(["width" => 50,"height" => 50]) . "</td>";
		  endif;
		  
		  echo "</tr>";
		  }
    
              ?>   
                 
          </tbody>   
        </table>   
  
     <div class="pagination">    
      <?php
         $products = new \Pimcore\Model\DataObject\Products\Listing(); 
          foreach($products as $val=>$product)
    		{
        $total_record = $val; 
            echo $val;
          }
          $total_records = $total_record+1;
    	echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='http://exam.local/Productspage?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {
        	   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='http://exam.local/Productspage?page=".$i."'>".$i." </a>";   
          }         
          else  {   
              $pagLink .= "<a href='http://exam.local/Productspage?page=".$i."'>".$i." </a>";     
          }   
        };     
        echo $pagLink;
           
        if($page<$total_pages){   
            echo "<a href='http://exam.local/Productspage?page=".($page+1)."'>  Next </a>";   
        }
           
  
      ?>    
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  
</center>   
  <script>   
  
  function searchProductByName() {
	  // Declare variables
	  var input, searchKey, table, rows, tableData, tableData1, i, txtValue;
	  input = document.getElementById("myInput");
	  searchKey = input.value.trim().toUpperCase();
	  table = document.getElementById("myTable");
	  rows = table.getElementsByTagName("tr");
	  
	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < rows.length; i++) {
	    tableData = rows[i].getElementsByTagName("td")[1];
	    if (tableData) {
	      txtValue = tableData.textContent || tableData.innerText;
	      if (txtValue.toUpperCase().indexOf(searchKey) > -1) {
		rows[i].style.display = "";
	      } else {
		rows[i].style.display = "none";
	      }
	    
	    }
	  }
	}
	

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("td")[n];
      y = rows[i + 1].getElementsByTagName("td")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
	
   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'http://exam.local/Productspage?page='+page;   
    }   
  </script>
  
  </body>   
</html>  

<a href="http://exam.local/ShowFeedback"><input type="button" name="show" value="Reviews" title="View" id="show"></a>

