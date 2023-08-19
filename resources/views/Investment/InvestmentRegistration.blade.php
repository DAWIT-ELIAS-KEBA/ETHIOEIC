@extends('common.main')
<style>
.larger-textarea {
    height: 150px; 
    font-size: 14px; 
}
.right-corner {
        display: flex;
        justify-content: flex-end;
    }
.header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
table {
        border-collapse: collapse;
    }
th, td {
    border: 1px solid black;
    padding: 8px;
}
hr {
    border: 1px solid #ddd;
    margin: 20px 0;
}
</style>
@section('content')
<script>
   let currentTab = 1; // Tracks the current tab
    
    // Function to show the specified tab
    function showTab(tabIndex) {
        // Hide the current tab
        document.getElementById('tab' + currentTab).classList.remove('show', 'active');
        // Show the selected tab
        document.getElementById('tab' + tabIndex).classList.add('show', 'active');
        // Update the current tab
        currentTab = tabIndex;
    }
    function addRawMaterialRow(){
        const productTable = document.getElementById("rawMaterialTable");
            const newRow = productTable.insertRow();

            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);
            const cell5 = newRow.insertCell(4);
            const cell6 = newRow.insertCell(5);

            cell1.innerHTML = '<input type="text" name="rawMaterialName" required>';
            cell2.innerHTML = '<input type="text" name="unit" required>';
            cell3.innerHTML = '<input type="number" name="Quantity" required>';
            cell4.innerHTML = '<input type="number" name="Local " required>';
            cell5.innerHTML = '<input type="number" name="imported" required>';
            cell6.innerHTML = '<button type="button" onclick="removeProductRow(this)">Remove</button>';
    }


       // To add product to table
    function addProductRow() {
            const productTable = document.getElementById("productTable");
            const newRow = productTable.insertRow();

            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);
            const cell4 = newRow.insertCell(3);
            const cell5 = newRow.insertCell(4);
            const cell6 = newRow.insertCell(5);

            cell1.innerHTML = '<input type="text" name="productName" required>';
            cell2.innerHTML = '<input type="text" name="unit" required>';
            cell3.innerHTML = '<input type="number" name="Quantity" required>';
            cell4.innerHTML = '<input type="number" name="localMarketShare" required>';
            cell5.innerHTML = '<input type="number" name="exportMarketShare" required>';
            cell6.innerHTML = '<button type="button" onclick="removeProductRow(this)">Remove</button>';
        }

        function removeProductRow(button) {
            const row = button.parentNode.parentNode;
            const table = row.parentNode;
            table.deleteRow(row.rowIndex);
        }

        function getTableData() {
            const productTable = document.getElementById("productTable");
            const rows = productTable.rows;

            const data = [];
            for (let i = 1; i < rows.length; i++) { // Skip header row
                const row = rows[i];
                const inputs = row.getElementsByTagName("input");
                const rowData = {
                    productName: inputs[0].value,
                    unit: inputs[1].value,
                    Quantity: inputs[2].value,
                    localMarketShare: inputs[3].value,
                    exportMarketShare: inputs[4].value
                };
                data.push(rowData);
            }

            console.log(data);
        }
</script>

<div class="container">  
    <form action="{{ route('investment.submit') }}" method="POST">
        @csrf

        <!-- Add Bootstrap tabs -->
        <div class = "header-container">
                    <h2 style = "text-align:center">Investment Application Form</h2>
                <div class="d-flex justify-content-center right-corner">
                    <button type="button" class="btn btn-primary" onclick="alert('0K')">View Investment</button>
                </div>   
        </div>

        <!-- Tab content -->
        <div class="tab-content mt-3">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1">
                <!-- Your form fields for tab 1 -->
                <h4 style = "text-align:center">Select Company Name for your Investment</h4>
                <hr>
                <div class="row mb-3">
                    <label for="company_name_1st_option" class="col-sm-3 col-form-label"><strong>Company Name 1st Option</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="company_name_1st_option" placeholder="Enter Company Name Your 1st Option" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="company_name_1st_option_name_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="company_name_2nd_option" class="col-sm-3 col-form-label"><strong>Company Name 2nd Option</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="company_name_2nd_option" placeholder="Enter Company Name Your 2nd Option" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="company_name_2nd_option_name_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="company_name_3rd_option" class="col-sm-3 col-form-label"><strong>Company Name 3rd Option</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="company_name_3rd_option" placeholder="Enter Company Name Your 3rd Option" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="company_name_3rd_option_name_error"></div>
                    </div>
                </div>

                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="trade_name" class="col-sm-3 col-form-label input-group-text"><strong>Trade Name</strong></label>
                                <div class="col-sm-6">
                                    <div class="input-group flex-fill">
                                        <input type="text" class="form-control" id="trade_name" placeholder="Enter Trade Name if any" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="error-message" id="trade_name_error"></div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tin_number" class="col-sm-3 col-form-label input-group-text"><strong>TIN Number</strong></label>
                                <div class="col-sm-6">
                                    <div class="input-group flex-fill">
                                        <input type="number" class="form-control" id="tin_number" placeholder="Enter Tin Number" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="error-message" id="tin_number_error"></div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="general_manager" class="col-sm-3 col-form-label input-group-text"><strong>Manager Name</strong></label>
                                <div class="col-sm-6">
                                    <div class="input-group flex-fill">
                                        <input type="text" class="form-control" id="general_manager" placeholder="Select General Manager" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="error-message" id="general_manager_name_error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="type_of_ownership"><strong>Type of Ownership</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <select class="form-select" id="type_of_ownership">
                                <option selected>Choose</option>
                                <option value="domestic">Domestic</option>
                                <option value="foreign">Foreign</option>
                                <option value="joint_investment">Joint Investment</option>
                                <option value="branch">Branch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="type_of_ownership_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="businessForm"><strong>Select Business Form</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <select id="businessForm" class="form-select">
                                <option value="">Choose</option>
                                @foreach ($InvestmentTypes as $investmentType)
                                    <option value="{{ $investmentType->id }}">{{ $investmentType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="field_of_business"><strong>Select Field of Business</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <select id="field_of_business" class="form-select">
                                <option value="">Choose</option>
                                @foreach ($InvestmentTypes as $investmentType)
                                    <option value="{{ $investmentType->id }}">{{ $investmentType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary" onclick="showTab(2)">Next</button>
                    </div>
            </div>

            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2">
                 <h3 style = "text-align:center">Address of the Business Organization </h3> 
                 <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="region"><strong>Select Region</strong></label>
                    <div class="col-sm-6">
                        <select id="business_region" class="form-select">
                            <option value="">choose</option>
                            @foreach ($Regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="business_zone"><strong>Select Zone</strong></label>
                    <div class="col-sm-6">
                        <select id="business_zone" class="form-select">
                            <option value="">choose</option>
                            @foreach ($Zones as $zone)
                                <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="business_woreda"><strong>Select Woreda</strong></label>
                    <div class="col-sm-6">
                        <select id="business_woreda" class="form-select">
                            <option value="">choose</option>
                            @foreach ($Woredas as $woreda)
                                <option value="{{ $woreda->id }}">{{ $woreda->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
 
                 <div class="row mb-3">
                    <label for="house_number" class="col-sm-3 col-form-label"><strong>House Number</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="house_number" placeholder="Enter House Number">
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message"></div>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="PoBox" class="col-sm-3 col-form-label"><strong>P.O.Box</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="PoBox" placeholder="Enter P.O.Box">
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="PoBox_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="telephone" class="col-sm-3 col-form-label"><strong>Tele Phone</strong></label>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" id="telephone" placeholder="Enter Telephone">
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="telephone_number_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="fax" class="col-sm-3 col-form-label"><strong>FAX</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fax" placeholder="Enter FAX">
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="fax_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                    <div class="col-sm-3">
                        <div class="error-message" id="email_error"></div>
                    </div>
                </div>
                <hr>

                <div class="d-flex justify-content-center gap-3">
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab - 1)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab + 1)">Next</button>
                </div>    
            </div>

            <!-- Tab 3 -->
            <div class="tab-pane fade" id="tab3">
                <h2 style = "text-align:center">Address of authorized representative </h2>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="authorizedPersonName"><strong>Representative Name</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="authorizedPersonName" placeholder="Select Authorized Person" required>
                        <div class="error-message" id="authorizedPerson_name_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="telephone1"><strong>Tele Phone 1</strong></label>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" id="telephone1" placeholder="Enter Telephone">
                        <div class="error-message" id="telephone1_number_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="telephone2"><strong>Tele Phone 2</strong></label>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" id="telephone2" placeholder="Enter Telephone">
                        <div class="error-message" id="telephone2_number_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="authorizedemail"><strong>Email</strong></label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="authorizedemail" placeholder="Enter Email">
                        <div class="error-message" id="authorizedemail_error"></div>
                    </div>
                </div>
                <hr>
                 <div class="container">
                    <h2 style = "text-align:center">Investment Activity</h2>

                    <div id="textFieldsContainer" class="mb-3">
                    </div>
                    <hr>
                    <button id="addFieldButton" class = "btn btn-primary">Add Investment Activity</button>
                 </div> 
                 <hr>
                <div class="d-flex justify-content-center gap-3">
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab - 1)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab + 1)">Next</button>
                </div>

            </div>
             <!-- tab 4 -->
            <div class="tab-pane fade" id="tab4">
                   
                   <h2>Investment Project Location  </h2> 
                 <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="region"><strong>Select Region</strong></label>
                    <div class="col-sm-6">
                        <select id="investment_region" class="form-select">
                            <option value="">choose</option>
                            @foreach ($Regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="zone"><strong>Select Zone</strong></label>
                    <div class="col-sm-6">
                        <select id="investment_zone" class="form-select">
                            <option value="">choose</option>
                            @foreach ($Zones as $zone)
                                <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="woreda"><strong>Select Woreda</strong></label>
                    <div class="col-sm-6">
                        <select id="investment_woreda" class="form-select">
                            <option value="">choose</option>
                            @foreach ($Woredas as $woreda)
                                <option value="{{ $woreda->id }}">{{ $woreda->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="house_number"><strong>House Number</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="house_number" placeholder="Enter House Number">
                        <div class="error-message" id="house_number_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="PoBox"><strong>P.O.Box</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="PoBox" placeholder="Enter P.O.Box">
                        <div class="error-message" id="PoBox_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="telephone"><strong>Tele Phone</strong></label>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" id="telephone" placeholder="Enter Telephone">
                        <div class="error-message" id="telephone_number_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="fax"><strong>FAX</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fax" placeholder="Enter FAX">
                        <div class="error-message" id="fax_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="email"><strong>Email</strong></label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email">
                        <div class="error-message" id="email_error"></div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center gap-3">
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab - 1)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab + 1)">Next</button>
                </div>                      
           </div>

              <!-- Tab 5-->
           <div class="tab-pane fade" id="tab5">
                   
                <div class="input-group mb-3"> 
                    <label class="input-group-text" for="Poject_objective"><strong>Write Project Objective</strong></label>
                    <textarea class="form-control larger-textarea" id="project_objective" placeholder="Project Objective" rows="6" cols="60"></textarea>
                </div>
                 <h3 style ="text-align:center">Utility Requirements </h3> 
                 <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="land"><strong>Land utility</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="landrequirement" placeholder="Enter Land Requirement in Meter square">
                            <span class="input-group-text">M<sup>2</sup></span>
                        </div>
                        <div class="error-message" id="land_requruirement_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="electric_power"><strong>Electric Power</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="electric_power" placeholder="Enter Electric Power utility in kw per year">
                            <span class="input-group-text">KW/Year</span>
                        </div>
                        <div class="error-message" id="electric_requruirement_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="water_utility"><strong>Water Utility</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="water_utility" placeholder="Enter Water utility in M3 per year">
                            <span class="input-group-text">M<sup>3</sup>/Year</span>
                        </div>
                        <div class="error-message" id="water_requruirement_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="internet_utility"><strong>Internet Utility</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="internet_utility" placeholder="Enter Internet utility in MB per Month">
                            <span class="input-group-text">MB/Month</span>
                        </div>
                        <div class="error-message" id="internet_requruirement_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="other_utility"><strong>Others (if any)</strong></label>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <input type="text" class="form-control" id="other_utility" placeholder="Enter other utility along with its units">
                        </div>
                        <div class="error-message" id="other_requruirement_error"></div>
                    </div>
                </div>

                <h4 style ="text-align:center">Amount of planned investment capital (in United States Dollar and Ethiopian Birr)</h4>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="usa_dollar"><strong>In USA Dollar</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="usa_dollar" placeholder="Enter in USA Dollar">
                        </div>
                        <div class="error-message" id="usa_dollar_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="ethiopian_birr"><strong>Ethiopian Birr</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="ethiopian_birr" placeholder="Enter In Ethiopian Birr">
                        </div>
                        <div class="error-message" id="ethiopian_birr_error"></div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center gap-3">
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab - 1)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab + 1)">Next</button>
                </div>
           </div>
              <!-- Tab 6-->
            <div class="tab-pane fade" id="tab6">
                 <h4 style ="text-align:center">Source of Finance</h4>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="equity"><strong>Equity</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="equity" placeholder="Enter Equity">
                        </div>
                        <div class="error-message" id="equity_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="loan"><strong>Loan</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="loan" placeholder="Enter In Ethiopian Birr">
                        </div>
                        <div class="error-message" id="loan_error"></div>
                    </div>
                </div>
                <hr>
                <h4 style ="text-align:center">Market Destination</h4>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="export"><strong>Export</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="export" placeholder="Enter Export">
                        </div>
                        <div class="error-message" id="export_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="local"><strong>Local</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="local" placeholder="Enter Local">
                        </div>
                        <div class="error-message" id="local_error"></div>
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label input-group-text" for="permanent_employee"><strong>Permanent Employee</strong></label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input type="number" class="form-control" id="permanent_employee" placeholder="Enter Permanent Employee">
                        </div>
                        <div class="error-message" id="permanent_employee_error"></div>
                    </div>
                </div>
                <h4 style ="text-align:center">Estimated annual production/service rendering of the project at full capacity</h4>
                    <div class="table-responsive">    
                        <table id="productTable" class = "table table-striped">
                            <tr>
                                <th>Product/Service Name</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Local Market Share</th>
                                <th>Export Market Share</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>
                        <hr>
                        <button type="button" onclick="addProductRow()">Add Product</button>
                        <hr>
                <div class="d-flex justify-content-center gap-3">
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab - 1)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="showTab(currentTab + 1)">Next</button>
                </div>
            </div>
            <!-- Tab 7 -->
            <div class="tab-pane fade" id="tab7">
                       <h4 style ="text-align:center">Raw material requirements at full capacity </h4>
                       <div class="table-responsive">
                            <table id="rawMaterialTable" class = "table table-striped">
                                <tr>
                                    <th>Raw Material Name</th>
                                    <th>Unit</th>
                                    <th>Quantity</th>
                                    <th>Sourced From Local (Percent)</th>
                                    <th>Imported (Percent)</th>
                                    <th>Action</th>
                                </tr>
                            </table>
                        </div>
                        <button type="button" onclick="addRawMaterialRow()">Add Raw Material</button>
                        <hr>
                        <h4 style ="text-align:center">Brief description about the potential impact of the proposed investment on environment and measures of mitigation to be undertaken </h4>
                        <div class="input-group mb-3"> 
                              <label class="input-group-text" for="potential_impact"><strong>Write Potential Impact</strong></label>
                              <textarea class="form-control larger-textarea" id="potential_impact" placeholder="Write Potential Impacte" rows="6" cols="60"></textarea>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-6 col-form-label input-group-text" for="type_of_ownership"><strong>Where did you get information about EIC?</strong></label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <select class="form-select" id="type_of_ownership">
                                        <option selected>Choose</option>
                                        <option value="EIC">Ethiopian Investment Commission</option>
                                        <option value="EEA">Ethiopian Embassy Abroad</option>
                                        <option value="EM">Investment Mission</option>
                                        <option value="branch">Domestic Business Partner</option>
                                        <option value="AW">Agency website</option>
                                        <option value="EM">Investment Mission</option>
                                        <option value="SM">Social Media</option>
                                        <option value="OS">Other Source</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="error-message" id="type_of_ownership_error"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="fileInput" class="col-sm-3 col-form-label"><strong>Attach Investment File</strong></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="fileInput" name="fileInput">
                                </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="error-message" id="file_input_error"></div>
                            </div>
                        </div>
                        <hr>

                        <div class="d-flex justify-content-center gap-3">
                            <button type="button" class="btn btn-primary" onclick="showTab(currentTab - 1)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="submit()">Submit</button>
                        </div>
            </div>
        </div>
    </form>
</div>
<script>

    $(document).ready(function () {
        // When a region is selected, update the zones dropdown
        $('#business_region').on('change', function () {
            var selectedRegion = $(this).val();
            if (selectedRegion !== '') {
                $.ajax({
                    url: '/get-zones/' + selectedRegion, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#business_zone').empty(); // Clear existing options
                        $('#business_zone').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#business_zone').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#business_zone').html('<option value="">choose</option>');
                $('#business_woreda').html('<option value="">choose</option>');
            }
        });
        $('#business_zone').on('change', function () {
            var selectedZone = $(this).val();
            if (selectedZone !== '') {
                $.ajax({
                    url: '/get-woredas/' + selectedZone, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#business_woreda').empty(); // Clear existing options
                        $('#business_woreda').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#business_woreda').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#business_woreda').html('<option value="">choose</option>');
            }
        });
   

    // INVESTMENT LOCATION
    $('#investment_region').on('change', function () {
            var selectedRegion = $(this).val();
            if (selectedRegion !== '') {
                $.ajax({
                    url: '/get-zones/' + selectedRegion, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#investment_zone').empty(); // Clear existing options
                        $('#investment_zone').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#investment_zone').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#investment_zone').html('<option value="">choose</option>');
                $('#investment_woreda').html('<option value="">choose</option>');
            }
        });
        $('#investment_zone').on('change', function () {
            var selectedZone = $(this).val();
            if (selectedZone !== '') {
                $.ajax({
                    url: '/get-woredas/' + selectedZone, // Replace with the actual route
                    method: 'GET',
                    success: function (data) {
                        $('#investment_woreda').empty(); // Clear existing options
                        $('#investment_woreda').append($('<option></option>').attr('value', "").text("choose"));
                        $.each(data, function (id, name) {
                            $('#investment_woreda').append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            } else {
                $('#investment_woreda').html('<option value="">choose</option>');
            }
        });

    });
    // Java scrypt to add Investment Activity
    document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('textFieldsContainer');
    const addButton = document.getElementById('addFieldButton');
    let fieldCounter = 1; // To keep track of added fields

    addButton.addEventListener('click', function() {
        const fieldDiv = document.createElement('div');
        fieldDiv.classList.add('mb-3', 'row');

        const label = document.createElement('label');
        label.classList.add('input-group-text', 'col-sm-3', 'col-form-label');
        label.setAttribute('for', 'activity' + fieldCounter);
        label.innerHTML = '<strong>Activity ' + fieldCounter + '</strong>';

        const fieldDiv2 = document.createElement('div');
        fieldDiv2.classList.add('col-sm-4');

        const inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.classList.add('form-control');
        inputField.id = 'activity' + fieldCounter;
        inputField.placeholder = 'Enter Activity ' + fieldCounter;
        inputField.required = false;

        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.classList.add('btn', 'btn-danger', 'col-sm-1', 'remove-button');
        removeButton.textContent = 'Remove';
        removeButton.style.padding = '0.2rem 0.5rem';
        

        fieldDiv.appendChild(label);
        fieldDiv.appendChild(fieldDiv2);
        fieldDiv2.appendChild(inputField);
        fieldDiv.appendChild(removeButton);


        container.appendChild(fieldDiv);

        // Add event listener to remove the field when the remove button is clicked
        removeButton.addEventListener('click', function() {
            container.removeChild(fieldDiv);
        });

        fieldCounter++;
    });
});

</script>


@endsection
