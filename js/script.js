if (window.XMLHttpRequest) {
    var xhr= new XMLHttpRequest();
}
else{
    var xhr = new ActiveXObject("Microsoft.XMLHTTP");
}

var register = document.getElementById('add');
register.addEventListener("click",Add);

window.onload = showUser();

function showUser() {
   
        xhr.onreadystatechange= function() {
            if (xhr.readyState == 4 && xhr.status == 200) {

                document.getElementById("mytable").innerHTML = xhr.responseText;

            }
        };
       
        xhr.open("POST","alert.php",true);
        xhr.send();
        
        }
function Add() {
   var e = document.getElementById("share");
var share = e.options[e.selectedIndex];
        var limit =document.querySelector('.limit:checked');
        var price =document.getElementById("price");
        xhr.onreadystatechange= function() {
            if (xhr.readyState == 4 && xhr.status == 200) {

                document.getElementById("mytable").innerHTML = xhr.responseText;

            }
        };
       
        
    xhr.open("POST","alert.php",true);
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhr.send("share="+share.value+"&limit="+limit.value+"&price="+price.value);
     console.log(share.value);
    console.log(limit.value);
    console.log(price.value);
   

}
function deleteRow(obj) {
   
    var selectedRow = obj.parentNode.parentNode;
    var rowCells = selectedRow.childNodes;
    var check = rowCells[0].innerHTML;
    var share = rowCells[1].innerHTML;
    var alert = rowCells[2].innerHTML;
    var lastprice  = rowCells[3].innerHTML;
    var lasttrigger = rowCells[4].innerHTML;
    
     xhr.onreadystatechange= function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                selectedRow.remove();

            }
        };
       
    
     
     
xhr.open("POST","alert.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("a="+check+"&aa="+share+"&aaa="+alert +"&aaaa="+lastprice+ "&aaaaa="+lasttrigger);

}
 
 function checkenable(obj){
    //var index = obj.parentNode.parentNode.rowIndex;
    // var rowCount = table.rows.length;
    //var row = table.insertRow(rowCount);
    var selectedRow = obj.parentNode.parentNode;
    var rowCells = selectedRow.childNodes;
    var check = rowCells[0].innerHTML;
    var share = rowCells[1].innerHTML;
   var enablecheck;


    if(obj.checked){
    enablecheck=1;
      //console.log(enablecheck);
   }
   else
    {enablecheck=0;}
  

     console.log(obj);
xhr.open("POST","alert.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("c="+enablecheck+"&cc="+share);

xhr.onreadystatechange= function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                showUser;

            }
        };
}


