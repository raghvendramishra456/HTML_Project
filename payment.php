<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      
<style>
* {
  box-sizing: border-box;
}

input[type=text], 
select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: green;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color:#e2e6ea;
  padding: 20px;
  width:600px;
margin-left:400px;
margin-top:100px;

}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) 
{ .col-25, .col-75, input[type=submit]
  {
    width: 100%;
    margin-top: 0;
  }
  
}

body{
    
    background-image: url("payment images/payment_back.jpg");
}



</style>
<script>
    $(document).ready(function() {
      $("#form").validate({
          rules:{
              cardname:{required:true},
              cardnumber:{required:true},
              amount:{required:true},
              expdate:{required:true},
              cvv:{required:true}
          }
      });
  });
     


    
    
    </script>
    
    
</head>
<body>
   
    

<div class="container mt-5">
   
    <h1>Payment Method </h1>
  
  <form>
      <div class="fonts">
       <!--   <a href="https://www.visa.co.in/" class="fab fa-cc-visa" style="width:10px"></a>&emsp; -->          
            <img src="payment images/visa.jpeg" style='width:50px'>&emsp;
            <img src="payment images/master_card.jpg" style='width:50px'>&emsp;
            <img src="payment images/maestro.png" style='width:65px' >&emsp;
            <img src="payment images/rupay.jpg" style="width:60px">
            <br>
        
      </div>
  <div class="row">
    <div class="col-25">
        <label style="font-size:15px" ><b> Please Select Your Payment Method : </b></label>
     
    </div>
    <div class="col-75">
        <input type="radio" id="r1" name="radio1" onclick="credit()" >
         <label>Credit Card</label>
         <input type="radio" id="r1" name="radio1" onclick="debit()">
         <label>Debit Card</label>
         <input type="radio" id="r1" name="radio1" onclick="netbanking                  ()">
         <label>Online Banking</label>
       
    </div>
    
      
      <br>
      
      
      <div class="col-50" id="e">
            <input type="text" id="cname" name="cardname" placeholder="Enter Your Name on Card......" style="background-color:#FCF5D8" required>
            <label class="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="xxxx-xxxx-xxxx-xxxx" style="background-color:#FCF5D8" required>
            <br>
             
           
            <label class="ccnum">Enter Amount</label>
            <input type="text" id="ccnum" name="amount"  style="background-color:#FCF5D8" required ><br><br>
       
            
            <label class="expdate">Expiry Date</label>
            <input type="month" id="expdate" name="expdate" value="2015-05" style="background-color:#FCF5D8" required>
            &emsp;&emsp;
                <label class="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="xxx" maxlength="3" style="width:50px" required>
              </div>
      
      
      </form>
          </div>
    
      
        <br>
  <div class="row">
    <input type="submit" value="Pay">
 
        
  
  </div>
</div>
  
</body>
</html>
