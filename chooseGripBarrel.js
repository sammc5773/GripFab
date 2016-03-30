function setSelectedBarrelCookie(item, barrelID)
{
	document.cookie = (String(item)+ "=" + barrelID+";");
	alert(document.cookie);
}
