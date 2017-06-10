/**
 * Created by Administrator on 2017/6/2.
 */

window.onload = function (){
    div1();
    function div1() {
        var oDiv = document.getElementById('div1');
        var oParent = document.getElementById('parent');
        var l = 0;
        var r = oParent.offsetWidth - oDiv.offsetWidth;
        var t = 0;
        var b = oParent.offsetHeight - oDiv.offsetHeight;
        var n = 1;
        drag(oDiv,l,r,t,b,n);
    }


    div2();
    function div2() {
        var oDiv2 = document.getElementById('div2');
        var oParent = document.getElementById('parent');
        var l2 = 0;
        var r2 = oParent.offsetWidth - oDiv2.offsetWidth;
        var t2 = 0;
        var b2 = oParent.offsetHeight - oDiv2.offsetHeight;
        var n2 = 1;
        drag(oDiv2,l2,r2,t2,b2,n2);
    }

    div3();
    function div3() {
        var oDiv3 = document.getElementById('div3');
        var oParent = document.getElementById('parent');
        var l3 = 0;
        var r3 = oParent.offsetWidth - oDiv3.offsetWidth;
        var t3 = 0;
        var b3 = oParent.offsetHeight - oDiv3.offsetHeight;
        var n3 = 1;
        drag(oDiv3,l3,r3,t3,b3,n3);
    }

    div4();
    function div4() {
        var oDiv4 = document.getElementById('div4');
        oDiv4.style.position='absolute';
        var oParent = document.getElementById('parent');
        var l4 = 0;
        var r4 = oParent.offsetWidth - oDiv4.offsetWidth;
        var t4 = 0;
        var b4 = oParent.offsetHeight - oDiv4.offsetHeight;
        var n4 = 1;
        drag(oDiv4,l4,r4,t4,b4,n4);
    }

}



function drag(obj,l,r,t,b,n){

    var dmW = document.documentElement.clientWidth || document.body.clientWidth;
    var dmH = document.documentElement.clientHeight || document.body.clientHeight;


   // var sent = sent || {};
    var l = l || 0;
    var r = r || dmW - obj.offsetWidth;
    var t = t || 0;
    var b = b || dmH - obj.offsetHeight;
    var n = n || 10;

    obj.onmousedown = function (ev){
        var oEvent = ev || event;
        var sentX = oEvent.clientX - obj.offsetLeft;
        var sentY = oEvent.clientY - obj.offsetTop;
        document.onmousemove = function (ev){
            var oEvent = ev || event;

            var slideLeft = oEvent.clientX - sentX;
            var slideTop = oEvent.clientY - sentY;

            if(slideLeft <= l){
                slideLeft = l;
            }
            if(slideLeft >= r){
                slideLeft = r;
            }
            if(slideTop <= t){
                slideTop = t;
            }
            if(slideTop >= b){
                slideTop = b;
            }

            obj.style.left = slideLeft + 'px';
            obj.style.top = slideTop + 'px';
        }

        document.onmouseup = function (){
            document.onmousemove = null;
            document.onmouseup = null;
        }

        return false;
    }
}


function pagge(){

}