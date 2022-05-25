// the new froms gets pasted here
const newForm = document.querySelector('.paste-new-forms');

// gets the form html as <template> 
const Temp = document.getElementById("main-form-template");

// just a number teller 
let teller = 1;


// adds more forms
function addMore() {
    // creates div
    let newTemp = document.createElement('div');

    // set div to html
    newTemp.innerHTML = Temp.innerHTML;

    // sets an attribute to the div with an id number
    newTemp.dataset.id = teller;
    
    // just prints in the console so i can see what i do 
    console.log(newTemp);

    // makes a new child div 
    newForm.appendChild(newTemp);

    // give the button the same number as the form(teller)
    newTemp.childNodes[1].childNodes[1].childNodes[15].dataset.id = teller

    // increase number of teller with the appendedchild
    teller++;

}

// deletes the newforms
function Delete(element) {
    // gets the id of the button
    const id = element.dataset.id;

    // gets the id of the form
    let form = document.querySelectorAll(`[data-id='${id}']`);

    // removes the form
    form[0].remove();
}

// make add page appear
function unhideAdd() {
    const add = document.getElementById('add');
    const edit = document.getElementById('edit');
    const del = document.getElementById('delete');

    add.style.display = 'block';
    edit.style.display = 'none';
    del.style.display = 'none';
}

// make edit page appear
function unhideEdit() {
    const add = document.getElementById('add');
    const edit = document.getElementById('edit');
    const del = document.getElementById('delete');

    add.style.display = 'none';
    edit.style.display = 'block';
    del.style.display = 'none';
}

// make delete page appear
function unhideDelete() {
    const add = document.getElementById('add');
    const edit = document.getElementById('edit');
    const del = document.getElementById('delete');

    add.style.display = 'none';
    edit.style.display = 'none';
    del.style.display = 'block';
}

function searchThrough() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    // selects the input value
    input = document.getElementById("myInput");
    // Filters the input value to uppercase all letters
    filter = input.value.toUpperCase();
    // selects the table
    table = document.getElementById("myTable");
    // selects the table rows/records
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        // gets 
        td = tr[i].getElementsByTagName("td")[0];
        // 
        if (td) {
            // 
            txtValue = td.textContent || td.innerText;
            // 
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                // 
                tr[i].style.display = "";
            } else {
                // 
                tr[i].style.display = "none";
            }
        }
    }
}