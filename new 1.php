<html>
    <body>
	<--opt--> 
	     <h1>This is HTML</h1>
		 <button onclick = "viewJS()" >Click me</button>
		 <p id= "p1"></p>
		 <script>
		 //opt
		    // document.write("This is from JS");
			 //alert("This is from JS");
			//var p = document.getElementById("p1");
			
			function viewJS(){
				var p = document.getElementById("p1");
		 p.innerHTML= "inner chng ar jnno";
			p.style.color = "blue";// color chng hy
			p.style.margin = "50px";
			p.style.backgroundColor= "balck";
			p.style.borderRadius= "3px";
			p.style.padding="5px";
			}
		 </script>
	</body>
</html>   