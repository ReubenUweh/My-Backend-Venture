<?php
require("stateDatabase.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36 States and Capital</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        #formId {
            outline: none;
            box-shadow: none;
        }

        #formId:focus {
            border: 2px solid blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="fw-bold text-center mt-3">36 States and Capital of Nigeria</h2>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mt-5">
                <div class="d-flex justify-content-between">
                    <p class="fs-5 fw-bold mt-2">List of States and Capital</p>
                    <button onclick="sortStates()" type="button" class="btn btn-info px-4 px-md-5 py-1">Sort</button>
                </div>
                <div>
                    <div class="form-floating mt-4 mb-4">
                        <input oninput="searchStates(this)" type="search" class="form-control" name="" id="formId" placeholder="">
                        <label for="formId">Search here...</label>
                    </div>
                </div>
                <ul class="list-group" id="states">

                </ul>
            </div>
        </div>
    </div>
    <script>
        const stateData = <?php echo json_encode($states) ?>;
        const states = document.getElementById("states");
        displayStates(stateData);

        function sortStates() {
            const sortStates = stateData.sort(function(a, b) {
                return a.state.localeCompare(b.state);
            });
            displayStates(sortStates);
        }

        function displayStates(stateData) {
            states.innerHTML = "";
            for (let index = 0; index < stateData.length; index++) {
                const each = stateData[index];
                states.innerHTML += `
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">${each.state}</span>
                            <a href="stateView.php?state=${each.state}">more details</a>
                    </li>
                            `
            }
        }

        function searchStates(e) {
            const userInput = e.value.toLowerCase();
            const values = stateData.filter(function(each) {
                const list = `${each.state}`;
                const turning = list.toLowerCase();
                return turning.includes(userInput);
            });
            if (values.length == 0) {
                states.innerHTML = `<li class="list-group-item text-danger">No results found.</li>`;
                return;
            }
            displayStates(values);
        }
    </script>
</body>

</html>