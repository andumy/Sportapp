

function iterate(ia,ig,is,ib,athletes,gold,silver,bronze){

    var max = Math.max(athletes,gold,silver,bronze);
    var domAthletes = document.getElementById("Athletes");
    var domGold = document.getElementById("Gold");
    var domSilver = document.getElementById("Silver");
    var domBronze = document.getElementById("Bronze");
    
    if(ia>athletes && ig>gold && is>silver && ib>bronze)
        return true;

    if(ia>athletes) ia--;
    if(ig>gold) ig--;
    if(is>silver) is--;
    if(ia>bronze) ib--;

    domAthletes.innerHTML = ia;
    domGold.innerHTML = ig;
    domSilver.innerHTML = is;
    domBronze.innerHTML = ib;


    setTimeout(iterate,300/max,ia+1,ig+1,is+1,ib+1,athletes,gold,silver,bronze);
}
