var scrollPos = window.scrollY;

window.addEventListener('scroll', function()
{
	var navBar = document.getElementById("navigation");
	var ul = document.getElementById("noMargin");

	var windowW = window.innerWidth;
	var scrollPos = window.scrollY;

	if(scrollPos >= 102 && windowW > 720)
	{
		navBar.classList.add("clone");
	}
	if(scrollPos < 102 && windowW > 720)
	{
		navBar.classList.remove("clone");
	}
	//console.log(scrollPos);
})


// login window: show/hide
var popUp = document.getElementById("loginAlign");

function reDirBB()
{
	popUp.style.display = "block";
}

window.onclick = function(event) 
{
	if(event.target == popUp) 
	{
		popUp.style.display = "none";
	}
}

function closePopup()
{
	popUp.style.display ="none";
}

function reDirIndex()
{
	window.location.href = "index.php";
}

window.addEventListener('click', function(e)
{
	var menu = document.getElementById("navigation");
	var burger = document.getElementById("hamburger");
	if(e.target != menu && menu.offsetHeight != 0)
	{
		menu.classList.add("closed");
	}
	if(e.target == burger)
	{
		menu.classList.remove("closed");
	}
})
 
// var dontReload = document.getElementById("dontReload");
// dontReload.addEventListener('submit', function(event)
// {
// 	return false;
// });

	// console.log('script')
	// var burger = document.querySelector('.burger');
	// document.addEventListener("click", function(e)
	// {
	//   if (e.target == burger) 
	//   {
	//     //clicked burger
	//     document.querySelector('nav').classList.remove('close')
	//     document.querySelector('.burger').classList.add('close')
	//   } 
	//   else 
	//   {
	//     document.querySelector('nav').classList.add('close')
	//     document.querySelector('.burger').classList.remove('close')
	//   }
	// })


// function dropDown()
// {
// 	var menu = document.getElementById("navigation");
// 	menu.classList.add("open");
// }


// document.addEventListener('click', function(event)
// {
// 	var menu = document.getElementById("navigation");
// 	var isClickInside = menu.contains(event.target);

//   if (menu.offsetParent === null && !isClickInside) 
//   {
//   	menu.classList.remove("open");
//   }
// });

// addEventListener('click', function(e)
// {
// 	var menu = document.getElementById("navigation");
// 	if(e.target != menu)
// 	{
// 		menu.classList.remove("open");
// 	}
// })




// var scrollPos = window.scrollY;
// window.addEventListener('scroll', function()
// {
// 	var navBar = document.getElementById("navigation");
// 	var ul = document.getElementById("noMargin");

// 	var scrollPos = window.scrollY;
// 	if(scrollPos > 82)
// 	{
// 		navBar.classList.add("clone");
// 		ul.classList.add("margin");
// 	}
// 	else
// 	{
// 		navBar.classList.remove("clone");
// 		ul.classList.remove("margin");
// 		ul.classList.add(".noMargin");
// 	}
// 	console.log(scrollPos);
// })




