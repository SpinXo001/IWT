// JavaScript Document
function validationflightno()
	{
		var flightno= document.getElementById("flightNO").value;
		var no= flightno.length;
		if( isNaN(flightno) || no < 0 )	
		{
			alert("Enter Flight NO :");
			return false;
			
		}
		return true;	
	}
	
	function validationDate()
	{
	var date=document.getElementById("date").value;
		if(date=="" || date==null)
		{
			alert("Please Select a date");
			return false;
		}
	return true;
	
	
	}
	
	function validationTime()
	{
		var time=document.getElementById("time").value;
		if(time=="" || time==null)
		{
			alert("Please Select a Time");
			return false;
		}
		return true;
	
	
	}

	function validationRadioButton()
	{
		if(document.getElementById("radio_roundtrip").checked 
		|| document.getElementById("radio_oneway").checked)
		{
			return true;
		}
		else
		{
			return false;
			alert("Please select Ticket Type");
		}
		
		
	}
	
	function validationAdults()
	{
		var adultcount= document.getElementById("Adults").value;
		var no= adultcount.length;
		if( isNaN(adultcount) || no < 0 )	
		{
			alert("enter passenger count");
			return false;
			
		}
		return true;
		
	}
	
	function validationChildren()
	{
		var childrencount= document.getElementById("children").value;
		var no= childrencount.length;
		if( isNaN(childrencount) || no < 0 )	
		{
			alert("enter passenger count");
			return false;
			
		}
		return true;
		
	}



/*function validationBooking()
{
	if(validationflightno() && validationDate() && validationTime() && validationRadioButton() && validationAdults() && validationChildren() )
	{
		alert("Successfully Booked");
		
		
	}
	
	alert(" please fill correctly ");	
	
	
} */