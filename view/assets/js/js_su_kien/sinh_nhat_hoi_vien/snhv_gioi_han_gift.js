{
    const divBaoQuat = document.querySelector(".snhv__div--quatang");
    const divBaoGift = document.querySelectorAll(".snhv__div__div_quatang");

    
    const numVisibleItem = 3;
    const numHiddenItem = divBaoGift.length - numVisibleItem;

    if(numHiddenItem>0)
    {
        divBaoQuat.style.overflowY="auto";
    }

}