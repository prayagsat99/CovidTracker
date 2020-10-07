$(document).ready(function(){
	$.getJSON("https://api.covid19india.org/data.json",function(data){
		var states=[];
		var confirmed=[];
		var recovered=[];
		var deaths=[];

		var total_confirmed;
		var total_recovered;
		var total_deaths;
		var total_active;

		total_confirmed=data.statewise[0].confirmed;
		total_recovered=data.statewise[0].recovered;
		total_deaths=data.statewise[0].deaths;
		total_active=data.statewise[0].active;

		$.each(data.statewise,function(id,obj){
			states.push(obj.state);
			confirmed.push(obj.confirmed);
			recovered.push(obj.recovered);
			deaths.push(obj.deaths);

		});
		states.shift();
		confirmed.shift();
		recovered.shift();
		deaths.shift();

var myChart=document.getElementById("myChart").getContext('2d');

var chart= new Chart(myChart, {
	type:"bar",
	data:{
		labels:states,
		datasets:[
		{
			label:"Confirmed",
			data:confirmed,
			backgroundColor:"#FF0099",
			fontColor: 'white',
		},
		{
			label:"Recovered",
			data:recovered,
			backgroundColor:"#00FF33",
		},
		{
			label:"Deaths",
			data:deaths,
			backgroundColor:"#FD1C03",

		},
		]
	},
	options:{}
})




	});
});
