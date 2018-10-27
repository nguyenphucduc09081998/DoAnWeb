<?php include('header.php'); 
	$db = mysqli_connect("localhost","root","","dataweb");//ket noi data
					//mysqli_select_db("datawed");
					mysqli_set_charset($db, "utf8");
    $search = $_POST['txtsearch']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($search) >= $min_length){ // if query length is more or equal minimum length then
         
        //$search = htmlspecialchars($search); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
       // $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($db,"SELECT * FROM congviec,congty
            WHERE (`TenCongViec` LIKE '%".$search."%') and congty.MaCongTy = congviec.MaCongTy   ") ;
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
            ?>
                <br><br><br>
				<div class="">
					<table class="">
						<tr>
							<td class="">
								<a href="/congviec.php?idCongViec=<?php echo $results['MaCongViec'];?>" class=""><h3><?php echo $results["TenCongViec"]; ?></h3></a>
								<a href="/congty.php?idCongTy=<?php echo $results['MaCongTy'];?>" class=""><h3><?php echo $results["TenCongTy"]; ?></h3></a>
							</td>
						</tr>
					</table>
				</div>
				<br><br><br>
            <?php
			}
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }




 include('footer.php');  ?>