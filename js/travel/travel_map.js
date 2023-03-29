function doFirst(){

    let region = document.querySelectorAll('input');
    // console.log(region);
    for(let i = 0; i < region.length; i++){

        region[i].addEventListener('click', selectRegion);
    }

}
function selectRegion(e){
    console.log(e.target.value);
    
}

//先跟html畫面產生關連
window.addEventListener('load',doFirst)
