<?php 
$search= $_GET["que"];
		if(!empty($search))
		{

						$found=false;
						$conn = new mysqli("127.0.0.1", "root", "", "project");
						$sql = "SELECT * FROM questions WHERE question LIKE '%".$search."%'  LIMIT 5";
						$result = $conn->query($sql);
						while ($row = $result->fetch_assoc()){
						$found=true;
						echo '<p id="ans" 
						style="background:#CFC6C6;text-align:center;margin-left:-15px;margin-bottom:-10px">'
						.$row["question"].
						'</p>';
						}

						if(!$found)
						{
							echo "No matching found";
						}

    }else{
    	echo '<span style="color:indigo">Type a question to search <span>';
    }
                   
 ?>
