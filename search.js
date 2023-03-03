var arr=['New York','Cannadian Mountains', 'Sydney'];
var key=document.getElementById('srch');
var but=document.getElementById('clk');

function search(){
 for(let i = 0; i < arr.length; i++){
        if(arr.indexOf(Number(key.value))==-1){
            window.open('index.php', '_blank');
        }
        else if(arr.indexOf(Number(key.value))=='New York'){
            window.open('ny.php', '_blank');
        }
        else if(arr.indexOf(Number(key.value))=='Cannadian Mountains'){
            window.open('cad.php', '_blank');
        }
        else if(arr.indexOf(Number(key.value))=='Sydney'){
            window.open('nz.php', '_blank');
        }
    }
}

but.addEventListener('click',search);