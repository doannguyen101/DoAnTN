document.write('<div class="not-for-print"><div id="poplinks" style="display: none;"></div></div>');
function DivDraw(e){
	x_out = 15; 
	y_out = -10;
	dg = document.getElementById('poplinks');
	dgs = dg.style;
	dgh = dg.clientHeight;
	dgw = dg.clientWidth;
	db = document.getElementsByTagName('html')[0];
	if(window.event){
		dbst = db.scrollTop;
		dbsl = db.scrollLeft;
		fdbst = 0;
		fdbsl = 0;
		y = e.clientY;
		x = e.clientX;
	}
	else{
		dbst = 0;
		dbsl = 0;
		fdbst = db.scrollTop;
		fdbsl = db.scrollLeft;
		y = e.pageY;
		x = e.pageX;
	}
	y = y + dbst;
	x = x + dbsl;
	dgs.top = y + y_out + 'px';
	dgs.left = x + x_out + 'px';
	if(y + y_out - fdbst - dbst > db.clientHeight - dgh - 7){
		dgs.top = y - dgh - y_out + 'px';
	}
	if(x + x_out - fdbsl - dbsl > db.clientWidth - dgw - 7){
		dgs.left = x - dgw - x_out + 'px';
	}
}
function DivWrite(d){
	document.getElementById('poplinks').innerHTML = unescape(d);
	document.getElementById('poplinks').style.display = 'block';
}
function DivHide(){document.getElementById('poplinks').style.display = 'none';}
function settitle(){
	dl_ary = new Array(document.getElementsByTagName('*'));
	for(i_ary = 0; i_ary < dl_ary.length; i_ary++){
		dl = dl_ary[i_ary];
		for(i = 0; i < dl.length; i++){
			if(dl[i].title && dl[i].title.substring(0,1) == '#'){
				dl[i].title = dl[i].title.substring(1,dl[i].title.length);
				if(navigator.appName !=  'Netscape') {
					dl[i].onmouseover = new Function("DivWrite('"+escape(dl[i].title)+"')");
					dl[i].attachEvent('onmouseout', DivHide);
					dl[i].onmousemove = new Function("DivDraw(event)");
					dl[i].title = "";
					dli = dl[i].getElementsByTagName('img');
					for(ii = 0; ii < dli.length; ii++){dli[ii].alt = "";}
				} else {
					dl[i].setAttribute('onmouseover', "DivWrite('"+escape(dl[i].title)+"')");
					dl[i].addEventListener('mouseout', DivHide, true);
					dl[i].setAttribute('onmousemove', "DivDraw(event)");
					dl[i].removeAttribute('title');
				}
			}
		}
	}
}
settitle();
function setitlewidth(){
	ht_stw = document.getElementById('poplinks');
	if(ht_stw.style.display == 'block'){
		ht_stw.style.width = 'auto';
		ht_stw.style.width = (ht_stw.clientWidth >= 300) ? '300' : 'auto';
	}
}
if(navigator.appName != 'Netscape'){document.onmousemove = setitlewidth;}