var nav=document.getElementById("p1");
window.onscroll=function()
{
var nav=document.getElementById("hiddenmenu");
window.onscroll=function()
{
	if(window.pageYOffset> 180)
	{
		nav.style.display="block";
		nav.style.position="fixed";
        nav.style.top=0;
		nav.style.width="100%";


	}
	else
	{
		nav.style.display="none";
	}
}
}