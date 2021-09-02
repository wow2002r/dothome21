
    document.querySelector(".info button").addEventListener("click", function(){
       document.querySelector("#modal").classList.add("show"); 
       document.querySelector("#modal").classList.remove("hide"); 
    });
    document.querySelector(".modal-cont button").addEventListener("click", function(){
       document.querySelector("#modal").classList.add("hide"); 
    });
