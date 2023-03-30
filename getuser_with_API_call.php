<?php
		 
	//require_once 'dbconfig.php';
if (isset($_REQUEST['id']))
 {

   
       // $output = "42"; // Again, do some operation, get the output.
        //echo htmlspecialchars($output); /* You have to escape because the result
                                           //will not be valid HTML otherwise. */
            $id = intval($_REQUEST['id']); 
          //  echo htmlspecialchars($id);



   


    // $id = intval($_REQUEST['id']);
    echo "<script>console.log($id);</script>";
   

}
?>
	<html>
        <body>

        
        <script >
            
             function view(id)
             {
              console.log(id);  

             //var id = "<?php #echo $id; ?>";
            // var id = "<?php #echo $id; ?>" ;
            // let id1=id;
               // alert(id);

			//const url ="https://iqbetspro.com/pg-management/single-Tenant-Reg-GET-Details-API.php";

      fetch('https://iqbetspro.com/pg-management/single-Tenant-Reg-GET-Details-API.php', {
                  method: 'POST',
                  body: JSON.stringify({
            "id":id
           })
          })
          .then(function(response)
          { 
          return response.json()
        })
          .then(function(data)
          {
            console.log('Tenant row Data= ',data);
            let response1 = response.json();
            console.log('data',response1);
            show(response1);
  }).catch(error => alert('Error:', error)); 
        
            
    } 
    
    function show(data)
     {
            let tab =
                `<tr>
                <th>Id</th>
                <th>Name</th>
                <th>Adhaar Number</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Joining Date</th>
                <th>Comments</th>
                <th>Action</th>
                </tr>`;
            
            
            // Loop to access all rows
            let i = 1;
            
            // Loop to access all rows
            for (let r of data)
             {
                tab += `<tr>
            <td>${i} </td>
            <td>${r.tenant_name}</td>
            <td>${r.tenant_aadhar_number}</td>
            <td>${r.tenant_mobile}</td>
            <td>${r.tenant_email}</td>
            <td>${r.joining_date}</td>
            <td>${r.comments}</td>`
            
            tab += 
            `</tr>`;
            i=i+1;
           }
        }
      view('<?php echo $id; ?>');
     </script>



		
		    
		
            
			
            </body> </html>
			
			
	