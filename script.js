const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '69f90e746fmshe038980d7cd7fc8p113d2ejsn766591454380',
		'X-RapidAPI-Host': 'weather-by-api-ninjas.p.rapidapi.com'
	}
};
const getWeather = (city) => {
	cityName.innerHTML = city
	fetch('https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city=' + city, options)
		.then(response => response.json())
		.then((response) => {
			console.log(response)
			//cloud_pct.innerHTML = response.cloud_pct
			temp.innerHTML = response.temp
			temp2.innerHTML = response.temp
			feels_like.innerHTML = response.feels_like
			humidity.innerHTML = response.humidity
			humidity2.innerHTML = response.humidity
			min_temp.innerHTML = response.min_temp
			max_temp.innerHTML = response.max_temp
			wind_speed.innerHTML = response.wind_speed
			wind_speed2.innerHTML = response.wind_speed
			wind_degrees.innerHTML = response.wind_degrees
			sunrise.innerHTML = response.sunrise
			sunset.innerHTML = response.sunset
		})
		.catch(err => console.error(err));
}
submit.addEventListener("click", (e) => {
	e.preventDefault()
	getWeather(city.value)
})

getWeather("Delhi")


const getWeather1 = () => {
	let citys = ['Shangai', 'Boston', 'Lucknow', 'Tokyo', 'Kolkata', 'London']
	citys.forEach((element, i) => {
		let cityname = element
		fetch('https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city=' + cityname, options)
			.then(response => response.json())
			.then((response) => {
				console.log(response)
				let tem=document.getElementById(`tem${i}`)
				let feels=document.getElementById(`feels${i}`)
				let humid=document.getElementById(`humid${i}`)
				let min=document.getElementById(`min${i}`)
				let max=document.getElementById(`max${i}`)
				let speed=document.getElementById(`speed${i}`)
				let degree=document.getElementById(`degree${i}`)
				let rise=document.getElementById(`rise${i}`)
				let set=document.getElementById(`set${i}`)
				
				//cloud_pct.innerHTML = response.cloud_pct
				tem.innerHTML = response.temp
				feels.innerHTML = response.feels_like
				humid.innerHTML = response.humidity
				min.innerHTML = response.min_temp
				max.innerHTML = response.max_temp
				speed.innerHTML = response.wind_speed
				degree.innerHTML = response.wind_degrees
				rise.innerHTML = response.sunrise
				set.innerHTML = response.sunset
				// console.log(response.feels_like)
			})
			.catch(err => console.error(err));
	});
}
getWeather1()
