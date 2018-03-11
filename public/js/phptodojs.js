function ReloadLijstIndex(baseurl)
{
	document.getElementById("toonlijsten").action = baseurl + 'lijst/index/' + document.getElementById("geselecteerdelijst").value;
	document.getElementById("toonlijsten").submit()
}