// JavaScript Document

function cardnumber(creditCardNo)
{
  var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
  if(creditCardNo.value.match(cardno))
        {
      return true;
        }
      else
        {
        alert("Not a valid Visa credit card number!");
        return false;
        }
}

function validate_cvv(CVV_Number)
{

         var myRe = /^[0-9]{3,4}$/;
         var myArray = myRe.exec(CVV_Number);
         if(CVV_Number!=myArray)
          {
            alert("Invalid cvv number"); //invalid cvv number
            return false;
         }else
		 {
             return true;  //valid cvv number
         }

}


function validationBooking()
{
	if(cardnumber(creditCardNo) && validate_cvv(CVV_Number))
	{
		alert("Succecfully Booked");
		
		
	}
	alert(" please fill correctly ");	
	
	
} 



	
	
	