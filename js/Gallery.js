    //=========== 點擊圖片互換 ===============
    let pic_el = document.getElementsByClassName('consultant_gallary_chenge');
    let pic_main = document.querySelector('.consultant_gallary_main img');
    console.log(pic_main);
    for(let i = 0; i < pic_el.length; i++){
        pic_el[i].addEventListener('click', function(){
           
            if(i === 0){
                pic_main.src="./image/consultant01.png";
                
            }else{
                if(i === 1){
                    pic_main.src="./image/consultant02.png";
                    console.log(pic_main.src);
                }else{
                    pic_main.src="./image/consultant03.png";
                }
            }
        });
    }