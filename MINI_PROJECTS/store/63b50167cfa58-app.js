// Start jQuery Area

// End jQuery Area




// Start javascript Area
function dropbtn(){
	document.getElementById('mydropdown').classList.toggle('show');
}


function* genfun(){

	var idx = 8;

	while(true){
		yield idx++;

		if(idx > 13){
			idx=8;
		}
	}
}


var getgen = genfun();
// console.log(getgen.next().value);
// console.log(getgen.next().value);
// console.log(getgen.next().value);
// console.log(getgen.next().value);
// console.log(getgen.next().value);
// console.log(getgen.next().value);
// console.log(getgen.next().value);


var header = document.querySelector('header');
header.style.backgroundImage =`url('./assets/img/banner/banner${getgen.next().value}.jpg')`;
	

	function showimage(){
	header.style.backgroundImage =`url('./assets/img/banner/banner${getgen.next().value}.jpg')`;
	}

	setInterval(showimage,2500);
// End javascript Area