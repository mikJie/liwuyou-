$("header").load("header.html",function(){
		var m=0;
		$(".car").on("click",function(){
			m++
			if(m%2!=0){
				$("#banner").css("display","block")
				
				$("#mask").css("display","block")
				var name = localStorage.getItem("show_one(data)")
				if(name!=null){
					$(".user_name").html("欢迎您"+name)
				}
			}else{
				$("#banner").css("display","none")
				$("#mask").css("display","none")
			}
			$("#mask").on("click",function(){
				$("#banner").css("display","none")
				$("#mask").css("display","none")
			})
		})
	})