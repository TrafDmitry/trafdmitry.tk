






/*





/*var  elementToDrag = null;
var offX, offY;

function captureElement(elem) {

    if(!elementToDrag){

        elementToDrag = elem;
        offX = event.offsetX;
        offY = event.offsetY;
    }
}

function releaseElement() {

    elementToDrag = null;
}

function dragElement() {

    if(elementToDrag){

        elementToDrag.style.pixelLeft = event.clientX - offX;
        elementToDrag.style.pixelTop = event.clientY - offY;
    }
}