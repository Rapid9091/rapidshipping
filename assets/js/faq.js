let show = document.getElementsByClassName("box")
        let item = document.getElementsByClassName("para-faq")
        let icon = document.getElementsByClassName("bx")
        for(let i = 0;i<show.length;i++){
            show[i].addEventListener("click", function(){
                item[i].classList.toggle("p")
icon[i].classList.toggle("rotate")
                for(let j = 0;j<show.length;j++){
                    if(j != i){
                        item[j].classList.remove("p")
                        icon[j].classList.remove("rotate")
                    }
                }
            })
        }