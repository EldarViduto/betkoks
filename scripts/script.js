/* Bendras scriptas: */





/* Julija1 script kodas: */
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });



/* Jurga script kodas: */


var rating="";
function starmark(item) {
var count = item.id[0];
rating=count;
var subid=item.id.substring(1);
for(var i=0;  i<5; i++) {

if(i<count){

  document.getElementById((i+1)+subid).style.color="orange";

}
else{
  document.getElementById((i+1)+subid).style.color="black";
}
}
}





/* Vardas3 script kodas: */





/* Eldar script kodas: */