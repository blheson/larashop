const helper = {
    select: (dom)=>{
        return document.querySelector(dom);
    },
    selectAll: (dom)=>{
        return document.querySelectorAll(dom);
    }
}
const DOM = {
    openNav: ()=>{
        helper.select("#myNav").classList.toggle("menu_width");
        helper.select(".custom_menu-btn").classList.toggle("menu_btn-style");
    },
    openSearch: (focus =true)=>{
        const searchDiv = helper.select("#searchInput");
        searchDiv.classList.toggle("d-none");
        if (focus) searchDiv.querySelector('input[name=search]').focus();
        helper.select("#toggle_search").classList.toggle("d-none");
    },
    checkTos: ()=>{
        if(helper.select('input[name=tos]').checked)
        helper.select('button.checkout_btn').disabled = false;
        else
        helper.select('button.checkout_btn').disabled = true;
    }
    ,
    cartRow:()=>{
        // helper.select('.cartTable').addEventListener('click',(e)=>{
        //     alert(e.target.parentNode.parentNode.querySelector('input[name=productId').value)
        // })
    }
}

document.getElementById("searchInput").addEventListener('blur', (e) => {
    DOM.openSearch(false);
    alert('see');
})
// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


DOM.cartRow();
/** google_map js **/

function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}