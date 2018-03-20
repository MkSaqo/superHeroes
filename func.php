<script type="text/javascript">
	
	function dragElement(hero,divRight,divLeft,posTop,posLeft,bigWidth,hero1top,hero2bottom) {
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

			divWidth = bigWidth[0].clientWidth/3.3;
			divHeight = bigWidth[0].clientHeight;

			div1Left= divLeft.offsetLeft - pos1;
			div1Right= divLeft.offsetLeft - pos1+divWidth;
			div1Top=  divLeft.offsetTop - pos2;
			div1Bottom=  divLeft.offsetTop - pos2+divHeight;

			div2Left= divRight.offsetLeft - pos1;
			div2Right= divRight.offsetLeft - pos1+divWidth;
			div2Top=  divRight.offsetTop - pos2;
			div2Bottom=  divRight.offsetTop - pos2+divHeight;

			poqrLeft = hero.offsetLeft - pos1;
			poqrRight = hero.offsetLeft - pos1 +poqrWidth;
			poqrTop = hero.offsetTop - pos2 ;
			poqrBottom = hero.offsetTop - pos2+poqrHeight;
		}

		function closeDragElement() {
			document.onmouseup = null;
			document.onmousemove = null;
			var heroName =  hero.style.background.split("icon")[1].split(".")[0];
			var heroId =  hero.id.split("v")[1];
			var imageSrc = "url(images/page1"+heroName+".png)";
			var a = window.location.href.split("?id=");
			var b = window.location.href.split("&id1=");
	
			if(poqrBottom>div1Top && poqrTop<div1Bottom && poqrRight>div1Left && poqrLeft<div1Right ){
				if(b[1]){

					window.location.href = a[0]+"?id="+heroId+"&id1="+b[1];
				}
				else{

					window.location.href = a[0]+"?id="+heroId;
				}
			}
			else if(poqrBottom>div2Top && poqrTop<div2Bottom && poqrRight>div2Left && poqrLeft<div2Right){
				
				if(a[1]){

					window.location.href = b[0]+"&id1="+heroId;
				}
				else{
					window.location.href = a[0]+"?id=null&id1="+heroId;

				}
			}


			hero.style.left = posLeft+"%";
			hero.style.top = posTop+"%";
		}

	}
</script>
