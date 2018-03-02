function popup(OFF,que){
	if (OFF==1) {
		$("#"+que).css({"display":"block","opacity":"1","position":" fixed","top":"0","left":"0","right":"0","bottom":"0","margin":"0","z-index":" 999","transition":"all 1s"});
	}
	else{
		$("#"+que).css({"display": "none"});
	}
}