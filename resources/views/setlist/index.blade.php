<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>View Setlist</title>
</head>

<body>
		<div id="app">
				<!-- <p>@{{ message }}</p> -->
				<ul>
						<li v-for="task in tasks">@{{ task }}</li>
				</ul>	
		</div>

		<template id="setlist-template">
			
		</template>
		<script src="https://unpkg.com/vue@2.3.4"></script>
		<script>
		new Vue({
    		el: '#app',
    
    		data: {
      		message: 'hello world',
      		tasks: [
	            'Go to the store',
	            'Go to the bank',
	            'Go to the doctor'
     		 ]
    		}
		});
		</script>
</body>