function handleDragStart(event, ui) {
}

function handleDropEvent(event, ui) {
    console.log(ui.draggable);
    let draggable = ui.draggable;
    alert('Good red square dropped!');
}

function setCookie(cname,cvalue,cdays) {
    let d = new Date();
    d.setTime(d.getTime() + (cdays*24*60*60*1000));
    let expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + cdays + ";path=/";
}

/**
 *
 * @param string cname
 * @returns {string}
 */
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


$(document).ready(function () {
    $('.drop-box').droppable({
        drop: handleDropEvent,
        accept: '#move-box1'
    });
    $('#move-box1').draggable({
        start: handleDragStart,
        cursor: 'move'
    });
    $('#move-box2').draggable({
        start: handleDragStart,
        cursor: 'move',
        revert: "invalid"
    });

function burger_open() {
    document.getElementsByClassName("topNav").style.display = "block";
    function burger_close() {
        document.getElementsByClassName("topNav").style.display = none;
    }
}


    let cookieValue = getCookie("alvis");

    if (typeof cookieValue !== 'undefined' && cookieValue !== '') {
        $('#myForm').slideToggle('300');
        $('#user-data').slideToggle('300');
        let  data = JSON.parse(cookieValue);

        $("#name1").html(data.firstname);
        $("#email1").html(data.mail);
        $("#phone1").html(data.phone);
        $("#messbox").html(data.message);
    }


    console.log($('#user-data'));
    $("#myForm").on('submit', function (ev) {
        ev.preventDefault();
        let d = new Date();
        console.log(document.getElementById("date"));
        document.getElementById("date").innerHTML = d.toDateString();

        let name = $("#firstname").val();
        let secname = document.getElementById("surname").value;
        let mail = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let message = document.getElementById("message").value;

        console.log($('#user-data'));

       $("#name1").html(name + " " + secname);
        document.getElementById("email1").innerHTML = mail;
        document.getElementById("phone1").innerHTML = phone;
        document.getElementById("messbox").innerHTML = message;
        $('#myForm').slideToggle('300');
        $('#user-data').slideToggle('300');

        let formValues = {'firstname' : name + " " + secname, 'mail' : mail, 'phone' : phone, 'message' : message, 'myForm' : d};

        setCookie('alvis', JSON.stringify(formValues), 30);

    });


    let top = $("#scroll");  // scroll to top
    let modal = $("#mymodal");
    let btn = $(".flow");
    let span = $(".close");

    $(window).scroll(function () {
        if ($(window).scrollTop() > 20) {
            top.show();
        } else {
            top.hide();
        }
    });
    top.click(function () {
        $(window).scrollTop(0);
    });

    btn.click(function () {
        modal.show();
    });
    span.click(function () {
        modal.hide();
    });
/*    $(":not(#mymodal)").not(".flow").click(function (ev) {
        console.log(modal.visibility);
        if (modal.is(":visible")) {
            modal.hide();
            ev.stopPropagation();
        }
    });*/
});







