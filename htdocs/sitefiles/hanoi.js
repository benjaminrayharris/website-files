

var numberofdiscs = 3;
let p = [];
let peg = [];
let id = [];
let base;
let destination;
let notToMoveFrom;
let toMoveFrom;
let moveCount;
let ledge;
let sprkbttm0;
let sprkbttm1;
let sprkbttm2;
let sprklft0;
let sprklft1;
let sprklft2;

function towerofhanoi () {

    base = 100;
    ledge = 8;

    p[0] = 75;
    p[1] = 200;
    p[2] = 325;

    $("#hanoi").append('<div id="grass1" class="grass"></div>');
    $("#grass1").css({"bottom": 10, "left": (p[0] - (base + 6) / 2), "width": (base + 6)});
    $("#hanoi").append('<div id="grass2" class="grass"></div>');
    $("#grass2").css({"bottom": 10, "left": (p[1] - (base + 6) / 2), "width": (base + 6)});
    $("#hanoi").append('<div id="grass3" class="grass"></div>');
    $("#grass3").css({"bottom": 10, "left": (p[2] - (base + 6) / 2), "width": (base + 6)});
    
    $("#hanoicontrol").append('<div id="reset" onclick="reset()"></div>');
    $("#hanoicontrol").append('<div id="less" onclick="less()"></div>');
    $("#hanoicontrol").append('<div id="number">' + numberofdiscs + '</div>');
    $("#hanoicontrol").append('<div id="more" onclick="more()"></div>');

    peg[0] = [];
    peg[1] = [];
    peg[2] = [];
    id = [];

	for (i = 0; i < numberofdiscs; i++) {
        peg[0].push([100 - i * ledge, numberofdiscs - i]);

        id[i] = "disc" + (numberofdiscs - i);
        $("#hanoi").append('<div id="' + id[i] + '" class="disc"><div class="roof"></div><div class="base"><div class="inner"></div></div></div>');

        if (i == numberofdiscs - 1) $("#" + id[i]).prepend('<div id="spike"></div>');

        $("#spike").css({"height": (base - i * ledge) / 2, "width": (base - i * ledge) / 4, "background-image": "url('/sitefiles/images/towerSpike.png')"});
        $("#" + id[i]).css({"width": (base - i * ledge), "left": (p[0] - (base - i * ledge) / 2), "bottom": (20 + 32 * i), "display": "none"});
        $("#" + id[i]).fadeIn(2000);

	} // end for

    $(".inner").css({"background-image": "url('/sitefiles/images/towerBase.png')"});
    $(".roof").css({"background-image": "url('/sitefiles/images/towerRoof.png')"});

    sprkbttm0 = (id.length * 32 + 20 + (base - (id.length - 1) * ledge) / 2);
    sprkbttm1 = "" + sprkbttm0 + "px";
    sprkbttm2 = "" + (sprkbttm0 - 250) + "px";
    sprklft0 = p[2] + 2;
    sprklft1 = "" + sprklft0 + "px";
    sprklft2 = "" + (sprklft0 - 250) + "px";

    $("#hanoi").append('<div id="spark"></div>');
    $("#spark").css({
        "height": "0px", 
        "width": "0px", 
        "bottom": sprkbttm1, 
        "left": sprklft1
    });

    moveCount = 0;
    destination = 2;
    notToMoveFrom = 2;

    doneholding();

} // end towerofhanoi()

function movethetower () {

    holdon();

	if (peg[2].length != numberofdiscs) {
		moveCount++;

		// choose peg to move from
        let oneUp = (notToMoveFrom + 1) % 3;
        let oneDown = (oneUp + 1) % 3;
        if (peg[oneDown].length == 0) {
            toMoveFrom = oneUp;
        } else
        if (peg[oneUp].length == 0) {
            toMoveFrom = oneDown;
        } else {
            if (getDisc(peg[oneDown]) > getDisc(peg[oneUp])) {
                toMoveFrom = oneUp;
            } else {
                toMoveFrom = oneDown;
            } // end if-else
        } // end if-else if-else

        // decide the peg to move to
        let eoo = numberofdiscs % 2;
        if (toMoveFrom == 0) {
		    if (peg[eoo + 1].length == 0)
				destination = eoo + 1; 
			else if (getDisc(peg[0]) < getDisc(peg[eoo + 1]))
				destination = eoo + 1;                             
			else destination = 2 - eoo;
        } else
        if (toMoveFrom == 1) {
			if (peg[2 - eoo * 2].length == 0)
				destination = 2 - eoo * 2;
			else if (getDisc(peg[1]) < getDisc(peg[2 - eoo * 2]))
				destination = 2 - eoo * 2;                         
			else destination = eoo * 2;   
        } else
        if (toMoveFrom == 2) {
			if (peg[eoo].length == 0)
				destination = eoo;
			else if (getDisc(peg[2]) < getDisc(peg[eoo]))
				destination = eoo;                                 
			else destination = 1 - eoo;
        } // end if-else if-else if

		// make move and report it
		//alert("Move " + moveCount + " :  Disc" + getDisc(peg[toMoveFrom]) + " moving from Peg" + (toMoveFrom + 1) + " to Peg" + (destination + 1));
        moveDisc(getDisc(peg[toMoveFrom]), toMoveFrom, destination);
		peg[destination].push(peg[toMoveFrom].pop());

		// set the peg that will be ineligable to move next
		notToMoveFrom = destination;
    } else {
        finish();
    } // end if

} // end movethetower()
	
function getDisc (peg) {
	let disc = peg[peg.length - 1];
	return disc[1];
} // end getDisc()

function getWidth (peg) {
    let disc = peg[peg.length - 1];
    return disc[0];
} // end getWidth()

function moveDisc (disc, pegFrom, pegTo) {
    let ceiling = numberofdiscs * 32 + 50;
    let del = $("#disc" + disc);
    del.animate({bottom: ceiling});
    del.animate({left: (p[pegTo] - getWidth(peg[pegFrom]) / 2)});
    del.animate({bottom: (peg[pegTo].length * 32 + 20)}, function(){
        if (peg[2].length == numberofdiscs) finish();
        else movethetower();
    });
} // end moveDisc()

function demoTower () {
    //for (i = id.length - 1; i >= 0; i--) {
    //    $("#" + id[i]).fadeOut(4000);
    //} // end for
    for (i = id.length - 1; i >= 0; i--) {
        $("#" + id[i]).remove();
    } // end for
    $("#grass1").remove();
    $("#grass2").remove();
    $("#grass3").remove();
    $("#reset").remove();
    $("#less").remove();
    $("#number").remove();
    $("#more").remove();
    $("#spark").remove();
} // end demoTower()

function finish () {
    $(".inner").css({"background-image": "url('/sitefiles/images/goldBase.png')"});
    $(".roof").css({"background-image": "url('/sitefiles/images/goldRoof.png')"});
    $("#spike").css({"background-image": "url('/sitefiles/images/goldSpike.png')"});
    $("#spark").animate({bottom: sprkbttm2, left: sprklft2, width: '500px', height: '500px'}, 100);
    $("#spark").animate({bottom: sprkbttm1, left: sprklft1, width: '0px', height: '0px'}, 50);
    doneholding();
}

function holdon () {
    $("#hanoi").css({"pointer-events": "none"});
}

function doneholding () {
    $("#hanoi").css({"pointer-events": "auto"});
}

function reset () {
    demoTower();
    towerofhanoi();
}

function less () {
    if (numberofdiscs > 1) {
        numberofdiscs = numberofdiscs - 1;
        $("#number").text("" + numberofdiscs);
        demoTower();
        towerofhanoi();
    } // end if
}

function more () {
    if (numberofdiscs < 7) {
        numberofdiscs = numberofdiscs + 1;
        $("#number").text("" + numberofdiscs);
        demoTower();
        towerofhanoi();
    } // end if
}