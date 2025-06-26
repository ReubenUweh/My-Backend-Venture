<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigerian States Directory</title>
    <link rel="stylesheet" href="state.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>

<body>
    <div class="search-container">
        <div class="row g-2">
            <div class="col-md-8">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" id="searchInput" class="form-control search-input border-start-0"
                        placeholder="Search states...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="dropdown w-100">
                        <button class="btn filter-btn w-100" type="button"
                            id="filterDropdown" data-bs-toggle="dropdown">
                            <i class="fas fa-filter me-2"></i> Filter
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="filterDropdown">
                            <li>
                                <h6 class="dropdown-header">Sort by</h6>
                            </li>
                            <li><a class="dropdown-item" href="#" data-sort="name-asc">Name (A-Z)</a></li>
                            <li><a class="dropdown-item" href="#" data-sort="name-desc">Name (Z-A)</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <h6 class="dropdown-header">Population</h6>
                            </li>
                            <li><a class="dropdown-item" href="#" data-sort="pop-asc">Low to High</a></li>
                            <li><a class="dropdown-item" href="#" href="#" data-sort="pop-desc">High to Low</a></li>
                            <!-- JavaScript will handle these filter options -->
                            <!-- <script>
                                // document.querySelectorAll('[data-sort]').forEach(item => {
                                //     item.addEventListener('click', function(e) {
                                //         e.preventDefault();
                                //         const sortType = this.getAttribute('data-sort');
                                //         // Sort states based on selection
                                //     });
                                // });
                            </script> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="states-list">
        <ol class="list-group list-group-numbered" id="statesList">
            <!-- PHP will generate this list -->
            <!-- <?php
                    // foreach ($states as $state) {
                    //     echo '<li class="list-group-item d-flex justify-content-between align-items-start state-item">';
                    //     echo '<div class="ms-2 me-auto">';
                    //     echo '<div class="fw-bold">' . $state['state'] . '</div>';
                    //     echo $state['governor'] . ' • ' . $state['population'];
                    //     echo '</div>';
                    //     echo '<span class="badge badge-zone rounded-pill">' . $state['geo_zone'] . '</span>';
                    //     echo '</li>';
                    // }
                    ?> -->

            <!-- Sample list item -->
            <li class="list-group-item d-flex justify-content-between align-items-start state-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Abia Umuahia</div>
                    Alex Otti • 3.7 million
                </div>
                <span class="badge badge-zone rounded-pill">South East</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-start state-item">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Lagos Ikeja</div>
                    Babajide Sanwo-Olu • 20.5 million
                </div>
                <span class="badge badge-zone rounded-pill">South West</span>
            </li>
        </ol>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>