function init(){
	$.post("geturl.php",{},function(data,status){
		//alert(data);
		var j=JSON.parse(data);
		document.getElementById('img1').src=j.image1;
		document.getElementById('img2').src=j.image2;
		document.getElementById('img3').src=j.image3;
		document.getElementById('img4').src=j.image4;
		document.getElementById('img5').src=j.image5;
		document.getElementById('url1').value=j.url1;
		document.getElementById('url2').value=j.url2;
		document.getElementById('url3').value=j.url3;
		document.getElementById('url4').value=j.url4;
		document.getElementById('url5').value=j.url5;
	});

}
function update(idx){
	var url="";
	if(idx==1){
		url=document.getElementById('url1').value;
	}else if(idx==2){
		url=document.getElementById('url2').value;
	}else if(idx==3){
		url=document.getElementById('url3').value;
	}else if(idx==4){
		url=document.getElementById('url4').value;
	}else if(idx==5){
		url=document.getElementById('url5').value;
	}
	$.post("updateurl.php",{
		no:idx,
		url:url
	},function(data,status){
		alert(data);
		location.replace('http://total0808.cafe24.com/dalgona/admin/ad.php');
	})
}
function imgclick(img){
	location.href=img.src;
}
window.onload=init();
