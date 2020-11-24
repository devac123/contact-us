//function addlink() {
//    var selectdata = window.getSelection(),
//        pagelink = '<br /> <br /> Read more at ' + document.location.href,
//        sp = selectdata + pagelink,
//        newdiv = document.createElement('div');

//    newdiv.style.position = 'absolute';
//    newdiv.style.left = '-99999px';

//    document.body.appendChild(newdiv);
//    newdiv.innerHTML = sp;
//    selectdata.selectAllChildren(newdiv);

//    window.setTimeout(function () {
//        document.body.removeChild(newdiv);
//    }, 100);
//}

//document.addEventListener('copy', addlink);