// <!DOCTYPE html>
// <html>
// <style>
// #mydiv ,#mydiv1 ,#mydiv2 ,#mydiv3{
//     position: absolute;
//     cursor: move;    
// }
// #mydiv{
// 	top: 0; left: 0;
// }
// #mydiv1{
// 	top: 100px; left: 0;
// }
// #mydiv2{
// 	top: 200px; left: 0;
// }
// #mydiv3{
// 	top: 300px; left: 0;
// }
// #divLeft {
//     position: absolute;
//     border:1px solid;   
// }
// #divRight {
//     position: absolute;
//     border:1px solid;
    
// }

// </style>
// <body>
// 	<div id="mydiv" style= "height:100px;width:100px;background: #2196F3;" ></div>
// 	<div id="mydiv1" style="height:100px;width:100px;background: red;" ></div>
// 	<div id="mydiv2" style="height:100px;width:100px;background: black;" ></div>
// 	<div id="mydiv3" style="height:100px;width:100px;background: gold;" ></div>

// 	<div id="divLeft"  style="width:301px;height:701px;background:transparent; left: 300px"></div>
// 	<div id="divRight" style="width:301px;height:701px;background:transparent; left: 600px"></div>

		
	// <script>
	// var m = document.getElementById("mydiv");
	// var m1 = document.getElementById("mydiv1");
	// var m2 = document.getElementById("mydiv2");
	// var m3 = document.getElementById("mydiv3");
	// var divLeft = document.getElementById("divLeft");
	// var divRight = document.getElementById("divRight");

	// dragElement(m,divRight,divLeft,0,0);
	// dragElement(m1,divRight,divLeft,100,0);
	// dragElement(m2,divRight,divLeft,200,0);
	// dragElement(m3,divRight,divLeft,300,0);

	function dragElement(hero,divRight,divLeft,posTop,posLeft,zaza) {
		var div1Left,div1Right,div1Top,div1Bottom,div2Left,div2Right
		,div2Top,divBottom,poqrLeft,poqrRight,poqrTop,poqrBottom;

		var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
		hero.onmousedown = dragMouseDown;
		function dragMouseDown(e) {
			e = window.event;
			pos3 = e.clientX;
			pos4 = e.clientY;
			document.onmouseup = closeDragElement;
			document.onmousemove = elementDrag;
		}

		function elementDrag(e) {
			e =window.event;
			pos1 = pos3 - e.clientX;
			pos2 = pos4 - e.clientY;
			pos3 = e.clientX;
			pos4 = e.clientY;
			hero.style.top = (hero.offsetTop - pos2) + "px";
			hero.style.left = (hero.offsetLeft - pos1) + "px";

			poqrWidth = parseInt(hero.style.width.split("px")[0]);
			poqrHeight = parseInt(hero.style.height.split("px")[0]);

			div1Width = zaza[0].clientWidth/3;
			div1Height = parseInt(divLeft.style.height.split("%")[0]);

			div2Width =zaza[0].clientWidth/3;
			div2Height = parseInt(divRight.style.height.split("px")[0]);

			div1Left= divLeft.offsetLeft - pos1;
			div1Right= divLeft.offsetLeft - pos1+div1Width;
			div1Top=  divLeft.offsetTop - pos2;
			div1Bottom=  divLeft.offsetTop - pos2+div1Height;

			div2Left= divRight.offsetLeft - pos1;
			div2Right= divRight.offsetLeft - pos1+div2Width;
			div2Top=  divRight.offsetTop - pos2;
			div2Bottom=  divRight.offsetTop - pos2+div2Height;

			poqrLeft = hero.offsetLeft - pos1;
			poqrRight = hero.offsetLeft - pos1 +poqrWidth;
			poqrTop = hero.offsetTop - pos2 ;
			poqrBottom = hero.offsetTop - pos2+poqrHeight;


		}

		function closeDragElement() {
			document.onmouseup = null;
			document.onmousemove = null;
			if(poqrBottom>div1Top && poqrTop<div1Bottom && poqrRight>div1Left && poqrLeft<div1Right ){
				divLeft.style.background=hero.style.background;
			}
			else if(poqrBottom>div2Top && poqrTop<div2Bottom && poqrRight>div2Left && poqrLeft<div2Right){
				divRight.style.background=hero.style.background;

			}
			hero.style.left = posLeft+"%";
			hero.style.top = posTop+"%";
		}

	}
// 	</script>

// </body>
// </html>