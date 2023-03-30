
  
//Enquiry.php script....

/* var form=document.getElementById('enquiry');

form.addEventListener('submit', function(e){
 e.preventDefault()
     var enquiryUsername = document.getElementById("enquiryUsername").value; 
     var enquiryMobileNumber = document.getElementById("enquiryMobileNumber").value; 
     var enquiryEmail = document.getElementById("enquiryEmail").value; 
     //var enquiryJoinDate = document.getElementById("enquiryJoinDate").value; 
     var enquiryRemarks = document.getElementById("enquiryRemarks").value;
     var enquiryReference = document.getElementById("enquiryReference").value;
    // var enquiryAction = document.getElementById("enquiryAction").value;
 fetch('https://iqbetspro.com/pg-management/Enquiry-Tenant-POST-API.php', {
  method: 'POST',
  body: JSON.stringify({
    "Name":enquiryUsername, 
    "Mobile_Number":enquiryMobileNumber, 
    "Email":enquiryEmail,
      "Remarks":enquiryRemarks,
      "Reference":enquiryReference,
      //"Action":enquiryAction 
  }),
  headers: {
    'Content-type': 'application/json; charset=UTF-8',
  }
  })
  .then(function(response){ 
  return response.json()})
  .then(function(data)
  {console.log(typeof(data[0].Message));
    console.log(data[0].Message.response)
     //alert("ok")
    if(data[0].Message.response =='error')
    window.location = "enquiry.php"
    else
    window.location = "enquiry_table.php"

}).catch(error => console.error('Error:', error)); 
}); */