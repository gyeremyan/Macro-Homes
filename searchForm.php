<form action="houseListings.php" method="GET">
        <div class="row">
            <div class="input-group mb-4">
                <input type="text" name="search" placeholder="Search" aria-label="Search" class="form-control form-control-md"
                       <?php
                           if (filter_input(INPUT_GET, 'search') !== null){
                               echo 'value=\'' . filter_input(INPUT_GET, 'search') . '\'';
                           }
                           ?>>
                <div class="input-group-append">
                    <button id="button-addon5" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-auto mb-3">
                <label for="inputBed">Beds</label>
                <select name="inputBed" class="custom-select d-block w-100">
                    <option value="0">Any</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                    <option value="6">6+</option>
                 </select>
            </div>
            <div class="col-sm-auto mb-3">
                <label for="inputBath">Baths</label>
                <select name="inputBath" class="custom-select d-block w-100">
                    <option value="0">Any</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5+</option>
                    <option value="6">6+</option>
                </select>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minPrice">Minimum Price</label>
                <input type="text" placeholder="Min Price" name="minPrice" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'minPrice') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'minPrice') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
            <label for="maxPrice">Maximum Price</label>
            <input type="text" placeholder="Max Price" name ="maxPrice" class="form-control"
                   <?php
                   if (filter_input(INPUT_GET, 'maxPrice') !== null){
                       echo 'value=\'' . filter_input(INPUT_GET, 'maxPrice') . '\'';
                   }
                   ?>>
            </div>
            <div class="col-md-auto mb-3">
             <label for="minSqFt">Minimum Square Footage</label>
             <input type="text" placeholder="Min Square Footage" name="minSqFt" class="form-control"
                    <?php
                    if (filter_input(INPUT_GET, 'minSqFt') !== null){
                        echo 'value=\'' . filter_input(INPUT_GET, 'minSqFt') . '\'';
                    }
                    ?>>
            </div>
            <div class="col-md-auto mb-3">
             <label for="maxSqFt">Maximum Square Footage</label>
             <input type="text" placeholder="Max Square Footage" name ="maxSqFt" class="form-control"
                    <?php
                    if (filter_input(INPUT_GET, 'maxSqFt') !== null){
                        echo 'value=\'' . filter_input(INPUT_GET, 'maxSqFt') . '\'';
                    }
                    ?>>
            </div>
        </div>
        <div class="row">
                <div class="col-md-auto mb-3">
                    <label for="minPopulation">Minimum City Population</label>
                    <input type="text" placeholder="Min Population" name="minPopulation" class="form-control"
                           <?php
                           if (filter_input(INPUT_GET, 'minPopulation') !== null){
                               echo 'value=\'' . filter_input(INPUT_GET, 'minPopulation') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="maxPopulation">Maximum City Population</label>
                    <input type="text" placeholder="Max Population" name ="maxPopulation" class="form-control"
                           <?php
                           if (filter_input(INPUT_GET, 'maxPopulation') !== null){
                               echo 'value=\'' . filter_input(INPUT_GET, 'maxPopulation') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="minMedianAge">Minimum Median Age</label>
                    <input type="text" placeholder="Min Median Age" name="minMedianAge" class="form-control"
                           <?php
                           if (filter_input(INPUT_GET, 'minMedianAge') !== null){
                               echo 'value=\'' . filter_input(INPUT_GET, 'minMedianAge') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                    <label for="maxMedianAge">Maximum Median Age</label>
                    <input type="text" placeholder="Max Median Age" name ="maxMedianAge" class="form-control"
                           <?php
                           if (filter_input(INPUT_GET, 'maxMedianAge') !== null){
                               echo 'value=\'' . filter_input(INPUT_GET, 'maxMedianAge') . '\'';
                           }
                           ?>>
                </div>
                <div class="col-md-auto mb-3">
                <label for="minMedianHouseholdIncome">2020 Minimum Median Household Income</label>
                <input type="text" placeholder="Min Median Household Income" name="minMedianHouseholdIncome" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'minMedianHouseholdIncome') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'minMedianHouseholdIncome') . '\'';
                       }
                       ?>>
                </div>
                <div class="col-md-auto mb-3">
                <label for="maxMedianHouseholdIncome">2020 Maximum Median Household Income</label>
                <input type="text" placeholder="Max Median Household Income" name ="maxMedianHouseholdIncome" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'maxMedianHouseholdIncome') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'maxMedianHouseholdIncome') . '\'';
                       }
                       ?>>
                </div>
        </div>
        <div class="row">
            <div class="col-md-auto mb-3">
                <label for="minUnemploymentRate">2020 Minimum Unemployment Rate</label>
                <input type="text" placeholder="Min Unemployment Rate" name="minUnemploymentRate" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'minUnemploymentRate') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'minUnemploymentRate') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="maxUnemploymentRate">2020 Maximum Unemployment Rate</label>
                <input type="text" placeholder="Max Unemployment Rate" name ="maxUnemploymentRate" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'maxUnemploymentRate') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'maxUnemploymentRate') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Minimum Property Crime Index</label>
                <input type="text" placeholder="Min Crime Index" name="minCrimeIndex" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'minCrimeIndex') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'minCrimeIndex') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Maximum Property Crime Index</label>
                <input type="text" placeholder="Max Crime Index" name ="maxCrimeIndex" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'maxCrimeIndex') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'maxCrimeIndex') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minPopulationGrowth">2020-2025 Growth Rate: Population</label>
                <input type="text" placeholder="Min Growth Rate" name="minPopulationGrowth" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'minPopulationGrowth') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'minPopulationGrowth') . '\'';
                       }
                       ?>>

                <input type="text" placeholder="Max Growth Rate" name ="maxPopulationGrowth" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'maxPopulationGrowth') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'maxPopulationGrowth') . '\'';
                       }
                       ?>>
            </div>
        </div>
        <div class="row">
            <div class="col-md-auto mb-3">
                <label for="minBachelorsDegree">2020 Population Age 25+: Bachelor's Degree</label>
                <input type="text" placeholder="Min Bachelors Degree" name="minBachelorsDegree" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'minBachelorsDegree') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'minBachelorsDegree') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="minTotalHousingUnit">2020 Minimum Total Housing Units</label>
                <input type="text" placeholder="Min Total Housing Unit" name="minTotalHousingUnit" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'minTotalHousingUnit') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'minTotalHousingUnit') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="maxTotalHousingUnit">2020 Maximum Total Housing Units</label>
                <input type="text" placeholder="Max Total Housing Unit" name ="maxTotalHousingUnit" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'maxTotalHousingUnit') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'maxTotalHousingUnit') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label>2020 Owner Occupied Housing Units</label>
                <input type="text" placeholder="Min Owner Occupied HUs" name="minOwnerOccupiedHUs" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'maxOwnerOccupiedHUs') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'maxOwnerOccupiedHUs') . '\'';
                       }
                       ?>>
                <input type="text" placeholder="Max Owner Occupied HUs" name ="maxOwnerOccupiedHUs" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'maxOwnerOccupiedHUs') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'maxOwnerOccupiedHUs') . '\'';
                       }
                       ?>>
            </div>
            <div class="col-md-auto mb-3">
                <label for="airQuality">Minimum Air Quality</label>
                <input type="text" placeholder="Enter index 1-100" name="airQuality" class="form-control"
                       <?php
                       if (filter_input(INPUT_GET, 'search') !== null){
                           echo 'value=\'' . filter_input(INPUT_GET, 'airQuality') . '\'';
                       }
                       ?>>
            </div>
        </div>
            <div class="row">
            <div class="col-sm-auto mb-3">
                <label for="inputOrder">Sort</label>
                <select name="inputOrder" class="custom-select d-block w-100">
                    <option>Any</option>
                    <option value="beds">Bed</option>
                    <option value="baths">Bath</option>
                    <option value="price">Price</option>
                    <option value="squarefootage">Square Footage</option>
                 </select>
            </div>
            <div class="col-sm-auto mb-3">
                <label for="orderType">Order By</label>
                <select name="orderType" class="custom-select d-block w-100">
                    <option>Any</option>
                    <option value="ascend">Ascend</option>
                    <option value="descend">Descend</option>
                </select>
            </div>
        </div>
    </form>

