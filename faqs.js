const items = document.querySelectorAll('.accordion button');

function toggleAccordion(){
    const itemtoggle = this.getAttribute('area-expanded')
    for (i = 0 ; i = items,length; i++){
        items[i].setAttribute('area-expanded','false');
    }

    if(itemtoggle == 'false'){
        this.setAttribute('area-expanded','true');
    }
}

items.forEach(item ==> item.addventListener('click',toggleAccordion));