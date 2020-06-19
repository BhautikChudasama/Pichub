var cl=document.querySelector(".form").classList;
            document.querySelector(".form").addEventListener("click", function() {
                cl.add("fble");
                var c=document.querySelector(".combo").classList;
                c.add("hide");
                document.querySelector(".searchbr").style="background:white;";
                document.querySelector(".searchBtn").style="background:white;";
            });
            document.querySelector(".form").addEventListener("focus", function() {
                cl.remove("fble");
            });
            function show() {
                document.querySelector(".menu").style="display:block;";
            }
        
