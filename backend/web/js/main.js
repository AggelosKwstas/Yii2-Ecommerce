function loadWait(){
   Loader.open();
    setTimeout(() => {  Loader.close() }, 500);
}

document.getElementById("btnReset").onclick = function() {
    document.getElementById("productsearch-globalsearch").value=""
}
