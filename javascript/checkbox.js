/* RATE OUR WORK */

function selectOnlyThis(id){
    var myCheckbox = document.getElementsByName("myCheckbox");
    Array.prototype.forEach.call(myCheckbox,function(el){
      el.checked = false;
    }); 
    id.checked = true;
}