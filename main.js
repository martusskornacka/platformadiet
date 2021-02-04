// (function () {
//     "use strict";
//     //get elements
//     let el = function (element) {
//         if (element.charAt(0) === "#") {
//             return document.querySelector(element);
//         }
//         return document.querySelectorAll(element);
//     };
//     let viewer = el("#viewer");
//     equals = el("#equals");
//     nums = el(".num");
//     ops = el(".ops");
//     theNum = "";
//     oldNum = "";
//     resultNum;
//     operator;

//     let setNum = function () {
//         if (resultNum) {
//             theNum = this.getAttribute('data-num');
//             resultNum = "";
//         } else {
//             theNum += this.getAttribute("data-num");
//         };
//         viewer.innerHTML = theNum;

//     };
//     let moveNum = function () {
//         oldNum = theNum;
//         theNum = "";
//         operator = this.getAttribute("data-ops");
//         equals.setAttribute("data-results", "");
//     };
//     let displayNum = () => {
//         oldNum = parseFloat(oldNum);
//         theNum = parseFloat(theNum);
//         switch (operator) {
//             case "plus":
//                 resultNum = oldNum + theNum;
//                 break;
//             case "minus":
//                 resultNum = oldNum - theNum;
//                 break;
//             case "times":
//                 resultNum = oldNum * theNum;
//                 break;
//             case "diveded by":
//                 resultNum = oldNum / theNum;
//                 break;
//             default:
//                 resultNum = theNum;
//         };
//         // if NaN or Infinity
//         if (!isFinite(resultNum)) {
//             if (isNaN(resultNum)) {
//                 resultNum = "Coś nie poszło";
//             } else {
//                 resultNum = "he he he";
//                 el("#reset").classList.add("show");
//             };
//         };
//         viewer.innerHTML = resultNum;
//         equals.setAttribute("data-result", resultNum);
//         oldNum = 0;
//         theNum = resultNum;
//     };
//     // clear button
//     let clearAll = () => {
//         oldNum = "";
//         theNum = "";
//         viewer.innerHTML = "0";
//         equals.setAttribute("data-result", resultNum);
//     };
//     // click events
//     for (i = 0, l = ops.lenght; i < l; i++) {
//         ops[i].onclick = moveNum;
//     }
//     equals.onclick = displayNum;
//     el("#clear").onclick = clearAll;
//     el("#reset").onclick = () => {
//         window.location = window.location;
//     };

// }());
/*
TODO:
    Limit number input
    Disallow . from being entered multiple times
    Clean up structure
*/
// nav

// end nav
// slider start

// var myVar = setInterval(scroll, 2000);
// var x = -100;
// function scroll() {
//     var carousel = document.getElementById("carousel");
//     carousel.style.transform = `translateX(${x}%)`;
//     x -= 100;
//     if (x == -400) {
//         x = 0;
//     }
// }

// slider stop
// sign in modal
// Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var btn = document.getElementById("signin");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    // sign in modal stop
    (function () {
        "use strict";

        // Shortcut to get elements
        var el = function (element) {
            if (element.charAt(0) === "#") { // If passed an ID...
                return document.querySelector(element); // ... returns single element
            }

            return document.querySelectorAll(element); // Otherwise, returns a nodelist
        };

        // Variables
        var viewer = el("#viewer"), // Calculator screen where result is displayed
            equals = el("#equals"), // Equal button
            nums = el(".num"), // List of numbers
            ops = el(".ops"), // List of operators
            theNum = "", // Current number
            oldNum = "", // First number
            resultNum, // Result
            operator; // Batman

        // When: Number is clicked. Get the current number selected
        var setNum = function () {
            if (resultNum) { // If a result was displayed, reset number
                theNum = this.getAttribute("data-num");
                resultNum = "";
            } else { // Otherwise, add digit to previous number (this is a string!)
                theNum += this.getAttribute("data-num");
            }

            viewer.innerHTML = theNum; // Display current number

        };

        // When: Operator is clicked. Pass number to oldNum and save operator
        var moveNum = function () {
            oldNum = theNum;
            theNum = "";
            operator = this.getAttribute("data-ops");

            equals.setAttribute("data-result", ""); // Reset result in attr
        };

        // When: Equals is clicked. Calculate result
        var displayNum = function () {

            // Convert string input to numbers
            oldNum = parseFloat(oldNum);
            theNum = parseFloat(theNum);

            // Perform operation
            switch (operator) {
                case "plus":
                    resultNum = oldNum + theNum;
                    break;

                case "minus":
                    resultNum = oldNum - theNum;
                    break;

                case "times":
                    resultNum = oldNum * theNum;
                    break;

                case "divided by":
                    resultNum = oldNum / theNum;
                    break;

                // If equal is pressed without an operator, keep number and continue
                default:
                    resultNum = theNum;
            }

            // If NaN or Infinity returned
            if (!isFinite(resultNum)) {
                if (isNaN(resultNum)) { // If result is not a number; set off by, eg, double-clicking operators
                    resultNum = "You broke it!";
                } else { // If result is infinity, set off by dividing by zero
                    resultNum = "Look at what you've done";
                    el('#calculator').classList.add("broken"); // Break calculator
                    el('#reset').classList.add("show"); // And show reset button
                }
            }

            // Display result, finally!
            viewer.innerHTML = resultNum;
            equals.setAttribute("data-result", resultNum);

            // Now reset oldNum & keep result
            oldNum = 0;
            theNum = resultNum;

        };

        // When: Clear button is pressed. Clear everything
        var clearAll = function () {
            oldNum = "";
            theNum = "";
            viewer.innerHTML = "0";
            equals.setAttribute("data-result", resultNum);
        };

        /* The click events */

        // Add click event to numbers
        for (var i = 0, l = nums.length; i < l; i++) {
            nums[i].onclick = setNum;
        }

        // Add click event to operators
        for (var i = 0, l = ops.length; i < l; i++) {
            ops[i].onclick = moveNum;
        }

        // Add click event to equal sign
        equals.onclick = displayNum;

        // Add click event to clear button
        el("#clear").onclick = clearAll;

        // Add click event to reset button
        el("#reset").onclick = function () {
            window.location = window.location;
        };

    }());

