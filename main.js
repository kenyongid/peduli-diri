function Urutkan(urut){
    var selectedValue = urut.value;
    sortTable(selectedValue)
}
th - document.getElementsByTagName('th');

for( let c=0; c<th.leght; c++){
    th[c].addEventListener('click', item(c))

}
function item(c){
    return function(){
        sortTable(c)
    }
}

function sortTable() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;
   
    while (switching) {
     
      switching = false;
      rows = table.rows;
      
      for (i = 1; i < (rows.length - 1); i++) {
        
        shouldSwitch = false;
       
        x = rows[i].getElementsByTagName("TD")[0];
        y = rows[i + 1].getElementsByTagName("TD")[0];
       
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
     
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }