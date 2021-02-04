let test = document.getElementsByClassName("dietDay");

// This handler will be executed only once when the cursor
// moves over the unordered list

test.addEventListener("mouseover", function () {
    // highlight the mouseover target
    document.getElementsByClassName('details').style.display = 'block'
});
