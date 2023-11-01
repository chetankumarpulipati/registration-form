
function seterror(id,error){
    alert();
element=document.getElementById(id);
alert();
element.getElementsByClassName('form-control')[0].innerHTML=error;
alert();
}
function validateform1(){
    var val=true;   
    var name=document.forms["part1"]["membership-name"].value;
    if(name.length<4){
        seterror("membership-name","*Name is too short")
        val=false;
    }
    else if(name.length>15){
        seterror("membership-name","*Name is too long")
        val=false;
    }
    return val;


}
function validateform2(){

}
