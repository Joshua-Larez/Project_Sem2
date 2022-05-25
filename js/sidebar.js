// variables  by ID from the sidebar a-tag
var aanvraag = document.getElementById("aanvraag");
var bestellen = document.getElementById("bestellen");
var magazijn = document.getElementById("magazijn");
var lenen = document.getElementById("lenen");
var goedkeuren = document.getElementById("goedkeuren");
var users = document.getElementById("users");
var frame = document.getElementById("myiframe");
var account = document.getElementById("accountButton");

// gets the userrole of the current user 
var userrole = role;

// if the sidebar is 15em make it 5em if button clicked
function toggleNav() {
    var   sidebar = document.getElementById("mySidebar"),
            main = document.getElementById("main"),
            content = document.getElementById("content");

    sidebar.style.width = sidebar.style.width == "5em" ? '15em' : '5em';
    main.style.marginLeft = main.style.marginLeft == "5em" ? '15em' :  '5em';
    content.style.marginLeft = content.style.marginLeft == "5em" ? '15em' :  '5em';
}

// depending on which role is being used the tabs in the sidebar would be displayed
switch (userrole) {
    case 'null':
        aanvraag.style.display = 'none';
        bestellen.style.display = 'none';
        magazijn.style.display ='none';
        lenen.style.display ='none';
        goedkeuren.style.display ='none';
        users.style.display ='none';
        frame.style.display = 'none';
        account.style.display = 'none';
        break;
    case 'super-user':
        // aanvraag.style.display = 'block';
        // bestellen.style.display = 'block';
        // magazijn.style.display = 'block';
        // lenen.style.display = 'block';
        // goedkeuren.style.display = 'block';
        // users.style.display = 'block';
        break;
    case 'student':
        aanvraag.style.display = 'block';
        bestellen.style.display = 'none';
        magazijn.style.display ='none';
        lenen.style.display ='none';
        goedkeuren.style.display ='none';
        users.style.display ='none';
        break;
    case 'financial-beheerder':
        aanvraag.style.display = 'none';
        bestellen.style.display = 'none';
        //magazijn.style.display = 'block';
        lenen.style.display = 'none';
       // goedkeuren.style.display = 'block';
        users.style.display = 'none';
        break;
    case 'magazijn-beheerder':
        aanvraag.style.display = 'none';
        //bestellen.style.display = 'block';
        //magazijn.style.display = 'block';
        //lenen.style.display = 'block';
        goedkeuren.style.display = 'none';
        users.style.display = 'none';
        break;
    default:
        aanvraag.style.display = 'none';
        bestellen.style.display = 'none';
        magazijn.style.display ='none';
        lenen.style.display ='none';
        goedkeuren.style.display ='none';
        users.style.display ='none';
        frame.style.display = 'none';
        account.style.display = 'none';
        break;
    }