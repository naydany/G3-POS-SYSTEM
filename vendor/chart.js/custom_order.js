
function startPrintOrder(){
    const recipt =document.getElementById("myrecipt").innerHTML ;
    console.log(recipt)
    const a = window.open('','');
    a.document.write('<html><title>POS System G3</title>');
    a.document.write('<body style="font-family:fangsong;">');
    a.document.write(recipt);
    a.document.write('</body></html>');
    a.document.close();
    a.print();
}